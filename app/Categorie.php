<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use App\Evenement;

class Categorie extends Model
{
   

   public function Competitions() 
   {
       return $this->BelongsToMany('App\Competition', 'categorie_competition', 'competition_id', 'categorie_id');
   }

   
/**Fonction qui vérifie qu'un cheval de joueur est inscrit dans la bonne catégorie */
   public function verification($animal, $evenement) : bool
   {
      
    $date = $evenement->date;

    $results = Resultat::Where('animal_id', $animal->id)->get();
    
    foreach ($results as $result) {
        $event = Evenement::Find($result->evenement->id);
        if ($event->date === $date) {
            return false;
        }
    }
   
    $races = $evenement->competition->races;
           
    if ($this->type==="Modèle et Allures Race" ) {
        if ($races->isNotEmpty()) {
               
                if (false == $races->contains($animal->race)) {
                
                return false;
                }
        }
        if  ($animal->ageAdministratif ($date) < $this->age_min) {
           // dd('< age min:'. ($this->age_min < $animal->ageAdministratif($date)? 'true' : 'false'));
                return false;
            }
        if ($this->age_max < $animal->ageAdministratif($date)) {
          //  dd('> age max:'.$this->age_max < $animal->ageAdministratif($date));
                return false; 
            }
        if ($this->sexe != $animal->genre()) {
          //  dd('other sexe: '.$this->sexe < $animal->genre());
                return false;
        }
           
    }
        return true;

}
        
    

   /**Fonction qui cherche la catégorie  pour un cheval de PNJ */
   public static function recherche(Animal $cheval) 
   {
    $date =Gamedata::date();
    $age = $cheval->ageAdministratif($date);
   
   if ($cheval->Genre() === 'mâle') {
    $autorise = 0;
    if ($cheval->StatutMale) {
        if ($cheval->StatutMale->qualite == "autorisé"
        || $cheval->StatutMale->qualite == "approuvé") {
            $autorise = 1;
        }
    }
        $categorie = Categorie::where('sexe', $cheval->Genre())->where('age_min','<=', $age)->where('age_max', '>=', $age)->where(function ($q) use ($autorise){$q->whereNull('autorise')->orWhere('autorise', $autorise);})->first(); //éligibilité cheval, puis chercher les évènements avec ces cat
        //)
       

   }
   else {
    $suitee = 0;
    if ($cheval->Statut) {
        if ($cheval->Statut->suitee){
        $suitee = 1;
        }
    }
        $categorie = Categorie::where('sexe', $cheval->Genre())->where('age_min','<=', $age)->where('age_max', '>=', $age)->where(function ($q) use ($suitee){$q->whereNull('suitee')->orWhere('suitee', $suitee);})->first(); //éligibilité cheval, puis chercher les évènements avec ces cat
        //)

   }
   
   
 if (isset($categorie)) {
  return $categorie;
 }
 else {
     return false;
 }
}
public function run($evenement) {
    $inscrits = Resultat::where('evenement_id', $evenement)->where('categorie_id', $this->id)->get();
    $nb = $inscrits->count();
    //dd($inscrits); //ça marche quand il ya des animaux du bon âge
   $classes = ($nb%3==0) ? (int)($nb/3) : (int) ($nb/3) +1;
   $notes = [];
   foreach ($inscrits as $inscrit) {
    $animal = $inscrit->animal;
    //dd($animal->nomComplet());//vi vi vi
    $notes[$animal->id] = $animal->modele_allures  + rand(1,1000)/1000; //éviter les ex-aequo
    //dd($notes); //TB
    $inscrit->note_synthese = $notes[$animal->id];
    $inscrit->save();
    //dd($inscrit);//ouais!!
   }
   arsort($notes); //tri décroissant des valeurs
   //dd($notes);
   $i =1;
   do {//toujours au moins un classé
   foreach ($notes as $key => $value){
    $res= Resultat::where('animal_id', $key)->first();
    //dd($res);//c'est ça
    $res->classement = $i;
    $res->save();
    //dd($res);//Oui-da.
    $animal = Animal::Find($key);
    //dd($animal->nomComplet());// Chouette!
    $elevage = Elevage::find($animal->elevage_id);
   
    if ($i == 1) {
        $elevage->budget += 50; // prix_premier, mettre en f compète et pas race;
    }
    else  {
        $elevage->budget += (int) (50/$i);//prix_premier/$i);
    }
    $elevage->save();
    //dd($elevage);//OK
    $i++; }
   } while ($i <= $classes);

  /*  $note1 = 0;
    $note2 = 0;
    $note3 = 0;
    $premier =0;
    $deuxieme = 0;
    $troisieme=0;
    foreach ($inscrits as $inscrit) {
       if ($inscrit->animal->modele_allures > $note1 ) {
           $note1 = $inscrit->animal->modele_allures;
           $premier = $inscrit->animal_id;
           
       }
       else if ($inscrit->animal->modele_allures > $note2 ) {
           $note2 = $inscrit->animal->modele_allures;
           $deuxieme = $inscrit->animal_id;

       }
       else if ($inscrit->animal->modele_allures > $note3 ) {
           $note3 = $inscrit->animal->modele_allures;
           $troisieme = $inscrit->animal_id;

       }
     $inscrit->note_synthese =   $inscrit->animal->modele_allures;
     $inscrit->save(); 

    }
    if ($premier != 0) {//tient pas compte des catégories!!!
    $res1 = Resultat::where('animal_id', '=', $premier)->first();
    $res1->classement = 1;
    $res1->note_synthese = $note1;
    $res1->save();
    }
    if ($deuxieme != 0 && $inscrits->count() > 3) {
       $res2 = Resultat::where('animal_id', '=', $deuxieme)->first();
       $res2->classement = 2;
       $res2->note_synthese = $note2;
       $res2->save();
       }
   if ($troisieme != 0 && $inscrits->count() > 6) {
       $res3 = Resultat::where('animal_id', '=', $troisieme)->first();
       $res3->classement = 3;
       $res3->note_synthese = $note3;
       $res3->save();
       }*/

}  
}

   
