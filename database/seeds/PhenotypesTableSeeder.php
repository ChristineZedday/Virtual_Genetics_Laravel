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
        ));
        
        
    }
}