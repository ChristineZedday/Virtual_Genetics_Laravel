<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Categories')->delete();
        
        \DB::table('Categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'mâles 2 ans',
                'concours_id' => 1,
                'type' => 'en main',
                'sexe' => 'mâle',
                'age_min' => 17,
                'age_max' => 35,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => 1,
                'autorisé' => NULL,
                'approuvé' => NULL,
                'race_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'mâle 3 ans',
                'concours_id' => 1,
                'type' => 'en main',
                'sexe' => 'mâle',
                'age_min' => 29,
                'age_max' => 47,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => 1,
                'autorisé' => NULL,
                'approuvé' => NULL,
                'race_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'étalons',
                'concours_id' => 1,
                'type' => 'en main',
                'sexe' => 'mâle',
                'age_min' => 41,
                'age_max' => 216,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => 1,
                'autorisé' =>1,
                'approuvé' => NULL,
                'race_id' => 2,
            ),
        ));
        
        
    }
}