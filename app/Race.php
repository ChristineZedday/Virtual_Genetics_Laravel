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
      $appro = $animal->ageAdministratif($date) >= $this->age_repro_male ? 'approuvé' : ($this->approbation_provisoire?'approbation_provisoire' : 'autorisation_sanitaire');
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
   $appro = $animal->ageAdministratif($date) >= $this->age_repro_male ? 'approuvé' : ($this->approbation_provisoire?'approbation_provisoire' : 'autorisation sanitaire');
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
      $produit->races()->attach(17);
     //ONC, point barre.
   }
   else if ($etalon->qualite == 'autorisation sanitaire' || $etalon->ageAdministratif($dateS) < $etalon->race->age_repro_male || $jument->ageAdministratif($dateS) < $jument->race->age_repro_femelle ) {
      $produit->races()->attach(1); 
      switch (true) {
         case pourCentWelsh($produit) >= 12.5:
            $produit->races_possibles()->attach(10); //WPB
         case pourCentArabe($produit) >= 50:
            $produit->races_possibles()->attach(9); //DSA
         case $produit->taille_cm < 90 && empty($produit->pathologie):
            $produit->races_possibles()->attach(3); //miniature
         default:
            $produit->races_possibles()->attach(1);

      }
    
   }
   else if ($jument->race == $etalon->race){
      $produit->races()->attach($etalon->race->id);
   }

   else {
      switch (true) {
         case pourCentWelsh($produit) == 100:
            $taille = $produit->taille_cm;
            $race =  AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('automatique', 1)->where('taille_conditions', 0)->first()->id;
            if ($race != NULL) {
            $produit->races()->attach($race); 
            }
            else {
               $races =  AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('automatique', 1)->where('taille_conditions', 1)->get()->id; 
               if (sizeof($races)>0)
                  {
                    foreach ($races as $race)
                    {
                        $race = Race::Find($race->race_produit_id);             
  
                        if (($taille >= $race->taille_min) && ($taille <= $race->taille_max))
                        {
                         $produit->races()->attach($race->id);
                         break;
                        }
                       
                      
                    }
                  }
            }

         break;
         case ($etalon->race->id == 13 && $jument->race->id == 16) :
            $produit->races()->attach(13);
         break;
         case ($etalon->race->id == 16 && $jument->race->id == 13 && $jument->elevage->id == 13) :
            $produit->races()->attach(13);
         break;
         case (($etalon->race->id == 13 && $jument->race->id == 14 ) || ($jument->elevage->id == 13 && $etalon->race->id == 14)) :
            $produit->races()->attach(14);
         break;
         case $etalon->StatutMale->approuvePFS == 1:
            if (AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('race_produit_id', 11)->first() != NULL) {
               $produit->races_possibles()->attach(11); //PFS

            }
            if (AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('race_produit_id', 14)->first() != NULL) {
               $produit->races_possibles()->attach(14); //PFS

            }
         case pourCentWelsh($produit) >= 12.5:
               $produit->races_possibles()->attach(10); //WPB
         case pourCentRace($produit, $arabe) >= 50:
               $produit->races_possibles()->attach(9); //DSA
         case $produit->taille_cm < 90 && empty($produit->pathologie):
               $produit->races_possibles()->attach(3); //miniature
         default:
               $produit->races_possibles()->attach(1);
         

      }
   }

}
}
