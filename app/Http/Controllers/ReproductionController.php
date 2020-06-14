<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
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
use App\Http\Controllers\TempsController;

class ReproductionController extends Controller
 /**
 * launch reproduction process
*/
{
   static function croisement($elevage, $etalon, $jument)
   {
    
    $statut = statutsFemelle::where('animal_id',$jument)->first(); //fondateurs
    if (!isset($statut))
    {
      $statut = new statutsFemelle();
      $statut->animal_id = $jument;
    }
    $statutM = StatutMale::where('animal_id',$etalon)->first(); //fondateurs
    if (!isset($statutM)) //à supprimer? normalement tous les animaux ont un statut avec checkPuberes
    {
      $statutM = new StatutMale();
      $statutM->animal_id = $etalon;
      $statutM->qualite = 'autorisé' ;
      $statutM->save();

    }
    $statut->pres_pleine = true; 
    $statut->etalon_id = $etalon;
    $statut->date_saillie = TempsController::dateCourante();
    $date = TempsController::ElevenMonths();
    $statut->terme = $date;
    $statut->save();
    $etalon = Animal::Find($etalon);
    $jument = Animal::Find($jument);
    srand((float) microtime()*1000000);
   
    $fertilite = ($etalon->StatutMale->fertilite * $jument->Statut->fertilite)/100 ;
    $success = rand(1,$fertilite);

  
    $elevage = Elevage::Find($elevage);

      if ($etalon->elevage->id != $elevage->id)
      {
        $elevage->budget = $elevage->budget - $etalon->StatutMale->prix;
        $elevage->save();

        $etalonnier = $etalon->Elevage;
        $etalonnier->budget = $etalonnier->budget + $etalon->StatutMale->prix;
        $etalonnier->save();
      }
       if ($success > 50)
       {
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
              break;

              case 4:
                if (isset($animal->Sire->affixe_id))
               { $animal->affixe_id = $animal->Sire->affixe_id;}
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
          
          $lettre = TempsController::checkLettre($date);
          $animal->nom = crenom($lettre);
          
          $animal->elevage_id = $elevage->id;
          $sexe = rand(1,2);
          $animal->sexe = $sexe==1? 'jeune mâle' : 'jeune femelle';
         

          $animal->taille_additive = ($etalon->taille_additive + $jument->taille_additive) /2 + rand (-2,2) ;
          $animal->taille_cm = $animal->taille_additive + rand(-2,2);

         
                if ($etalon->race_id == $jument->race_id && ($etalon->StatutMale->qualite == 'autorisé' || $etalon->StatutMale->qualite == 'approuvé'  ))
                {
                  $animal->race_id = $etalon->race_id;
                }
                else 
                    if ($etalon->StatutMale->qualite == 'autorisé' || $etalon->StatutMale->qualite == 'approuvé'  )
                    {
                     
                      $races = AssoRace::where('race_pere_id', $etalon->race_id)->where('race_mere_id', $jument->race_id)->where('automatique', 1)->get(); //pas true, 1?

                      if (sizeof($races) > 0)
                      {
                      
                        foreach ($races as $race)
                        {
                         
                          if ($race->taille_conditions)
                          {
                            $race = Race::Find($race->race_produit_id);

                            if (($animal->taille_cm >= $race->taille_min) && ($animal->taille_cm <= $race->taille_max))
                            {
                              $animal->race_id = $race->id;
                            }
                          
                          }
                        else 
                          {
                          $animal->race_id = $race->race_produit_id;
                          }
                        }
                    }
                  
                    else //croisement non répertorié
                    {
                      $animal->race_id = 1;
                    }
                }
                else //etalon pas autorisé
                {
                  $animal->race_id = 1;
                }
        
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

          $animal->modele_allures_additifs = ($etalon->modele_allures_additifs + $jument->modele_allures_additifs) /2 + rand (-$n,$m);

          $animal->modele_allures = $animal->modele_allures_additifs + rand (-1,1);

          $animal->save();

          Genome::mixGenes($etalon->id, $jument->id, $animal->id);
          $genotypes = Genotype::where('animal_id',$animal->id)->get();
          $base_couleurs = [];
          $dilue_couleurs =[];
          $motif_couleurs =[];
          $modif_couleurs = [];
          $blanc =0;
          $embryoletal = false;
          
          foreach ($genotypes as $genotype)
            {
              $p = $genotype->allele_p_id;
              $m = $genotype->allele_m_id;

              $phenotype = Phenotype::where(function($query1) use ($p,$m) {return $query1->where('allele1_id', $p)->where('allele2_id', $m);})->orWhere(function($query2) use ($p,$m) {return $query2->where('allele1_id', $m)->where('allele2_id', $p);})->first();
              if (isset($phenotype)) {
                
                // $animal->Phenotype()->attach($phenotype->id);//pas forcément?

                if (isset($phenotype->pathologie_id))
                {
                  if ($phenotype->pathologie_id == 5)
                  {
                    $statut->vide = true; 
                    $statut->save();
                    $embryoletal = true;
                  }
                  else
                  {$animal->Pathologie()->attach($phenotype->pathologie_id);}
                }

                if (! $embryoletal)
                {
                  if (isset($phenotype->effet_m_a))
                  {
                    $animal->modele_allures = $animal->modele_allures + $phenotype->effet_m_a; 
                    $animal->save();
                  }

                  if (isset($phenotype->effet_taille))
                    {
                      $animal->taille_cm = $animal->taille_cm + $phenotype->effet_taille; 
                      $animal->save();
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
                  } // end pas létal
                  else{
                    $animal->delete();
                  }
                }//endisset phenotype

              
            } //foreach genotype

            if (! $embryoletal)
            {
              $alezan = Couleur::where('nom','alezan')->first();
              $noirbai = Couleur::where('nom','noirbai')->first();
              $bai = Couleur::where('nom','bai')->first();
              $noir = Couleur::where('nom','noir')->first();
              $alezanbai = Couleur::where('nom','alezanbai')->first();
              $alezannoir = Couleur::Where('nom','alezannoir')->first();
            
              switch (true)
              {
                case in_array($alezan, $base_couleurs) && in_array($alezanbai, $base_couleurs):

                  $animal->base = 'alezan agouti';
                  $animal->save();
                  
                    $animal->Couleur()->attach($alezan->id);
                    foreach ($alezan->Images as $image)
                  { $animal->Image()->attach($image->id);}
                    
                break;

                case in_array($alezan, $base_couleurs) && !(in_array($alezanbai, $base_couleurs)):

                  $animal->base = 'alezan aa';
                  $animal->save();
                  
                    $animal->Couleur()->attach($alezan->id);
                    foreach ($alezan->Images as $image)
                  { $animal->Image()->attach($image->id);}
                    
                break;

                case in_array($alezanbai, $base_couleurs) && in_array($noirbai, $base_couleurs):

                  $animal->base = 'bai';
                  $animal->save();
                  
                  $animal->Couleur()->attach($bai->id);
                  
                  foreach ($bai->Images as $image)
                  { $animal->Image()->attach($image->id);}
                    
                break;

                case in_array($alezannoir, $base_couleurs) && in_array($noirbai, $base_couleurs):

                  $animal->base = 'noir';
                  $animal->save();
                  
                  $animal->Couleur()->attach($noir->id);
                  
                  foreach ($noir->Images as $image)
                  { $animal->Image()->attach($image->id);}
                    
                break;

                default:

                  $animal->base = 'bai';
                  $animal->save();
                    
                  $animal->Couleur()->attach($bai->id);
                  foreach ($bai->Images as $image)
                  { $animal->Image()->attach($image->id);}
                    
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

                    $images = Couleur::Find($couleur)->Images;
                    foreach ($images as $image)
                    { 
                      if ($image <> null)
                      {$animal->Image()->attach($image->id);}
                    }

                  
                  }

                
                
              }
              //gérer les dilutions multiples au moyen de couches d'images?
              $LP = false;
              $LPLP = false;
              foreach ($motif_couleurs as $coul)
              {
                switch (true)
                {
                  case $blanc < 0:
                  break;

                  case $blanc > 9 || $coul->nom =='Blanc':
                    $couleur = Couleur::where('nom','Blanc')->first();
                    $images = $couleur->Images;
                    foreach ($images as $image)
                    {
                      $animal->Image()->attach($image->id);
                    }
                  break;

                  case $coul->nom == 'marmoré' || $coul->nom == 'doubleLP':
                    $LP = true;
                    foreach ($coul->Images as $image)
                    {
                      $animal->Image()->attach($image->id);
                    }
                  break;

                  case $coul->nom ==  'doubleLP':
                    $LPLP = true;
                    foreach ($coul->Images as $image)
                    {
                      $animal->Image()->attach($image->id);
                    }

                  break;

                  case $coul->nom == 'couverture':
                    if ($LP)
                    {
                      $images = Couleur::where('nom', 'couverture tachetée')->first()->Images;
                          foreach ($images as $image)
                        {
                          $animal->Image()->attach($image->id);
                        }

                    }
                    else if ($LPLP)
                    {
                      $images = Couleur::where('nom', 'couverture blanche')->first()->Images;
                        foreach ($images as $image)
                      {
                        $animal->Image()->attach($image->id);
                      }
                    }
                  break;


                  default:
                  $couleur = Couleur::where('nom',$coul->nom.$blanc)->first();
                  $images = $couleur->Images;
                
                      foreach ($images as $image)
                        { 
                          if ($image <> null)
                        
                        { $animal->Image()->attach($image->id);}
                        }
                      
                
                } //end switch
                  
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
                  
                  break;

                  default:
                    $image = Image::where('chemin',$coul->nom)->first();
                    $animal->Image()->attach($image->id);
                  break;

                }

              } //end foreach
            }//end embryo létal
    
      } //end if succès
      else{
           $statut->vide = true;
           $statut->save();
          
      }
   
   if ($jument->Elevage->role != 'Vendeur')
  {  return redirect()->route('dashboard',[$elevage->id]);}
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

