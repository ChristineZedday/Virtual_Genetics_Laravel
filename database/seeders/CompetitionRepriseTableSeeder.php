<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompetitionRepriseTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competition_reprise')->delete();
        
        \DB::table('competition_reprise')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 38,
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 5,
            ),
            3 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 6,
            ),
            4 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 13,
            ),
            5 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 10,
            ),
            6 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 12,
            ),
            7 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 15,
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 16,
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 17,
            ),
            10 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 18,
            ),
            11 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 21,
            ),
            12 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 22,
            ),
            13 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 11,
            ),
            14 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 33,
            ),
            15 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 32,
            ),
            16 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 37,
            ),
            17 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 36,
            ),
            18 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 34,
            ),
            19 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 35,
            ),
            20 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 32,
            ),
            21 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 40,
            ),
            22 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 41,
            ),
            23 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 42,
            ),
            24 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 43,
            ),
            25 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 44,
            ),
            26 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 45,
            ),
            27 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 47,
            ),
            28 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 48,
            ),
            29 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 49,
            ),
            30 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 60,
            ),
            31 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 10,
            ),
            32 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 12,
            ),
            33 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 17,
            ),
            34 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 18,
            ),
            35 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 16,
            ),
            36 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 15,
            ),
            37 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 34,
            ),
            38 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 35,
            ),
            39 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 40,
            ),
            40 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 41,
            ),
            41 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 42,
            ),
            42 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 43,
            ),
            43 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 46,
            ),
            44 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 50,
            ),
            45 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 51,
            ),
            46 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 52,
            ),
            47 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 53,
            ),
            48 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 54,
            ),
            49 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 55,
            ),
            50 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 56,
            ),
            51 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 57,
            ),
            52 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 58,
            ),
            53 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 59,
            ),
            54 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 20,
            ),
            55 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 19,
            ),
            56 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 18,
            ),
            57 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 17,
            ),
            58 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 22,
            ),
            59 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 21,
            ),
            60 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 24,
            ),
            61 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'reprise_id' => 30,
            ),
            62 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'reprise_id' => 31,
            ),
            63 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'reprise_id' => 16,
            ),
            64 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'reprise_id' => 15,
            ),
            65 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 28,
            ),
            66 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'reprise_id' => 27,
            ),
            67 => 
            array (
                'id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 61,
            ),
            68 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 61,
            ),
            69 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 61,
            ),
        ));
        
        
    }
}