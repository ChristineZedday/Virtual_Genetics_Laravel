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
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'evenement_id' => 16,
            ),
            27 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'evenement_id' => 18,
            ),
            28 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'evenement_id' => 18,
            ),
            29 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'evenement_id' => 18,
            ),
            30 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'evenement_id' => 18,
            ),
            31 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'evenement_id' => 18,
            ),
            32 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'evenement_id' => 29,
            ),
            33 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'evenement_id' => 30,
            ),
            34 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'evenement_id' => 30,
            ),
            35 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'evenement_id' => 31,
            ),
            36 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'evenement_id' => 32,
            ),
            37 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'evenement_id' => 33,
            ),
            38 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'evenement_id' => 33,
            ),
            39 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'evenement_id' => 8,
            ),
            40 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'evenement_id' => 34,
            ),
            41 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'evenement_id' => 22,
            ),
            42 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'evenement_id' => 20,
            ),
            43 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'evenement_id' => 20,
            ),
            44 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'evenement_id' => 20,
            ),
            45 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'evenement_id' => 20,
            ),
            46 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'evenement_id' => 20,
            ),
            47 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'evenement_id' => 21,
            ),
            48 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'evenement_id' => 23,
            ),
            49 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'evenement_id' => 23,
            ),
            50 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'evenement_id' => 23,
            ),
            51 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'evenement_id' => 23,
            ),
            52 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'evenement_id' => 23,
            ),
            53 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'evenement_id' => 24,
            ),
            54 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'evenement_id' => 24,
            ),
            55 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'evenement_id' => 25,
            ),
            56 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'evenement_id' => 19,
            ),
            57 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'evenement_id' => 19,
            ),
            58 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'evenement_id' => 26,
            ),
            59 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'evenement_id' => 26,
            ),
            60 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'evenement_id' => 26,
            ),
            61 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'evenement_id' => 28,
            ),
            62 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'evenement_id' => 27,
            ),
        ));
        
        
    }
}