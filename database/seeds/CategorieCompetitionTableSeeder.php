<?php

use Illuminate\Database\Seeder;

class CategorieCompetitionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorie_competition')->delete();
        
        \DB::table('categorie_competition')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 4,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 6,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 1,
            ),
        ));
        
        
    }
}