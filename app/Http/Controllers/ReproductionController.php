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
use App\Race;
use App\AssoRace;
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
    $statut->date_saillie = TempsController::dateCourante();
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
          $animal->nom = crenom($lettre);
          
          $animal->elevage_id = $elevage;
          $sexe = rand(1,2);
          $animal->sexe = $sexe==1? 'jeune mâle' : 'jeune femelle';

          
          $etalon = Animal::Find($etalon);
          $jument = Animal::Find($jument);

          $animal->taille_additive = ($etalon->taille_additive + $jument->taille_additive) /2 ;
          $animal->taille_cm = $animal->taille_additive + rand(-2,2);

                if ($etalon->race_id == $jument->race_id)
                {
                    $animal->race_id = $etalon->race_id;
                }
                else{
                  $races = AssoRace::where('race_pere_id', $etalon->race_id)->where('race_mere_id', $jument->race_id)->where('automatique', true)->get();
                 
                  if (sizeof($races) > 0)
                  {
                   
                    foreach ($races as $race)
                    {
                      if (! $race->taille_conditions)
                      {
                        $animal->race_id = $race->race_produit_id;
                      }
                      else{
                        $race = Race::Find($race->race_produit_id);
                        if ($animal->taille_cm >= $race->taille_min && $animal->taille_cm <= $race->taille_max)
                        {
                          $animal->race_id = $race->id;
                        }
                      }
                    }
                  }
                  else
                  {
                    $animal->race_id = 1;
                  }
                }
        
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
           
            switch (true)
            {
              case in_array($alezan, $base_couleurs) && in_array($alezanbai, $base_couleurs):

                $animal->base = 'alezan agouti';
                $animal->save();
                
                  $animal->Couleur()->attach($alezan->id);
                
                  $animal->Image()->attach($alezan->image_id);
                  
              break;

              case in_array($alezan, $base_couleurs) && !(in_array($alezanbai, $base_couleurs)):

                $animal->base = 'alezan aa';
                $animal->save();
                
                  $animal->Couleur()->attach($alezan->id);
                
                  $animal->Image()->attach($alezan->image_id);
                  
              break;

              case in_array($alezanbai, $base_couleurs) && in_array($noirbai, $base_couleurs):

                $animal->base = 'bai';
                $animal->save();
                
                $animal->Couleur()->attach($bai->id);
                
                $animal->Image()->attach($bai->image_id);
                  
              break;

              default:

                $animal->base = 'noir';
                $animal->save();
                  
                $animal->Couleur()->attach($noir->id);
                
                $animal->Image()->attach($noir->image_id);
                  
              break;


            }
          
            foreach ($dilue_couleurs as $coul)
            {
                $base = Couleur::where('nom', $animal->base)->first();
                $couleur = AssoCouleur::where('couleur1_id', $base->id)->where('couleur2_id', $coul->id)->first();
                if (isset($couleur))
                  {
                    $couleur = $couleur->couleur_res_id;
                  $animal->Couleur()->attach($couleur);
                  $image = Couleur::Find($couleur)->image_id;
                  $animal->Image()->attach($image);

                  if ($coul->nom == 'silver')
                  {
                    $modif_couleurs[] = $coul; //à la fois dilution (noir silver) et motif (crins lavés des autres Extension)
                  }
                }

              
               
            }
            //gérer les dilutions multiples au moyen de couches d'images?

            foreach ($motif_couleurs as $coul)
            {
                if ($blanc >=0)
                {
                  if ($blanc >9)
                  {
                    $image = Image::where('chemin','blanc')->first();
                    $animal->Image()->attach($image->id);
                  }
                  else
                  {
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
                  } //blanc entre 0 et 9
    
              } //sinon s'exprime pas. Na!
                
            } //end foreach
            
            foreach ($modif_couleurs as $coul) 
            {
              $base =  $animal->base;
              switch ($coul->nom)
              {
                case 'crins lavés':
                 
                  if ($base == 'alezan aa' || $base == 'alezan agouti')
                  {
                    $mushroom = Couleur::where('nom','mushroom')->first();
                    if (in_array($mushroom, $dilue_couleurs))
                    {
                    $image = Image::where('chemin','crinsblancs')->first();
                    $animal->Image()->attach($image->id);
                    }
                    else
                    {
                      $image = Image::where('chemin','flaxen')->first();
                      $animal->Image()->attach($image->id);
                    }
                  }
                break;

                case 'pangaré':
                  
                  if ($base == 'bai' || $base == 'alezan agouti')
                  { 
                    
                    $image = Image::where('chemin','pangare')->first();
                    $animal->Image()->attach($image->id);
                  }
                
                case 'silver':
                  if ($base == 'bai' || $base == 'noir')
                  { 
                    $image = Image::where('chemin','silver')->first();
                    $animal->Image()->attach($image->id);
                  }
                break;

                default:
                  $image = Image::where('chemin',$coul->nom)->first();
                  $animal->Image()->attach($image->id);
                break;

              }

            } //end foreach
      
    
      } //end if succès
      else{
           $statut->vide = true;
           $statut->save();
          
      }
   
   
    return redirect()->route('animaux',[$elevage]);
   } //end function croisement
  
} //end class ReproductionController

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

function crenom ($lettre)
{
$consonnes = ['b','d','f','g','h','j','k','l','m','n','p','r','s','t','v','w','x','z'];
$voyelles = ['a','e','i','o','u','y'];
return $lettre.$voyelles[array_rand($voyelles)].$consonnes[array_rand($consonnes)].$voyelles[array_rand($voyelles)].$consonnes[array_rand($consonnes)].$voyelles[array_rand($voyelles)];
}

