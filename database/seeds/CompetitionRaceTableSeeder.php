<?php

use Illuminate\Database\Seeder;

class CompetitionRaceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competition_race')->delete();
        
        \DB::table('competition_race')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'race_id' => 7,
                'prix_inscription' => 15,
                'prix_premier' => 100,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'race_id' => 6,
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'race_id' => 5,
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'race_id' => 4,
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'race_id' => 10,
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'race_id' => 2,
                'prix_inscription' => 5,
                'prix_premier' => 30,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'race_id' => 12,
                'prix_inscription' => 10,
                'prix_premier' => 60,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'race_id' => 3,
                'prix_inscription' => 10,
                'prix_premier' => 40,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'race_id' => 8,
                'prix_inscription' => 25,
                'prix_premier' => 200,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'race_id' => 9,
                'prix_inscription' => 15,
                'prix_premier' => 100,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'race_id' => 11,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
        ));
        
        
    }
}