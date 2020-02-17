<?php

use Illuminate\Database\Seeder;

class GenotypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genotypes')->delete();
        
        \DB::table('genotypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
        ));
        
        
    }
}