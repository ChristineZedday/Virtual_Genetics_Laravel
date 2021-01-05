<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Debug;

class Genome extends Model
{
    static function mixGenes($male,$female,$produit)
    {
        $genome = array();
        $genomeM = Genotype::where('animal_id', $female)->get();
        $genomeP = Genotype::where('animal_id', $male)->get();
       
        $debug = $male.' x '.$female. ' ';

            foreach ($genomeP as $genotypeP)
            {
                
                $locus = $genotypeP->Locus;
                if (! $locus->linked) //first we treat non_linked loci
                    {
                        $genotype = new Genotype; 
                        $genotype->animal_id = $produit;
                        $genotype->locus_id = $genotypeP->locus_id;
                        $genotype->allele_p_id = rand(1,2)==1 ? $genotypeP->allele_p_id : $genotypeP->allele_m_id;
                      
                        $genotypeM = Genotype::where('animal_id', $female)->where('locus_id', $genotype->locus_id)->first();
                        $alleleDefaut =  Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;
                           
                      
                        if (isset($genotypeM))
                             {
                                 $genotype->allele_m_id = rand(1,2)==1 ? $genotypeM->allele_p_id : $genotypeM->allele_m_id;
                             }
                        else {
                          
                             $genotype->allele_m_id =  $alleleDefaut;
                             }

                        if ( $genotype->allele_p_id != $alleleDefaut || $genotype->allele_m_id != $alleleDefaut ||$locus->obligatoire){
                             $genotype->save();   
                         }
                         

                    }
            }
            foreach ($genomeM as $genotypeM) {   //pour les génotypes de la mère que le père n'a pas
                $locus = $genotypeM->Locus;
                if (! $locus->linked) //first we treat non_linked loci
                    {
                        $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $locus->id)->first(); 
                        if (! isset($genotypeP)) // s'il y est on l'a déjà traité, sinon ajouter
                        {
                            $genotype = new Genotype; 
                            $genotype->animal_id = $produit;
                            $genotype->locus_id = $locus->id;
                            $genotype->allele_m_id = rand(1,2)==1 ? $genotypeM->allele_p_id : $genotypeM->allele_m_id;

                            $alleleDefaut =  Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;
                            $genotype->allele_p_id = $alleleDefaut;
                            if ( $genotype->allele_p_id != $alleleDefaut || $genotype->allele_m_id != $alleleDefaut ||$locus->obligatoire){
                                $genotype->save();   
                            }
                        }
                    }
            }

            $linkedLoci = Locus::where('linked', true)->where('prev_linked_id', null)->get();

           
        
            foreach ($linkedLoci as $loc)
           
                {
                    $patP = false; //booléens pour savoir quels allèles ont a pris: paternel, defaut, maternel sinon, côté père, côté mère
                  
                    $patM = false;
                  
                    $tauxP = 0;
                    $tauxM = 0;

                    $genotype = new Genotype; 
                    $genotype->animal_id = $produit;
                    $genotype->locus_id = $loc->id;
                    $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $loc->id)->first();

                   

                    $alleleDefaut = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;

                 
                    if (isset($genotypeP))
                        {
                            $genotype->allele_p_id = rand(1,2)==1 ? $genotypeP->allele_p_id : $genotypeP->allele_m_id;
                            if ( $genotype->allele_p_id == $genotypeP->allele_p_id ) {
                                $patP = true; //sinon faux puisqu'ainsi initialisé
                            }
                            
                           
                        }
                    else 
                        {
                            $genotype->allele_p_id = $alleleDefaut;
                           $patP = true; //faut ben en choisir un
                        }
                    
               
                        

                    $genotypeM = Genotype::where('animal_id', $female)->where('locus_id', $loc->id)->first();
                  
                   if (isset($genotypeM))
                       {
                           $genotype->allele_m_id = rand(1,2)==1 ? $genotypeM->allele_p_id : $genotypeM->allele_m_id;
                           if ( $genotype->allele_m_id == $genotypeM->allele_p_id ) {
                               $patM = true;
                           }
                         
                          
                       }
                    else {
                           $genotype->allele_m_id = $alleleDefaut;
                           $debug = $debug.' def';
                           $patM = true;
                    }

                  
                    $deb = new Debug;
                    $deb->locus1 = $debug;
                    $deb->save();
                    $debug ='';
                     
                    if ( !($genotype->allele_p_id == $alleleDefaut && $genotype->allele_m_id == $alleleDefaut  ) or ($genotype->Locus->obligatoire)) {
                        $genotype->save();   
                            }
                   
