<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genome extends Model
{
    static function mixGenes($male,$female,$produit)
    {
        $genome = array();
        $genomeM = Genotype::where('animal_id', $female)->get();
        $genomeP = Genotype::where('animal_id', $male)->get();
       

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
                      
                        if (isset($genotypeM))
                             {
                                 $genotype->allele_m_id = rand(1,2)==1 ? $genotypeM->allele_p_id : $genotypeM->allele_m_id;
                             }
                        else {
                             $genotype->allele_m_id =  Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;
                             }
                        $genotype->save();
                         

                    }
            }

            $linkedLoci = Locus::where('linked', true)->where('prev_linked_id', null)->get();

            $patP = false; //booléens pour savoir quels allèles ont a pris: paternel, defaut, maternel sinon, côté père, côté mère
            $defP = false;
            $patM = false;
            $defM = false;
            $taux = 0;
        
            foreach ($linkedLoci as $loc)
                {
                    $genotype = new Genotype; 
                    $genotype->animal_id = $produit;
                    $genotype->locus_id = $loc->id;
                    $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $loc->id)->first();
                        
                    if (isset($genotypeP))
                        {
                            $genotype->allele_p_id = rand(1,2)==1 ? $genotypeP->allele_p_id : $genotypeP->allele_m_id;
                            if ( $genotype->allele_p_id == $genotypeP->allele_p_id ) {
                                $patP = true; //sinon faux puisqu'ainsi initialisé
                            }

                        }
                        else {
                            $genotype->allele_p_id = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;
                            $defP = true;
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
                           $genotype->allele_m_id = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;
                           $defM = true;
                       }

                    
                    $genotype->save();  //so far so good 
                   
                    while (isset($loc->next_linked_id)) {

                        $taux = $taux  + $loc->taux_recomb_next;
                        $locus = $loc->next_linked_id; //on passe au suivant de la chaine
                        $genotype = new Genotype; 
                        $genotype->animal_id = $produit;
                        $genotype->locus_id = $locus;
                        $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $locus)->first();
                        if (isset($genotypeP)) {
                            if ($defP) { //si on avait l'allèle par défaut, homozygotie côté paternel donc pas de recomb significative
                                $genotype->allele_p_id = rand(1,2)==1 ? $genotypeP->allele_p_id : $genotypeP->allele_m_id;
                                if ($genotype->allele_p_id == $genotypeP->allele_p_id ) {
                                    $patP = true;
                                }
                                else {
                                    $patP = false;
                                }
                                
                            }
                            else if ($patP) {
                                $recomb = (rand(1, 100) <= $taux); //on a bien absence de recomb avec un taux de 0%
                                if ($recomb) {
                                    $genotype->allele_p_id = $genotypeP->allele_m_id;
                                    $patP = false;
                                }
                                else {
                                    $genotype->allele_p_id = $genotypeP->allele_p_id;
                                    $patP = true;
                                }
                            }
                        }
                        else {
                            $genotype->allele_p_id = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first()->id;
                        }

//memes tra pour Madame
                    } //fin du while

                    

                } // fin du foreach premier locus lié



    } //fin de mixgenes
}
