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

  /* public function approuveEtalons($resultat, $animal)
   {
         if ($resultat->note_synthese >= 15) {

               $animal->statutMale->setModele15;
           
               $animal->statutMale->approuveEtalons();
            
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
   
}*/

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
      $race = RACE::chercheRaces($etalon, $jument, $produit->taille_cm);
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

  static function chercheRaces($etalon,$jument,$taille) //Race d'un produit dont les parents sont de races différentes, quand cette race est déterminée automatiquement (exemple: Welsh Pony x Welsh Cob)
    {
        $qualite = $etalon->StatutMale->qualite;
       
            if ($qualite == 'approuvé' || $qualite == 'approbation provisoire') {


              $race = AssoRace::where('race_pere_id', $etalon->race_id)->where('race_mere_id', $jument->race_id)->where('automatique', 1)->where('taille_conditions',0)->first();

                if (isset ($race))
                {
                    return $race->race_produit_id;
                   
                }
                else 
                {
                  $races = AssoRace::where('race_pere_id', $etalon->race_id)->where('race_mere_id', $jument->race_id)->where('automatique', 1)->where('taille_conditions', 1)->get();
  
                  if (sizeof($races)>0)
                  {
                    foreach ($races as $race)
                    {
                        $race = Race::Find($race->race_produit_id);             
  
                        if (($taille >= $race->taille_min) && ($taille <= $race->taille_max))
                        {
                         return $race->id;
                        }
                       
                      
                    }
                  }
                   
                }
            } 
           

            else {
                return 1;
            }
       
              
    }

    static function pourCentRace($animal, $bred) //$bred: id bred
    //Pour les races de croisement ou un % de telle ou telle race est requis
    {
        
        if ($animal->race_id == $bred)
        {
            return 100;
        }
        else if ($animal->fondateur || $animal->race_id == 17)
        {
            return 0;
        }
        else
        {
            return (Animal::pourCentRace($animal->sire_id,$bred) + Animal::pourCentRace($animal->dam_id,$bred))/2;
        }
    }

static function pourCentPoney($animal) {
   if ($animal->race->poney_sport || $animal->race_id == 2 || $animal->race_id == 3) {
      return 100;
   }
    else if ($animal->fondateur || $animal->race_id == 17)
        {
            return 0;
        }
          else
        {
            return (Animal::pourCentPoney($animal->sire_id) + Animal::pourCentPoney($animal->dam_id))/2;
        }
}

    static function pourCentWelsh($animal)
    { //le Welsh est divisé en 4 sections traitées ici comme des races 
        $animal = Animal::Find($animal);
        if ($animal->race_id == 4 || $animal->race_id == 5 || $animal->race_id == 6 || $animal->race_id == 7 )
        {
            return 100;
        }
        else if ($animal->fondateur || $animal->race_id == 17)
        {
            return 0;
        }
        else
        {
            return (Animal::pourCentWelsh($animal->sire_id) + Animal::pourCentWelsh($animal->dam_id))/2;
        }
    }


