<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gamedata;
use App\Animal;
use App\Competition;
use App\StatutMale;
use App\RacesPossibles;

class Race extends Model
{
   public function AssoRace() //Races de croisement: Demi-sang Arabe, Welsh Part Bred, Français de Selle...
   {
	   return $this->hasMany('App\AssoRace', 'race_produit_id', 'id');
   }

   public function Animaux()
    {
      return $this->BelongsToMany('App\Animal','races_possibles');
   }

   public function Competitions() //compètes réservées à une ou plusieurs races
   {
      return $this->belongsToMany('App\Competition');
   }

   public function approuveEtalons($resultat, $animal)
   {
      $date = Gamedata::date();
      $noteAppro = 15;
      $appro = $animal->ageAdministratif($date) >= $this->age_repro_male ? 'approuvé' : ($this->approbation_provisoire?'approbation provisoire' : 'autorisation sanitaire');
      $statut = $animal->StatutMale;
      $races = $resultat->competition->Races;
      if ($races->count() == 1 && $races->first()->id == $this->id) {
      
         if ($resultat->note_synthese >= $noteAppro) {
           
               $statut->qualite = $appro;
               $statut->save();
            
            }
      

         }
      }


public function approuveEtalonsClasses($resultat, $animal)
{
   $date = Gamedata::date();
   $noteAppro =  15;
   $appro = $animal->ageAdministratif($date) >= $this->age_repro_male ? 'approuvé' : ($this->approbation_provisoire?'approbation provisoire' : 'autorisation sanitaire');
   $statut = $animal->StatutMale;
   
         if ($resultat->note_synthese >= $noteAppro &&$animal->taille_cm >= $this->taille_min && $animal->taille_cm <= $this->taille_max ) {
            $animal->StatutMale->qualite = $appro;
            $animal->StatutMale->save();
   
   }
   
}

public function approuveEtalonsPFS($resultat, $animal)
{
   
   $noteAppro =  15;

   $statut = $animal->StatutMale;
   
         if ($resultat->note_synthese >= $noteAppro &&$animal->taille_cm >= $this->taille_min && $animal->taille_cm <= $this->taille_max ) {
            $animal->StatutMale->approuvePFS =1;
            $animal->StatutMale->save();
   //vaut aussi pour SF
   }
   
}

static function determineRace ($etalon,$jument,$produit,$dateS, $declaree) 
{
   $racet = $etalon->race_id;
   $raceju = $jument->race_id;
   if (!$declaree || $jument->statut_administratif != 'enregistré' ) {
      $produit->race_id = 17;
      $produit->save();
     //ONC si saillie non déclarée ou jument non enregistrée
     
   }
   else if ( $jument->ageAdministratif($dateS) < $jument->race->age_repro_femelle ) {
      $produit->race_id =1; 
      $produit->save();
      
   } 
   else if ($raceju == $racet) {
      $produit->race_id =$racet;
      $produit->save();
   }

   else {
      $race = Animal::chercheRaces($etalon, $jument, $produit->taille_cm);
      if ($race != NULL) {
         $produit->race_id = $race;
         $produit->save();
         
      }
      else {
         $produit->race_id = 1;
         $produit->save();
       
      }
      
   }

   if (1 == $produit->race_id) {
      Race::associeRaces($etalon,$jument,$produit);
   }
   
}


static function associeRaces ($etalon,$jument,$produit) 
{
   $racet = $etalon->race_id;
   $raceju = $jument->race_id;
   $taille = $produit->taille_cm;
   $welsh = Animal::PourCentWelsh($produit->id);
   $arabe = Animal::PourCentRace($produit->id, 8);
   $appro = $etalon->StatutMale->approuvePFS;

 
 
    if ($appro == false) {
      $possibles = AssoRace::where('automatique', 0)->where(function ($q3) use ($racet){$q3->where('race_pere_id', $racet)->orwhere('race_pere_id', NULL);})->where(function ($q4) use ($raceju){$q4->where('race_mere_id', $raceju)->orwhere('race_mere_id', NULL);})->where('approbation', 0)->where(function ($q1) use ($welsh) { $q1->where('PourCentWelsh', '<=', $welsh)->orWhere('PourCentWelsh', NULL);})->where(function ($q2) use ($arabe) { $q2->where('PourCentArabe', '<=' ,$arabe)->orWhere('PourCentArabe', NULL);})->get();
      
    }
    else {
      $possibles = AssoRace::where('automatique', 0)->where(function ($q3) use ($racet){$q3->where('race_pere_id', $racet)->orwhere('race_pere_id', NULL);})->where(function ($q4) use ($raceju){$q4->where('race_mere_id', $raceju)->orwhere('race_mere_id', NULL);})->where(function ($q1) use ($welsh) { $q1->where('PourCentWelsh', '<=', $welsh)->orWhere('PourCentWelsh', NULL);})->where(function ($q2) use ($arabe) { $q2->where('PourCentArabe', '<=', $arabe)->orWhere('PourCentArabe', NULL);})->get();
     
    }

   
    foreach ($possibles as $possible) {
    /*  if ($produit->RacesPossibles()->get()->contains($possible->race_produit_id)) {
        
         continue;
      }*/
      if ($possible->taille_conditions == 0) {
      $produit->RacesPossibles()->attach($possible->race_produit_id);
    
      }
      else {
         $race = Race::Find($possible->race_produit_id);             
  
         if (($taille >= $race->taille_min) && ($taille <= $race->taille_max))
         {
            $produit->RacesPossibles()->attach($possible->race_produit_id);
         }
      }
    }
         
}
}