                    while (isset($loc->next_linked_id))  {
                       

                        $tauxP = $tauxP  + $loc->taux_recomb_next;
                        if ($tauxP > 50) {$tauxP = 50;}
                        $tauxM = $tauxM + $loc->taux_recomb_next;
                        if ($tauxM > 50) {$tauxM = 50;}
                        $debug = $debug.' tauxP: '.$tauxP. ' tauxM: '.$tauxM;
                        $locus = Locus::Find($loc->next_linked_id); //on passe au suivant de la chaine
                        $genotype = new Genotype; 
                        $genotype->animal_id = $produit;
                        $genotype->locus_id = $locus->id;

                       

                        $alleleDefaut = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;

                        $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $locus->id)->first();
                        if (isset($genotypeP)) {
                            $debug = $debug.' '.$locus->abbrev.' paternel: ';
                            $debug = $debug.$genotypeP->allele_p_id.' '.$genotypeP->allele_m_id;
                            if ($patP)
                             {
                                $recomb = (rand(1, 100) <= $tauxP); //on a bien absence de recomb avec un taux de 0%
                                if ($recomb) {
                                    $genotype->allele_p_id = $genotypeP->allele_m_id;
                                    $patP = false;
                                    $debug = $debug.' recomb';
                                }
                                else {
                                    $genotype->allele_p_id = $genotypeP->allele_p_id;
                                    $patP = true;
                                    $debug = $debug.' pas recomb';
                                }
                            }
                            else {  //cas ou l'on avait allèle mat précédent locus
                                $recomb = (rand(1, 100) <= $tauxM); //on a bien absence de recomb avec un taux de 0%
                                if ($recomb) {
                                    $genotype->allele_p_id = $genotypeP->allele_p_id;
                                    $patP = true;
                                    $debug = $debug.' recomb';
                                }
                                else {
                                    $genotype->allele_p_id = $genotypeP->allele_m_id;
                                    $patP = false;
                                    $debug = $debug.' pas recomb';
                                }
                            }
                            $tauxP = 0; //recombinaison à partir de celui-ci et pas le premier
                        
                            
                        }
                        else { //pas de génotypeP
                            $genotype->allele_p_id = $alleleDefaut;
                            $debug = $debug.' def ';
                           
                        }

                        $debug = $debug.$genotype->allele_p_id;

                        

                        //memes tra pour Madame
                        $genotypeM = Genotype::where('animal_id', $female)->where('locus_id', $locus->id)->first();
                       
                        if (isset($genotypeM)) 
                        {
                           if ($patM) {
                                $recomb = (rand(1, 100) <= $tauxM); //on a bien absence de recomb avec un taux de 0%
                                if ($recomb) {
                                    $genotype->allele_m_id = $genotypeM->allele_m_id;
                                    $patM = false;
                                    $debug= $debug.' recomb ';
                                }
                                else {
                                    $genotype->allele_m_id = $genotypeM->allele_p_id;
                                    $patM = true;
                                }
                            }
                            else {  //cas ou l'on avait allèle mat précédent locus
                                $recomb = (rand(1, 100) <= $tauxM); //on a bien absence de recomb avec un taux de 0%
                                if ($recomb) {
                                    $genotype->allele_m_id = $genotypeM->allele_p_id;
                                    $patM = true;
                                    $debug= $debug.' recomb ';
                                }
                                else {
                                    $genotype->allele_m_id = $genotypeM->allele_m_id;
                                    $patM = false;
                                }
                            }
                            $tauxM = 0; //recombinaison à partir de celui-ci et pas le premier
                            
                        }
                        else { //pas de génotypeM
                            $genotype->allele_m_id = $alleleDefaut;
                            $debug = $debug.' def ';  
                        }

                        $debug = $debug.$genotype->allele_m_id;
                        if ( !($genotype->allele_p_id == $alleleDefaut && $genotype->allele_m_id == $alleleDefaut or ($genotype->Locus->obligatoire) )) {
                            $genotype->save();   
                        }
                        else {
                            $gene = Locus::Find($genotype->locus_id);
                            if ($gene->obligatoire)
                            {
                                $genotype->save();  
                            }
                        }
                        $loc = $locus; //sinon boucle infinie sur le premier

