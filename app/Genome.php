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

                        if ( !($genotype->allele_p_id == $alleleDefaut && $genotype->allele_m_id == $alleleDefaut)) {
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
                            if ( !($genotype->allele_p_id == $alleleDefaut && $genotype->allele_m_id == $alleleDefaut  )) {
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
                     
                    if ( !($genotype->allele_p_id == $alleleDefaut && $genotype->allele_m_id == $alleleDefaut  )) {
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
                            else {  //cas ou lon avait allèle mat précédent locus
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
                        if ( !($genotype->allele_p_id == $alleleDefaut && $genotype->allele_m_id == $alleleDefaut  )) {
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
}
