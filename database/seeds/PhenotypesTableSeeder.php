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
                'couleur_id' => 4,
                'pathologie_id' => NULL,
            ),
        ));
        
        
    }
}