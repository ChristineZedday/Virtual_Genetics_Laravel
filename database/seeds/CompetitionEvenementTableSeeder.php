<?php

use Illuminate\Database\Seeder;

class CompetitionEvenementTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competition_evenement')->delete();
        
        \DB::table('competition_evenement')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'evenement_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'evenement_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'evenement_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'evenement_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'evenement_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'evenement_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'evenement_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'evenement_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'evenement_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'evenement_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'evenement_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'evenement_id' => 6,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'evenement_id' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'evenement_id' => 9,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'evenement_id' => 9,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'evenement_id' => 9,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'evenement_id' => 9,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'evenement_id' => 9,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'evenement_id' => 10,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'evenement_id' => 11,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'evenement_id' => 12,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'evenement_id' => 13,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'evenement_id' => 14,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'evenement_id' => 14,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'evenement_id' => 15,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'evenement_id' => 12,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'evenement_id' => 8,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'evenement_id' => 16,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 15,
                'evenement_id' => 17,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'evenement_id' => 18,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'evenement_id' => 18,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'evenement_id' => 18,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'evenement_id' => 18,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'evenement_id' => 18,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'evenement_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'evenement_id' => 4,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'evenement_id' => 4,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'evenement_id' => 3,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'evenement_id' => 7,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'evenement_id' => 6,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'evenement_id' => 6,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'evenement_id' => 16,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'evenement_id' => 15,
            ),
        ));
        
        
    }
}