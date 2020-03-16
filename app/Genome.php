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
                         //so far so good : non testé cas ou pas de génotype maternel

                    }
            }


//             foreach ($genomeM as $genotypeM)  //la femelle peut avoir des loci non renseignés chez le mâle
//             {
//                 $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $genotypeM->locus_id)->first();
//                     if (!isset($genotypeP))
//                     {
//                         $genotype = new Genotype();
//                         $genotype->animal_id = $produit;
//                         $genotype->locus_id = $genotypeM->locus_id;
//                         $genotype->allele_p_id = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first();
//                         $genotype->allele_m_id = rand(1,2)==1 ?  $genotypeM->allele_p_id : $genotypeM->allele_m_id;
//                         $genotype->save();
//                     }
//             }
        
       
       
      
//     }

    } //fin de mixgenes
}
