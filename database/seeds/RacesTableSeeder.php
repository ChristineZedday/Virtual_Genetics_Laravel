<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('races')->delete();
        
        \DB::table('races')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'OC',
                'prix_moyen' => 300,
                'taille_min' => NULL,
                'taille_max' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Shetland',
                'prix_moyen' => 600,
                'taille_min' => 65,
                'taille_max' => 107,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Miniature',
                'prix_moyen' => 900,
                'taille_min' => 50,
                'taille_max' => 85,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Mountain',
                'prix_moyen' => 1000,
                'taille_min' => NULL,
                'taille_max' => 121,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Pony',
                'prix_moyen' => 1300,
                'taille_min' => 121,
                'taille_max' => 137,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Pony type Cob',
                'prix_moyen' => 1400,
                'taille_min' => 121,
                'taille_max' => 137,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Cob',
                'prix_moyen' => 2000,
                'taille_min' => 137,
                'taille_max' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Arabe',
                'prix_moyen' => 5000,
                'taille_min' => NULL,
                'taille_max' => NULL,
            ),
        ));
        
        
    }
}