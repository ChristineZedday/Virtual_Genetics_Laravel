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
   
}
   
