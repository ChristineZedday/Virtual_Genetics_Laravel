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
      $noteAppro = $this->id == 16 ? 12 : 15;
      $appro = $animal->ageAdministratif($date) >= $this->age_repro_male ? 'approuvé' : ($this->approbation_provisoire?'approbation provisoire' : 'autorisation sanitaire');
      $statut = $animal->StatutMale;
      $races = $resultat->competition->Races;
      if ($races->count() == 1 && $races->first()->id == $this->id) {
      
         if ($resultat->note_synthese >= $noteAppro) {
           
               $statut->qualite = $appro;
               $statut->save();
            
            }
         else if ($this->id == 13 && $resultat->note_synthese >= 12 && $animal->elevage_id == 13 ) {
            $animal->race_id = 16;
            $animal->save();
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
   
   }
   
}

static function determineRace ($etalon,$jument,$produit,$dateS) {
   $racet = $etalon->race_id;
   $raceju = $jument->race_id;
   if ($etalon->StatutMale->qualite == 'entier' || $etalon->StatutMale->qualite == 'refusé'  ) {
      $produit->race_id = 17;
      $produit->save();
     //ONC, point barre.
     
   }
   else if ($etalon->qualite == 'autorisation sanitaire' || $etalon->ageAdministratif($dateS) < $etalon->race->age_repro_male || $jument->ageAdministratif($dateS) < $jument->race->age_repro_femelle ) {
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
      if ($produit->RacesPossibles()->get()->contains($possible->race_produit_id)) {
        
         continue;
      }
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
dd($produit->RacesPossibles()->get());
    
    /* switch (true) {
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
   else if ($raceju == $racet){
      $produit->race_id =$racet;
      $produit->save();
   }

   else {
      switch (true) {
         case Animal::pourCentWelsh($produit->id) == 100:
            $taille = $produit->taille_cm;
           switch (true) {
            case ($racet == 4 && $raceju == 5) || ($racet == 5 && $raceju == 4):
               $produit->race_id = 5;
               $produit->save();
            break;
            case ($racet == 4 && $raceju == 6) || ($racet == 6 && $raceju == 4):
               $produit->race_id = 6;
               $produit->save();
            break;
            case ($racet == 4 && $raceju) == 7 || ($racet == 7 && $raceju == 4):
               $produit->race_id = 6;
               $produit->save();
            break;
            case ($racet == 5 && $raceju == 6) || ($racet == 6 && $raceju == 5):
               $produit->race_id = 6;
               $produit->save();
            break;
            case ($racet == 5 && $raceju == 7) || ($racet == 7 && $raceju == 5):
               if ($taille < 138) {
                  $produit->race_id = 6;
               }
               else {
                  $produit->race_id = 7;
               }
               $produit->save();
               break;

            case ($racet == 6 && $raceju == 7) || ($racet == 7 && $raceju == 6):
                  if ($taille < 138) {
                     $produit->race_id = 6;
                  }
                  else {
                     $produit->race_id = 7;
                  }
               $produit->save();
           }

         break;
         case ($racet == 13 && $raceju == 16) :
            $produit->race_id = 13;
            $produit->save();
         break;
         case ($racet == 16 && $raceju== 13 && $jument->elevage->id == 13) :
            $produit->race_id = 13;
            $produit->save();
         break;
         case  ($racet == 13 && $raceju == 14 ) || ($jument->elevage->id == 13 && $etalon->race->id == 14) :
            $produit->race_id = 14;
            $produit->save();
         break;
         case $etalon->StatutMale->approuvePFS == 1 || $racet == 11:
            if (AssoRace::where('race_pere_id', $racet)->where('race_mere_id', $raceju)->where('race_produit_id', 11)->first() != NULL) {
               $produit->RacesPossibles()->attach(11); //PFS
            }
            if (AssoRace::where('race_pere_id', $racet)->where('race_mere_id', $raceju)->where('race_produit_id', 14)->first() != NULL) {
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
               $produit->Race_id =1;
               $produit->save();
         

      }
   }
 if ($produit->race_id == NULL) {
                     $produit->race_id = 1;
                     $produit->save();
                    }*/
}
}