                        $deb->locsuivs = $debug;
                        $deb->save();
                         
                    }//fin du while
                    

                   
                } // fin du foreach premier locus lié



    } //fin de mixgenes

    static function readGenes($animal)
    {
        $animal = Animal::find($animal);
        $genotypes = Genotype::where('animal_id',$animal->id)->get();
              $base_couleurs = [];
              $dilue_couleurs =[];
              $motif_couleurs =[];
              $modif_couleurs = [];
              $blanc =0;
              $embryoletal = false;
              $plus =0;
              $ma =0;
              
              foreach ($genotypes as $genotype)
                {
                  $p = $genotype->allele_p_id;
                  $m = $genotype->allele_m_id;

                  $phenotype = Phenotype::where(function($query1) use ($p,$m) {return $query1->where('allele1_id', $p)->where('allele2_id', $m);})->orWhere(function($query2) use ($p,$m) {return $query2->where('allele1_id', $m)->where('allele2_id', $p);})->first();
                  if (isset($phenotype)) {
                    
                    // $animal->Phenotype()->attach($phenotype->id);//pas forcément?

                    if ($phenotype->pathologie_id != NULL)
                    {
                      if ($phenotype->pathologie_id == 5) //mort embryon
                      {
                        if (!$animal->fondateur)
                       { $statut = $animal->Dam()->statut();
                        $statut->vide = true; 
                        $statut->terme = Gamedata::date();
                        $statut->save();}
                       
                        $embryoletal = true;
                        $animal->elevage_id =2; //part chez l'Ankou
                        $animal->save();
                       
                      
                      }
                      else
                      {$animal->Pathologie()->attach($phenotype->pathologie_id);}
                    }

                    if (! $embryoletal)
                    {
                      if (isset($phenotype->effet_m_a))
                      {
                        $ma = $ma + $phenotype->effet_m_a;
                      }

                      if (isset($phenotype->effet_taille))
                        {
                         $plus = $plus + $phenotype->effet_taille;
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
                      
                  }//endisset phenotype

                  
                } //foreach genotype

                $animal->taille_cm = $animal->taille_additive + $plus;
                $animal->save();

                $animal->modele_allures = $animal->modele_allures_additifs + $ma;
                $animal->save();

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
                  $size = sizeof($dilue_couleurs);
                  $debug = new Debug();
                  $debug->locus1 = $animal->nom;
                  $debug->locsuivs = sizeof($dilue_couleurs);
                  $debug->save();

                
                  foreach ($dilue_couleurs as $coul)
                  {
                      $base = Couleur::where('nom', $animal->base)->first();
                      $couleur = AssoCouleur::where('couleur1_id', $base->id)->where('couleur2_id', $coul->id)->first();
                      if (isset($couleur))
                        {
                          $couleur = $couleur->couleur_res_id;
                          switch(true)
                          {
                            case $size == 1:
                              $animal->Couleur()->attach($couleur);

                              $images = Couleur::Find($couleur)->Images;
                              foreach ($images as $image)
                              { 
                                if ($image <> null)
                                {$animal->Image()->attach($image->id);}
                              }
                            break;

                            // case $size ==2:
                            //   $couleur = Couleur::where('nom',$couleur->nom.'2')->first()->id;
                            //   $animal->Couleur()->attach($couleur);

                            //   $images = Couleur::Find($couleur)->Images;
                            //   foreach ($images as $image)
                            //   { 
                            //     if ($image <> null)
                            //     {$animal->Image()->attach($image->id);}
                            //   }
                            // break;

                            default:
                            $coul = Couleur::Find($couleur);
                            $couleur = Couleur::where('nom', $coul->nom.'2')->first();
                            if (isset($couleur))
                            {
                                  $animal->Couleur()->attach($couleur->id);

                                  $images = $couleur->Images;
                                    foreach ($images as $image)
                                    { 
                                      if ($image <> null)
                                      {$animal->Image()->attach($image->id);}
                                    }
                              }
                              else{//si pa de double prendre la dilution normale
                                $couleur = Couleur::where('nom', $coul->nom)->first();
                                if (isset($couleur))
                                {
                                      $animal->Couleur()->attach($couleur->id);
        
                                      $images = $couleur->Images;
                                        foreach ($images as $image)
                                        { 
                                          if ($image <> null)
                                          {$animal->Image()->attach($image->id);}
                                        }
                                  }

                              }
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
                          $images = Couleur::where('nom', 'couverture tachetée'.$blanc)->first()->Images;
                              foreach ($images as $image)
                            {
                              $animal->Image()->attach($image->id);
                            }

                        }
                        else if ($LPLP)
                        {
                          $images = Couleur::where('nom', 'couverture blanche'.$blanc)->first()->Images;
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
                          $champagne = Couleur::where('nom','champagneor')->first();
                          $abricot =  Couleur::where('nom','abricot')->first();
                          if (in_array($mushroom, $dilue_couleurs) || in_array($champagne, $dilue_couleurs) || in_array($abricot, $dilue_couleurs))
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
                }//end pas embryo létal
        
    }
}
