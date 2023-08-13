<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\StatutFemelle;
use App\StatutMale;
use App\Animal;
use App\Elevage;
use App\Genome;
use App\Genotype;
use App\Phenotype;
use App\Pathologie;
use App\Couleur;
use App\AssoCouleur;
use App\Race;
use App\AssoRace;
use App\Image;
use App\Debug;
use App\Performance;
use App\Http\Controllers\TempsController;

class ReproductionController extends Controller
 /**
 * launch reproduction process
*/
{
   static function croisement($elevage, $etalon, $jument)
   {
    //vérification du statut des reproducteurs
    $jument = Animal::Find($jument);
    $statut = $jument->StatutFemelle;
    if ($statut == NULL)
    {
      $statut = new StatutFemelle;
      $statut->animal_id = $jument->id;
    }
    $etalon = Animal::Find($etalon);
    $statutM = $etalon->StatutMale; //fondateurs
   
    
    $elevage = Elevage::Find($elevage);
    //controle pas déjà saillie
    $dateS = Gamedata::date();
    if ($statut->vide )
      {
        $statut->pres_pleine = true; 
        $statut->etalon_id = $etalon->id;
        $statut->date_saillie = $dateS;
        $date = Gamedata::ElevenMonths();
        $statut->terme = $date;
        $statut->save();
  
        srand((float) microtime()*1000000);
      
        $fertilite = ($statutM->fertilite * $statut->fertilite)/100 ;
        $success = rand(1,$fertilite);

      

          if ($etalon->elevage->id != $elevage->id)
          {
            $elevage->budget = $elevage->budget - $statutM->prix;
            $elevage->save();

            $etalonnier = $etalon->Elevage;
            $etalonnier->budget = $etalonnier->budget + $statutM->prix;
            $etalonnier->save();
          }
          if ($success > 50)
          {
            //gestion statut maternel et identité administrative
              $statut->vide = false; 
              $statut->save();
            
              $animal = new Animal;
              $animal->foetus = true;
              $animal->fondateur = false;
            
              $animal->date_naissance = $date;
              $animal->sire_id = $etalon->id;
              $animal->dam_id = $jument->id;
              $dam = Animal::Find($animal->dam_id);
              
              if ($elevage->role == 'Vendeur') {
                $aff = rand(1,5);
                switch ($aff)
                {
                  case 1:
                  case 2:
                  case 3:
                    if (isset($dam->affixe_id))
                  { $animal->affixe_id = $dam->affixe_id;}
                   else if (isset($elevage->Affixe))
                   {
                     $animal->affixe_id = $elevage->affixe_id;
                   }
                  break;

                  case 4:
                    if (isset($animal->Sire->affixe_id))
                  { $animal->affixe_id = $animal->Sire->affixe_id;}
                  else if (isset($elevage->Affixe))
                   {
                     $animal->affixe_id = $elevage->affixe_id;
                   }
                  break;

                  case 5:
                    if (isset($elevage->Affixe))
                    {
                      $animal->affixe_id = $elevage->affixe_id;
                    }
                  break;


                }
              
              }
              else {
              
                  if (isset($elevage->Affixe) && $elevage->role == 'Joueur')
                  {
                    $animal->affixe_id = $elevage->affixe_id;
                  }
              }
              
              $lettre = Gamedata::checkLettre($date);
              do {
                $animal->nom = crenom($lettre);
              }
             while (Animal::checkNom($animal->id, $animal->nom, $animal->affixe_id) === false);
             //vérifier nom pas déjà pris
              
              $animal->elevage_id = $elevage->id;
              $sexe = rand(1,2);
              $animal->sexe = $sexe==1? 'jeune poulain' : 'jeune pouliche';
            

              $animal->taille_additive = (int) (($etalon->taille_additive + $jument->taille_additive) /2 + rand (-2,2)) ;
              
            
            
              $animal->consang = calculConsang($etalon->id, $jument->id);
            

              switch(true)
              {
                case $animal->consang < 6.25:
                  $n = 2;
                  $m = 2;
                break;

                case $animal->consang < 12.5:
                  $n = 2;
                  $m = 1;
                break;

                case $animal->consang < 25:
                  $n = 3;
                  $m = 1;
                break;

                default:
                $n =4;
                $m =0;
              }

              $animal->modele_allures_additifs = (int)(($etalon->modele_allures_additifs + $jument->modele_allures_additifs) /2 + rand (-$n,$m));
              $animal->capacite_apprentissage_additive = (int)(($etalon->capacite_apprentissage_additive + $jument->capacite_apprentissage_additive) /2 + rand (-$n,$m));
              $animal->capacite_dressage_additive = (int)(($etalon->capacite_dressage_additive + $jument->capacite_dressage_additive) /2 + rand (-$n,$m));
              
              $animal->save();

              Performance::initialize($animal->id);
      
              Genome::mixGenes($etalon->id, $jument->id, $animal->id);
              Genome::readGenes($animal->id);
              $animal = Animal::find($animal->id); //pour mettre à jour modif effectuées ds Genome!
              $qualite = $etalon->StatutMale->qualite;
            
$age = $jument->ageAdministratif();
              $animal->race_id = Animal::chercheRaces($etalon->race_id,$jument->race_id,$animal->taille_cm, $qualite,$age);
              
              $animal->save();
          } //end if succès
          else{
              $statut->vide = true;
              $statut->save();
              
          }
        } //end pas déjà saillie
   
   if ($jument->Elevage->role != 'Vendeur')
  {  return redirect()->route('reproduction.jument',[$elevage->id]);}
   } //end function croisement

  

   static function devoileConsang($el, $S, $D)
{
  $cons = calculConsang($S,$D);
  $el = Elevage::Find($el);
  $el->budget = $el->budget -10;
  $el->save();
  return redirect()->back()->with('message', $cons);
}

  
} //end class ReproductionController


function calculConsang($S, $D)
{
  $SS = Animal::find($S);
  if (isset ($SS))
  {
    $ageS = $SS->ageMonths();
  }
 
  $DD = Animal::find($D);
  if (isset ($DD))
  {
    $ageD = $DD->ageMonths();
  }

  switch (true)
  {
    case $D == null || $S==null :
      return 0;
    break;

    case $D == $S:
      return 100/(2-($SS->consang/100));
    break;

    case $SS->fondateur && $DD->fondateur:
      return 0;
    break;

    case $SS->fondateur || ($ageS >= $ageD):
      return calculConsang($S, $DD->sire_id)/2 + calculConsang($S, $DD->dam_id)/2 ;  
    break;

    case $DD->fondateur || ($ageD > $ageS):
      return calculConsang($D, $SS->sire_id)/2 + calculConsang($D, $SS->dam_id)/2 ;  
    break;

    default:
    dd ('???oublié quoi????');
  }
      
  
}

function crenom ($lettre)
{
$consonnes = ['b','d','f','g','h','j','k','l','m','n','p','r','s','t','v','w','x','z'];
$voyelles = ['a','e','i','o','u','y'];
return $lettre.$voyelles[array_rand($voyelles)].$consonnes[array_rand($consonnes)].$voyelles[array_rand($voyelles)].$consonnes[array_rand($consonnes)].$voyelles[array_rand($voyelles)];
}

