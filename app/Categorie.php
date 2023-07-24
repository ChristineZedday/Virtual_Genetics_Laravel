<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use App\Evenement;
use App\Performance;
use App\StatutFemelle;

class Categorie extends Model
{
   /*Catégorie (liée au sexe, âge...) dans laquelle peut concourrir un cheval. Voir à Compétitions pour le fonctionnement. */

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
   
   
   $competition = Competition::Find($competition);

        if ($competition->type != 'Modèle et Allures' && $animal->StatutFemelle && (!$animal->StatutFemelle->vide || $animal->seraSuiteeAu($date) ))
        {
            return false;
        }
        if ($this->suitee && ($animal->StatutFemelle && !$animal->seraSuiteeAu($date))) {
           
            return false;
        }
        if (!$this->suitee && ($animal->StatutFemelle && $animal->seraSuiteeAu($date))) {
           
            return false;
        }

        $races = $competition->Races;
      
        if (!empty($races)) {
            $races = $races->modelkeys();
           // dd($races);
            if (!in_array($animal->race_id, $races) ) {
              
                if (!in_array(1,$races)) {
                    return false;
                }
            }
        }
  
        if  ($animal->ageAdministratif ($date) < $this->age_min) {

                return false;
            }
        if ($this->age_max != NULL && $this->age_max < $animal->ageAdministratif($date)) {
                
                return false; 
            }
       
        if ($this->sexe !== NULL) { 
            if ($this->sexe != $animal->genre()) {
                return false;
        }
    }

        if ($this->taille_min != null && $this->taille_min > $animal->taille()) {
         
            return false;
    }

    if ($this->taille_max != null && $this->taille_max < $animal->taille()) {
       
        return false;
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
    if ($cheval->StatutFemelle) {
        if ($cheval->StatutFemelle->suitee){
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

public static function rechercheDressage(Animal $cheval) 
   {
    $taille = $cheval->taille();
    return Categorie::whereNotNull('taille_max')->where('taille_max', '>=', $taille)->where('taille_min','<=', $taille)->get();
   
   }

public function run($competition, $evenement) {
    
    $inscrits = Resultat::where('evenement_id', $evenement->id)->where('categorie_id', $this->id)->where('competition_id', $competition->id)->get();

    foreach ($inscrits as $inscrit) {
    $elevage = $inscrit->animal->elevage;
    $frais = $competition->frais_voyage;
    if (NULL != $inscrit->animal->StatutFemelle && $inscrit->animal->StatutFemelle->suitee ) {
        $frais += $frais * 0.5;
    }
        if ($elevage->budget > $frais ) {
            $elevage->budget -= $frais;
            $elevage->save();
        } 
        else {
            $inscrits->forget($inscrit->id);
    }
    }   

    $prix = $competition->prix_premier;
    $nb = $inscrits->count();
   //dd($nb);
    //ça marche quand il ya des animaux du bon âge
    $classes = ($nb%3==0) ? (int)($nb/3) : (int) ($nb/3) +1;
    $notes = [];
   //dd('inscrits: '.$nb.' classés: '.$classes);
    foreach ($inscrits as $inscrit) {
        $animal = $inscrit->animal;
      

   
        if ($competition->type == 'Modèle et Allures')
           { $notes[$animal->id] = $animal->modele_allures  + rand(-1000,1000)/1000; //éviter les ex-aequo
          }
            
        else//ça serait un bug
         {   $notes[$animal->id] = 2  * ($animal->modele_allures   + $animal->capacite_dressage_additive)  + $animal->capacite_apprentissage_additive ;
  }

   
    $inscrit->note_synthese = $notes[$animal->id];
    $inscrit->save();
}  

    //dd($inscrit);//ouais!!

   arsort($notes); //tri décroissant des valeurs
   $notes = array_slice($notes,0,$classes,true);//on garde les classés
  
   $i =1;
   foreach ($notes as $key => $value){ //pour tous les classés
    $res= Resultat::where('evenement_id',$evenement->id)->where('competition_id', $competition->id)->where('categorie_id', $this->id)->where('animal_id', $key)->first();
    //dd($res);//c'est ça
    $res->classement = $i;
    $res->save();
    $animal = Animal::find($key);
    $perf = $animal->Performance;
    switch ($competition->type){
        case 'Modèle et Allures':
            switch($i) {
            case 1:
            $perf->points += 5;
            break;
            case 2:
            $perf->points += 2;
            break;
            default:
            $perf->points +=1;
            }
            break;
        case 'Dressage':
            switch($i) {
                case 1:
                    $perf->pourcent_niveau += 20;
                    break;
                case 2:
                    $perf->pourcent_niveau += 15;
                    break;
                default:
                    $perf->pourcent_niveau +=10;
                }
    }
    $perf->save();
    switch ($competition->type) {
        case 'Modèle et Allures':
    $perf->upgrade();
    break;
            case 'Dressage':
    $perf->upgradeDressage();
    }
  

    $animal = Animal::Find($key);
    //dd($animal->nomComplet());// Chouette!
    
    $elevage = Elevage::Find($animal->elevage_id);
   
    if ($i == 1) {
        $elevage->budget += $prix; 
    }
    else  {
        $elevage->budget += (int) ($prix/$i);//prix_premier/$i);
    }
    $elevage->save();
    //dd($elevage);//OK
    $i++; }



}  
}

   
