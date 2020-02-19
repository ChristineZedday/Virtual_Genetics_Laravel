<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genome extends Model
{
    static function mixGenes($male,$female,$produit)
    {
        $genome = array();
       
        $genomeP = Genotype::where('animal_id', $male)->get();
            foreach ($genomeP as $genotypeP)
            {
                $genotype = new Genotype; 
                $genotype->animal_id = $produit;
                $genotype->locus_id = $genotypeP->locus_id;
                
                $locus = $genotype->Locus();
               
                $genotype->allele_p_id = rand(1,2)==1 ? $genotypeP->allele_p_id : $genotypeP->allele_m_id;
                $genotypeM = Genotype::where('animal_id', $female)->where('locus_id', $genotype->locus_id)->first();
                    if (isset($genotypeM))
                    {
                        $genotype->allele_m_id = rand(1,2)==1 ? $genotypeM->allele_p_id : $genotypeM->allele_m_id;
                    }
                    else{
                        $genotype->allele_m_id =  Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first();
                    }
                $genotype->save();
               
            }
        $genomeM = Genotype::where('animal_id', $female)->get(); //la femelle peut avoir des loci non renseignés chez le mâle
            foreach ($genomeM as $genotypeM)
            {
                $genotypeP = Genotype::where('animal_id', $male)->where('locus_id', $genotypeM->locus_id)->first();
                    if (!isset($genotypeP))
                    {
                        $genotype = new Genotype();
                        $genotype->animal_id = $produit;
                        $genotype->locus_id = $genotypeM->locus_id;
                        $genotype->allele_p_id = Allele::where('locus_id', $genotype->locus_id)->where('is_default',true)->first();
                        $genotype->allele_m_id = rand(1,2)==1 ?  $genotypeM->allele_p_id : $genotypeM->allele_m_id;
                        $genotype->save();
                    }
            }
        
       
       
      
    }
}
