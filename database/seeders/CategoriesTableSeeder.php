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
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 108,
                'taille_max' => 149,
                'saillie' => 0,
                'suitee' => 0,
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
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 149,
                'taille_max' => 165,
                'saillie' => 0,
                'suitee' => 0,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Cheval',
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 149,
                'taille_max' => 215,
                'saillie' => 0,
                'suitee' => 0,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney A',
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 80,
                'taille_max' => 107,
                'saillie' => 0,
                'suitee' => 0,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'cheval ou poney',
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => 108,
                'taille_max' => 215,
                'saillie' => 0,
                'suitee' => 0,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'mini',
                'sexe' => NULL,
                'age_min' => 4,
                'age_max' => NULL,
                'taille_min' => NULL,
                'taille_max' => 80,
                'saillie' => 0,
                'suitee' => 0,
                'entier' => NULL,
                'autorise' => NULL,
                'approuve' => NULL,
            ),
        ));
        
        
    }
}