static function associeRaces ($etalon,$jument,$produit) 
{
   $racet = $etalon->race_id;
   $raceju = $jument->race_id;
   $taille = $produit->taille_cm;
   $welsh = PourCentWelsh($produit->id);
   $arabe = PourCentRace($produit, 8);
   $lusitanien = Animal::PourCentRace($produit, 23);
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
static function WelshPartBreed ($produit,$etalon,$jument) {
   if (pourCentWelsh($produit) >= 12.5) {
      return true;

   }
   else return false;
}
static function DemiSangArabe ($produit,$etalon,$jument) {
   if (pourCentRace($produit, 8) >= 50) {
      return true;

   }
   else return false;
}

static function PottokB ($produit, $etalon,$jument) {
   if (pourCentRace($produit, 13)< 50) {
      return false;
    $produit_id = $produit->id;
      $gris = Genotype::where(function ($q, $produit_id){$q->where('animal_id',$produit_id);})->where('allele_m_id',30)->orWhere('allele_p_id',30)->get();
      if ($gris) {
         return false;
      }

   }
   else if ($etalon->SatutMale->qualite == "approuvé" && ($etalon->race_id = 13 ) || ($etalon->race_id = 14)) {
      return true;
   }
    else if ($etalon->SatutMale->approuvePFS ) {
      return true;
   }
      
      else {return false;}
}

static function CDF ($produit, $etalon,$jument) {
   if (pourCentRace($produit, 23) < 12.5){
      return false;
   }
   if (pourCentRace($produit, 17) > 12.5){
      return false; //Origines connues jusqu'à la troisième génération
   }
   else if (!$etalon->race->cheval_sport ||  !$jument->race->cheval_sport){
      return false;
   }

   //ajouter acceptation jument
   else {
      if (($etalon->race->cheval_sport && $etalon->StatutMale->labellise_dressage || $etalon->race_id == 25) && ($jument->race->cheval_sport && $jument->StatutFemelle->labellisee_dressage || $jument->race_id == 25)) {
         {return true;}
      }
    else { return false;}
}

}
static function PFS ($produit, $etalon,$jument) {
   if ($produit->taille > 149) {
      return false;
   }
   switch (true) {
      case $etalon->statutMale->approuvePFS:
         switch (true) {
            case $jument->race->poney_sport:
               return true;
            case ($jument->race_id == 9  || $jument->race_id == 1) && ($jument->Sire->race->poney_sport || $jument->Dam->race->poney_sport) :
               return true;
         }
      case $etalon->qualite=='approuvé' && $etalon->race->cheval_sport && $jument->race->poney_sport && $jument->taille < 140:
   return true;
      case $etalon->statutMale->approuvePFS && $etalon->taille < 140 && $jument->race->cheval_sport && $jument->taille < 14:
   return true;
   default:
   return false;
      }
}

static function Pintabian ($produit, $etalon,$jument) {
   if (pourCentRace($produit,8) < 99){
      return false;}
   else {
      $produit_id = $produit->id;
      $tob = Genotype::where(function ($q, $produit_id){$q->where('animal_id',$produit_id);})->where('allele_m_id',8)->orWhere('allele_p_id',8)->get();
      if ($tob) {
         return true;
      }
      else {return false;}
   }
   }

static function AngloArabe ($produit, $etalon,$jument) {
    if (pourCentRace($produit,8) < 12.5 || pourCentRace($produit,18) == 0){
      return false;}
   if (pourCentRace($produit,8) + pourCentRace($produit,18) + pourCentRace($produit,19) >= 87.5) {
      if (pourCentRace($produit,17) >= 6.25 || pourCentPoney($produit) >= 6.25){
         return false;

      }
      else {return true;}
   }
   else {return false;}

}

static function CSAN ($produit, $etalon,$jument) {
   if (!$etalon->StatutMale->approuve) {
      return false;
   }
   $originel = pourCentRace($produit,8) + pourCentRace($produit,18) + pourCentRace($produit,19) + pourCentRace($produit,24) + pourCentRace($produit,20) + pourCentRace($produit,21);
   if ( $originel == 100) {
      return true;
}
else if ($originel + pourCentRace($produit,9) == 100 && (pourCentPoney($produit) + pourcentRace($produit,17) < 6.25)) {
return true;

}
else {return false;}
}
static function SF ($produit, $etalon,$jument) {
   $originel = pourCentRace($produit,8) + pourCentRace($produit,18) + pourCentRace($produit,19) + pourCentRace($produit,24) + pourCentRace($produit,20) + pourCentRace($produit,21);
if (!$etalon->approuveSF){
   return false;
}
else if ($originel == 100) {
   return true;
}
else if ($originel + pourCentRace($produit,9) == 100 && (pourCentPoney($produit) + pourcentRace($produit,17) < 6.25)) {
return true;
}
else if ( $jument->StatutFemelle->labellisee_SF){
  return true;
}
else {return false;}
}

}
