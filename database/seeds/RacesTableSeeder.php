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
                'frais_enregistrement' => NULL,
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
                'frais_enregistrement' => NULL,
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
                'frais_enregistrement' => 100,
                'taille_min' => 30,
                'taille_max' => 86,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Mountain',
                'prix_moyen' => 1000,
                'frais_enregistrement' => NULL,
                'taille_min' => 30,
                'taille_max' => 141,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Pony',
                'prix_moyen' => 1300,
                'frais_enregistrement' => NULL,
                'taille_min' => 100,
                'taille_max' => 137,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Pony type Cob',
                'prix_moyen' => 1400,
                'frais_enregistrement' => NULL,
                'taille_min' => 100,
                'taille_max' => 137,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Cob',
                'prix_moyen' => 2000,
                'frais_enregistrement' => NULL,
                'taille_min' => 137,
                'taille_max' => 177,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pur-sang Arabe',
                'prix_moyen' => 5000,
                'frais_enregistrement' => NULL,
                'taille_min' => NULL,
                'taille_max' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Demi-sang Arabe',
                'prix_moyen' => 2000,
                'frais_enregistrement' => 150,
                'taille_min' => 30,
                'taille_max' => 215,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Part Bred',
                'prix_moyen' => 1000,
                'frais_enregistrement' => 50,
                'taille_min' => 30,
                'taille_max' => 215,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Français de Selle',
                'prix_moyen' => 1300,
                'frais_enregistrement' => 100,
                'taille_min' => 120,
                'taille_max' => 149,
            ),
        ));
        
        
    }
}