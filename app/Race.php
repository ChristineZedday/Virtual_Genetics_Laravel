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
      $races = $resultat->competition->Races;
      if ($races->count() == 1 && $races->first() == $this) {
         if ($resultat->note_synthese >= $noteAppro) {
            if ($this->appro_classes) {
               if ($resultat->classement != NULL && $animal->taille_cm >= $this->taille_min && $animal->taille_cm <= $this->taille_max ) {
                  $animal->StatutMale->qualite = 'approuvé';
               }
            else {
               $animal->StatutMale->qualite = $appro;
               $animal->StatutMale->save();
            }
            }
         }
      }
      else {
         if ($resultat->note_synthese >= $noteAppro && $resultat->classement != NULL && $animal->taille_cm >= $this->taille_min && $animal->taille_cm <= $this->taille_max) {
            if ($animal->StatutMale->qualite == 'approuvé') {
            $animal->StatutMale->approuvePFS;
            //il faut d'abord être approuvé dans sa race
            $animal->StatutMale->save();
            }
      }
   }
}
}
