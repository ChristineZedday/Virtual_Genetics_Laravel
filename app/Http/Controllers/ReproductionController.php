<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;
use App\Elevage;
use App\Genome;
use App\Genotype;
use App\Phenotype;
use App\Http\Controllers\TempsController;

class ReproductionController extends Controller
 /**
 * launch reproduction process
*/
{
   static function croisement($elevage, $etalon, $jument)
   {
    
    $statut = StatutsFemelle::where('animal_id',$jument)->first();
    
    $statut->pres_pleine = true; 
    $statut->etalon_id = $etalon;
    $date = TempsController::ElevenMonths();
    $statut->terme = $date;
    $statut->save();
       $success = mt_rand(1,2);
       if ($success == 1)
       {
          $statut->vide = false; 
          $statut->save();
         
          $animal = new Animal;
          $animal->foetus = true;
          $animal->fondateur = false;
          $animal->date_naissance = $date;
          $animal->sire_id = $etalon;
          $animal->dam_id = $jument;
          $dam = Animal::Find($animal->dam_id);
          $elv = Elevage::Find($elevage);
          if ($dam->fondateur) {
            $animal->affixe_id = $dam->affixe_id;
          }
          else {
           
              if (isset($elv->Affixe))
              {
                $animal->affixe_id = $elv->affixe_id;
              }
          }
          if ($elv->role == 'Vendeur') {
            $lettre = TempsController::checkLettre($date);
            $animal->nom = $lettre;
          }
          $animal->elevage_id = $elevage;
          $sexe = mt_rand(1,2);
          $animal->sexe = $sexe==1? 'jeune mâle' : 'jeune femelle';
          $etalon = Animal::Find($etalon);
          $jument = Animal::Find($jument);
                if ($etalon->race_id == $jument->race_id)
                {
                    $animal->race_id = $etalon->race_id;
                }
                else{
                    $animal->race_id = 1;
                }
        $animal->taille_additive = ($etalon->taille_additive + $jument->taille_additive) /2 ;
        $animal->taille_cm = $animal->taille_additive;
        $animal->consang = calculConsang($etalon->id, $jument->id);
        $animal->save();
        Genome::mixGenes($etalon->id, $jument->id, $animal->id);
        $genotypes = Genotype::where('animal_id',$animal->id)->get();
        foreach ($genotypes as $genotype)
          {
           $p = $genotype->allele_p_id;
           $m = $genotype->allele_m_id;

          $phenotype = Phenotype::where(function($query1) use ($p,$m) {return $query1->where('allele1_id', $p)->where('allele2_id', $m);})->orWhere(function($query2) use ($p,$m) {return $query2->where('allele1_id', $m)->where('allele2_id', $p);})->first();
            if (isset($phenotype)) {
              
              $animal->Phenotype()->attach($phenotype->id);//pas forcément?

              if (isset($phenotype->effet_taille))
                {
                  $animal->taille_cm = $animal->taille_cm + $phenotype->effet_taille; 
                  $animal->save();
                }
            }
          }
         
       }
       else{
           $statut->vide = true;
           $statut->save();
          
       }
   
   
    return redirect()->route('animaux',[$elevage]);
   }
  
}

function calculConsang($S, $D)
{
  $SS = Animal::find($S);
  if (isset ($SS))
  {
    $ageS = TempsController::ageMonths($SS->date_naissance);
  }
 
  $DD = Animal::find($D);
  if (isset ($DD))
  {
    $ageD = TempsController::ageMonths($DD->date_naissance);
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

