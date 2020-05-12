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
use App\Pathologie;
use App\Couleur;
use App\AssoCouleur;
use App\Image;
use App\Http\Controllers\TempsController;

class ReproductionController extends Controller
 /**
 * launch reproduction process
*/
{
   static function croisement($elevage, $etalon, $jument)
   {
    
    $statut = StatutsFemelle::where('animal_id',$jument)->first();
    if (!isset($statut))
    {
      $statut = new statutsFemelle();
      $statut->animal_id = $jument;
    }
    $statut->pres_pleine = true; 
    $statut->etalon_id = $etalon;
    $date = TempsController::ElevenMonths();
    $statut->terme = $date;
    $statut->save();
    srand((float) microtime()*1000000);
    $success = rand(1,2);
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
          
          $lettre = TempsController::checkLettre($date);
          $animal->nom = $lettre;
          
          $animal->elevage_id = $elevage;
          $sexe = rand(1,2);
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
          $base_couleurs = [];
          $dilue_couleurs =[];
          $motif_couleurs =[];
          $modif_couleurs = [];
          $blanc =0;
          foreach ($genotypes as $genotype)
            {
              $p = $genotype->allele_p_id;
              $m = $genotype->allele_m_id;

              $phenotype = Phenotype::where(function($query1) use ($p,$m) {return $query1->where('allele1_id', $p)->where('allele2_id', $m);})->orWhere(function($query2) use ($p,$m) {return $query2->where('allele1_id', $m)->where('allele2_id', $p);})->first();
              if (isset($phenotype)) {
                
                // $animal->Phenotype()->attach($phenotype->id);//pas forcément?

                if (isset($phenotype->effet_taille))
                  {
                    $animal->taille_cm = $animal->taille_cm + $phenotype->effet_taille; 
                    $animal->save();
                  }
                  if (isset($phenotype->pathologie_id))
                  {
                    $animal->Pathologie()->attach($phenotype->pathologie_id);
                  }
                  if (isset($phenotype->couleur_id) ) {
                    $couleur = Couleur::Find($phenotype->couleur_id);
                    if ($phenotype->effet_blanc <> null)
                    {
                      $blanc += $phenotype->effet_blanc;
                    }
                    switch (true) {
                      case $couleur->base_couleur:
                        $base_couleurs[]= $couleur;
                      break;

                      case $couleur->est_motif:
                        $motif_couleurs[] =$couleur;
                      break;
                    
                      case $couleur->est_dilution:

                        $dilue_couleurs[] =$couleur;
                      break;

                      default:
                        $modif_couleurs[] =$couleur;
                    }
                  
                    
                  } //end pheno couleur
              }//endisset phenotype

              
            } //foreach genotype

            $alezan = Couleur::where('nom','alezan')->first();
            $noirbai = Couleur::where('nom','noirbai')->first();
            $bai = Couleur::where('nom','bai')->first();
            $noir = Couleur::where('nom','noir')->first();
            $alezanbai = Couleur::where('nom','alezanbai')->first();
           
            if (in_array($alezan, $base_couleurs))
            {
              $animal->Couleur()->attach($alezan->id);
              if (empty($dilue_couleurs))
              {
                $animal->Image()->attach($alezan->image_id);
              }
            }

            else if (in_array($noirbai, $base_couleurs) && (in_array($alezanbai, $base_couleurs)))
            {
              $animal->Couleur()->attach($bai->id);
              if (empty($dilue_couleurs))
              {
                $animal->Image()->attach($bai->image_id);
              }
            }

            else {
              $animal->Couleur()->attach($noir->id);
              if (empty($dilue_couleurs))
              {
                $animal->Image()->attach($noir->image_id);
              }
            }

           

            foreach ($dilue_couleurs as $coul)
            {
                $base = $animal->Couleur()->where('base_couleur', true)->first();
                $couleur = AssoCouleur::where('couleur1_id', $base->id)->where('couleur2_id', $coul->id)->first();
                $couleur = $couleur->couleur_res_id;
                $animal->Couleur()->attach($couleur);
                $image = Couleur::Find($couleur)->image_id;
                $animal->Image()->attach($image);
               
            }
            //gérer les dilutions multiples au moyen de couches d'images?

            foreach ($motif_couleurs as $coul)
            {
                if ($blanc >=0)
                {
                  if ($blanc >=9)
                  {
                    $image = Image::where('chemin','blanc')->first();
                    $animal->Image()->attach($image->id);
                  }
                  else
                  {
                    $chemin = $coul->nom;
                    $image = Image::where('chemin',$coul->nom.$blanc)->first();
                    
                    if ($image <> null)
                    {
                    
                      $animal->Image()->attach($image->id);
                    }
                    else 
                    {
                      $nimage=new Image();
                      $nimage->extension = 'png';
                      $nimage->chemin =$coul->nom.$blanc;
                    //et faudra la dessiner si c'est pas fait!
                      $nimage->z_index =80;
                      $nimage->save();
                      $animal->Image()->attach($nimage->id);
                      
                    }
                  }

                }
              
                                //sinon s'exprime pas. Na!
                
            } //end foreach
            
      
    
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

