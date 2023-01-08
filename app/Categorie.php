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
   public function verification($animal, $evenement, $competition) : bool
   {
    $date = $evenement->date;

    $results = Resultat::Where('animal_id', $animal->id)->get();
    
    foreach ($results as $result) {
        $event = Evenement::Find($result->evenement->id);
        if ($event->date === $date) {
            return false; //déjà inscrit ailleurs
        }
    }
    $evid = $evenement->id;
   
   $competition = Competition::Find($competition);
    $races = $competition->races;
   //dd($races);
           
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
public function run($competition, $evenement) {
    
    $inscrits = Resultat::where('evenement_id', $evenement)->where('categorie_id', $this->id)->where('competition_id', $competition)->get();
  $prix = Competition::Find($competition)->prix_premier;
  
    $nb = $inscrits->count();
    //dd($inscrits); //ça marche quand il ya des animaux du bon âge
   $classes = ($nb%3==0) ? (int)($nb/3) : (int) ($nb/3) +1;
   $notes = [];
   //dd('inscrits: '.$nb.' classés: '.$classes);
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
   $notes = array_slice($notes,0,$classes,true);//on garde les classés
  
   $i =1;
   foreach ($notes as $key => $value){ //pour tous les classés
    $res= Resultat::where('evenement_id',$evenement)->where('competition_id', $competition)->where('animal_id', $key)->first();
    //dd($res);//c'est ça
    $res->classement = $i;
    $res->save();
    //dd($res);//Oui-da.
    $animal = Animal::Find($key);
    //dd($animal->nomComplet());// Chouette!
    $elevage = Elevage::Find($animal->elevage_id);
   
    if ($i == 1) {
        $elevage->budget += $prix; // prix_premier, mettre en f compète et pas race;
    }
    else  {
        $elevage->budget += (int) ($prix/$i);//prix_premier/$i);
    }
    $elevage->save();
    //dd($elevage);//OK
    $i++; }



}  
}

   
