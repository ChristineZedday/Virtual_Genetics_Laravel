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
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
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
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
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
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
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
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
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
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
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
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
                'pathologie_id' => NULL,
            ),
        ));
        
        
    }
}