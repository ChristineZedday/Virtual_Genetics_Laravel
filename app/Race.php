<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gamedata;
use App\Animal;
use App\Competition;
use App\StatutMale;

class Race extends Model
{
   public function AssoRace() //Races de croisement: Demi-sang Arabe, Welsh Part Bred, Français de Selle...
   {
	   return $this->hasMany('App\AssoRace', 'race_produit_id', 'id');
   }

   public function Competitions() //compètes réservées à une ou plusieurs races
   {
      return $this->belongsToMany('App\Competition');
   }

   public function approuveEtalons($resultat, $animal)
   {
      $date = Gamedata::date();
      $noteAppro = $this->id == 16 ? 12 : 15;
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
   $races = $resultat->competition->Races;
   if ($races->count() == 1 && $races->first() == $this) {
      if ($resultat->note_synthese >= $noteAppro) {
         if ($this->appro_classes) {
            if ($animal->taille_cm >= $this->taille_min && $animal->taille_cm <= $this->taille_max ) {
               $animal->StatutMale->qualite = 'approuvé';
               $animal->StatutMale->save();
            }
         else {
            $statut->qualite = $appro;
            $statut->save();
         }
         }
      }
   }
   else {
      if ($resultat->note_synthese >= $noteAppro && $statut->qualite == 'approuvé' ) {
        
         $statut->approuvePFS = 1;
         //il faut d'abord être approuvé dans sa race
         $statut->save();
         
   }
}
}

static function associeRaces ($etalon,$jument,$produit,$dateS) 
{
   if ($etalon->StatutMale == 'entier' || $etalon->StatutMale == 'refusé'  ) {
      $produit->race_id = 17;
      $produit->save();
     //ONC, point barre.
   }
   else if ($etalon->qualite == 'autorisation sanitaire' || $etalon->ageAdministratif($dateS) < $etalon->race->age_repro_male || $jument->ageAdministratif($dateS) < $jument->race->age_repro_femelle ) {
      $produit->race_id =1; 
      $produit->save();
      switch (true) {
         case Animal::pourCentWelsh($produit->id) >= 12.5:
            $produit->RacesPossibles()->attach(10); //WPB
         case Animal::pourCentRace($produit->id,8) >= 50:
            $produit->RacesPossibles()->attach(9); //DSA
         case $produit->taille_cm < 90 && empty($produit->pathologie):
            $produit->RacesPossibles()->attach(3); //miniature
         default:
            $produit->RacesPossibles()->attach(1);

      }
    
   }
   else if ($jument->race == $etalon->race){
      $produit->race_id =$etalon->race->id;
      $produit->save();
   }

   else {
      switch (true) {
         case Animal::pourCentWelsh($produit->id) == 100:
            $taille = $produit->taille_cm;
            $race =  AssoRace::where('race_pere_id', $etalon->race->id)->where('race_mere_id', $jument->race->id)->where('automatique', 1)->where('taille_conditions', 0)->first()->id;
            if ($race != NULL) {
            $produit->race_id = $race->id; 
            $produit->save();
            }
            else {
               $races =  AssoRace::where('race_pere_id', $etalon->race->id)->where('race_mere_id', $jument->race->id)->where('automatique', 1)->where('taille_conditions', 1)->get()->id; 
               if (sizeof($races)>0)
                  {
                    foreach ($races as $race)
                    {
                        $race = Race::Find($race->race_produit_id);             
  
                        if (($taille >= $race->taille_min) && ($taille <= $race->taille_max))
                        {
                         $produit->race_id = $race->id;
                         $produit->save();
                         break;
                        }
                       
                      
                    }
                  }
            }

         break;
         case ($etalon->race->id == 13 && $jument->race->id == 16) :
            $produit->race_id = 13;
            $produit->save();
         break;
         case ($etalon->race->id == 16 && $jument->race->id == 13 && $jument->elevage->id == 13) :
            $produit->race_id = 13;
            $produit->save();
         break;
         case  ($etalon->race->id == 13 && $jument->race->id == 14 ) || ($jument->elevage->id == 13 && $etalon->race->id == 14) :
            $produit->race_id = 14;
            $produit->save();
         break;
         case $etalon->StatutMale->approuvePFS == 1:
            if (AssoRace::where('race_pere_id', $etalon->race->id)->where('race_mere_id', $jument->race->id)->where('race_produit_id', 11)->first() != NULL) {
               $produit->RacesPossibles()->attach(11); //PFS

            }
            if (AssoRace::where('race_pere_id', $etalon->race->id)->where('race_mere_id', $jument->race->id)->where('race_produit_id', 14)->first() != NULL) {
               $produit->RacesPossibles()->attach(14); //Pottok B

            }
         case $etalon->race_id == 13:
            $produit->RacesPossibles()->attach(14);

         case Animal::pourCentWelsh($produit->id) >= 12.5:
               $produit->RacesPossibles()->attach(10); //WPB
         case Animal::pourCentRace($produit->id, 8) >= 50:
               $produit->RacesPossibles()->attach(9); //DSA
         case $produit->taille_cm < 90 && empty($produit->pathologie):
               $produit->RacesPossibles()->attach(3); //miniature
         default:
               $produit->RacesPossibles()->attach(1);
         

      }
   }

}
}
