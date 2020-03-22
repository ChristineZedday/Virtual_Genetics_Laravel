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
                'allele_p_id' => 5,
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
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 7,
                'allele_m_id' => 8,
                'locus_id' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 25,
                'allele_m_id' => 26,
                'locus_id' => 16,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 20,
                'allele_m_id' => 21,
                'locus_id' => 17,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 17,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
        ));
        
        
    }
}