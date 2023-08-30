<?php

namespace Database\Seeders;

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
                'race_id' => 4,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'race_id' => 5,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'race_id' => 6,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'race_id' => 7,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'race_id' => 10,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'race_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'race_id' => 12,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'race_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'race_id' => 8,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'race_id' => 9,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'race_id' => 11,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'race_id' => 14,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'race_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 14,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 6,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 7,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 10,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 11,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 12,
            ),
            21 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'race_id' => 3,
            ),
            22 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'race_id' => 3,
            ),
            23 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'race_id' => 8,
            ),
            24 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'race_id' => 8,
            ),
            25 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'race_id' => 12,
            ),
            26 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'race_id' => 12,
            ),
            27 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'race_id' => 9,
            ),
            28 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'race_id' => 9,
            ),
            29 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'race_id' => 11,
            ),
            30 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'race_id' => 11,
            ),
            31 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'race_id' => 13,
            ),
            32 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'race_id' => 14,
            ),
            33 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'race_id' => 2,
            ),
            34 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'race_id' => 2,
            ),
            35 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'race_id' => 7,
            ),
            36 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'race_id' => 7,
            ),
            37 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'race_id' => 4,
            ),
            38 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'race_id' => 4,
            ),
            39 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'race_id' => 10,
            ),
            40 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'race_id' => 10,
            ),
            41 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'race_id' => 5,
            ),
            42 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'race_id' => 5,
            ),
            43 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'race_id' => 6,
            ),
            44 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'race_id' => 6,
            ),
            45 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'race_id' => 4,
            ),
            46 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'race_id' => 2,
            ),
            47 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'race_id' => 12,
            ),
            48 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'race_id' => 8,
            ),
            49 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'race_id' => 3,
            ),
            50 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'race_id' => 11,
            ),
            51 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'race_id' => 13,
            ),
            52 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'race_id' => 5,
            ),
            53 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'race_id' => 6,
            ),
            54 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'race_id' => 7,
            ),
            55 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'race_id' => 10,
            ),
            56 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'race_id' => 14,
            ),
            57 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'race_id' => 9,
            ),
            58 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 12,
            ),
            59 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 11,
            ),
            60 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 4,
            ),
            61 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 5,
            ),
            62 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 6,
            ),
            63 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 7,
            ),
            64 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 10,
            ),
            65 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 13,
            ),
            66 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'race_id' => 14,
            ),
            67 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 13,
            ),
            68 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'race_id' => 4,
            ),
            69 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'race_id' => 1,
            ),
            70 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'race_id' => 1,
            ),
            71 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'race_id' => 1,
            ),
            72 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'race_id' => 1,
            ),
            73 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'race_id' => 1,
            ),
            74 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'race_id' => 1,
            ),
            75 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'race_id' => 1,
            ),
            76 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'race_id' => 1,
            ),
            77 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 66,
                'race_id' => 14,
            ),
            78 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'race_id' => 13,
            ),
            79 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'race_id' => 14,
            ),
            80 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'race_id' => 1,
            ),
            81 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 67,
                'race_id' => 19,
            ),
            82 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 69,
                'race_id' => 19,
            ),
            83 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 70,
                'race_id' => 21,
            ),
        ));
        
        
    }
}