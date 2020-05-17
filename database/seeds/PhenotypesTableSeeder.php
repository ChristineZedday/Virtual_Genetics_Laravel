<?php

use Illuminate\Database\Seeder;

class PhenotypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('phenotypes')->delete();
        
        \DB::table('phenotypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 36,
                'allele2_id' => 36,
                'effet_taille' => -12,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 34,
                'allele2_id' => 34,
                'effet_taille' => -16,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 36,
                'allele2_id' => 37,
                'effet_taille' => -2,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 34,
                'allele2_id' => 35,
                'effet_taille' => -4,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 39,
                'allele2_id' => 39,
                'effet_taille' => -20,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 39,
                'allele2_id' => 38,
                'effet_taille' => -10,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 1,
                'allele2_id' => 1,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 5,
                'pathologie_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 1,
                'allele2_id' => 2,
                'effet_taille' => NULL,
                'effet_blanc' => 0,
                'couleur_id' => 5,
                'pathologie_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 2,
                'allele2_id' => 2,
                'effet_taille' => NULL,
                'effet_blanc' => -2,
                'couleur_id' => 6,
                'pathologie_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 4,
                'allele2_id' => 4,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 3,
                'pathologie_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 4,
                'allele2_id' => 5,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 3,
                'pathologie_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 3,
                'allele2_id' => 3,
                'effet_taille' => NULL,
                'effet_blanc' => -2,
                'couleur_id' => 4,
                'pathologie_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 3,
                'allele2_id' => 4,
                'effet_taille' => NULL,
                'effet_blanc' => 0,
                'couleur_id' => 4,
                'pathologie_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 3,
                'allele2_id' => 5,
                'effet_taille' => NULL,
                'effet_blanc' => 0,
                'couleur_id' => 4,
                'pathologie_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 22,
                'allele2_id' => 23,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 7,
                'pathologie_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 22,
                'allele2_id' => 22,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 8,
                'pathologie_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 24,
                'allele2_id' => 24,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 8,
                'allele2_id' => 7,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 17,
                'pathologie_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 8,
                'allele2_id' => 8,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 17,
                'pathologie_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 6,
                'allele2_id' => 6,
                'effet_taille' => NULL,
                'effet_blanc' => 6,
                'couleur_id' => 18,
                'pathologie_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 6,
                'allele2_id' => 7,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 18,
                'pathologie_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 18,
                'allele2_id' => 7,
                'effet_taille' => NULL,
                'effet_blanc' => 8,
                'couleur_id' => 21,
                'pathologie_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 19,
                'allele2_id' => 7,
                'effet_taille' => NULL,
                'effet_blanc' => 1,
                'couleur_id' => 19,
                'pathologie_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 19,
                'allele2_id' => 19,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => 19,
                'pathologie_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 18,
                'allele2_id' => 19,
                'effet_taille' => NULL,
                'effet_blanc' => 9,
                'couleur_id' => 20,
                'pathologie_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 18,
                'allele2_id' => 6,
                'effet_taille' => NULL,
                'effet_blanc' => 10,
                'couleur_id' => 20,
                'pathologie_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 18,
                'allele2_id' => 8,
                'effet_taille' => NULL,
                'effet_blanc' => 9,
                'couleur_id' => 20,
                'pathologie_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 19,
                'allele2_id' => 6,
                'effet_taille' => NULL,
                'effet_blanc' => 4,
                'couleur_id' => 23,
                'pathologie_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 19,
                'allele2_id' => 8,
                'effet_taille' => NULL,
                'effet_blanc' => 4,
                'couleur_id' => 22,
                'pathologie_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 11,
                'allele2_id' => 11,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 38,
                'pathologie_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 11,
                'allele2_id' => 12,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 38,
                'pathologie_id' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 27,
                'allele2_id' => 27,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 29,
                'pathologie_id' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 27,
                'allele2_id' => 29,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 29,
                'pathologie_id' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 27,
                'allele2_id' => 28,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 29,
                'pathologie_id' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 32,
                'allele2_id' => 32,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 36,
                'pathologie_id' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 9,
                'allele2_id' => 9,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 33,
                'pathologie_id' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 9,
                'allele2_id' => 10,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 33,
                'pathologie_id' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 30,
                'allele2_id' => 31,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 42,
                'pathologie_id' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 30,
                'allele2_id' => 30,
                'effet_taille' => NULL,
                'effet_blanc' => NULL,
                'couleur_id' => 42,
                'pathologie_id' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 40,
                'allele2_id' => 40,
                'effet_taille' => NULL,
                'effet_blanc' => 4,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 40,
                'allele2_id' => 41,
                'effet_taille' => NULL,
                'effet_blanc' => 3,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 40,
                'allele2_id' => 42,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 41,
                'allele2_id' => 41,
                'effet_taille' => NULL,
                'effet_blanc' => 2,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 41,
                'allele2_id' => 42,
                'effet_taille' => NULL,
                'effet_blanc' => 0,
                'couleur_id' => NULL,
                'pathologie_id' => NULL,
            ),
        ));
        
        
    }
}