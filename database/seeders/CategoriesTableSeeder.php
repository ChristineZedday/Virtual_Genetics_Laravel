<?php

namespace Database\Seeders;

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
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'mâles 2 ans',
             
                'sexe' => 1,
                'age_min' => 2,
                'age_max' => 2,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'mâle 3 ans',
             
                'sexe' => 1,
                'age_min' => 3,
                'age_max' => 3,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'étalons',
             
                'sexe' => 1,
                'age_min' => 4,
                'age_max' => 18,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => 1,
                'autorise' => 1,
                'approuve' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'pouliches 2 ans',
             
                'sexe' => 0,
                'age_min' => 2,
                'age_max' => 2,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => 0,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'juments',
             
                'sexe' => 0,
                'age_min' => 4,
                'age_max' => 18,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => 1,
                'suitee' => NULL,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'juments suitées',
             
                'sexe' => 0,
                'age_min' => 4,
                'age_max' => 18,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => 1,
                'suitee' => 1,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'pouliches 3 ans suitées',
             
                'sexe' => 0,
                'age_min' => 3,
                'age_max' => 3,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => 1,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'pouliches 3 ans',
             
                'sexe' => 0,
                'age_min' => 3,
                'age_max' => 3,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => 0,
                'entier' => 1,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney ',
                'type' => 'Dressage',
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 108,
                'taille_max' => 149,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E',
                'type' => 'Dressage',
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 149,
                'taille_max' => NULL,
                'saillie' => NULL,
                'suitee' => NULL,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
        ));
        
        
    }
}