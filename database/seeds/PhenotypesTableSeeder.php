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
                'pathologie_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'allele1_id' => 34,
                'allele2_id' => 34,
                'effet_taille' => -15,
                'couleur_base' => NULL,
                'couleur_modif' => NULL,
                'pathologie_id' => NULL,
            ),
        ));
        
        
    }
}