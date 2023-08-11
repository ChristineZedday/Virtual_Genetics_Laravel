<?php

namespace Database\Seeders;

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
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'evenement_id' => 5,
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'evenement_id' => 6,
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'evenement_id' => 6,
            ),
            10 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'evenement_id' => 7,
            ),
            11 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'evenement_id' => 10,
            ),
            12 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'evenement_id' => 11,
            ),
            13 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'evenement_id' => 13,
            ),
            14 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'evenement_id' => 14,
            ),
            15 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'evenement_id' => 14,
            ),
            16 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'evenement_id' => 15,
            ),
            17 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'evenement_id' => 16,
            ),
            18 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'evenement_id' => 18,
            ),
            19 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'evenement_id' => 18,
            ),
            20 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'evenement_id' => 18,
            ),
            21 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'evenement_id' => 18,
            ),
            22 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'evenement_id' => 18,
            ),
            23 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'evenement_id' => 29,
            ),
            24 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'evenement_id' => 30,
            ),
            25 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'evenement_id' => 30,
            ),
            26 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'evenement_id' => 31,
            ),
            27 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'evenement_id' => 32,
            ),
            28 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'evenement_id' => 33,
            ),
            29 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'evenement_id' => 33,
            ),
            30 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'evenement_id' => 8,
            ),
            31 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'evenement_id' => 34,
            ),
            32 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'evenement_id' => 22,
            ),
            33 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'evenement_id' => 20,
            ),
            34 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'evenement_id' => 20,
            ),
            35 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'evenement_id' => 20,
            ),
            36 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'evenement_id' => 20,
            ),
            37 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'evenement_id' => 20,
            ),
            38 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'evenement_id' => 21,
            ),
            39 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'evenement_id' => 23,
            ),
            40 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'evenement_id' => 23,
            ),
            41 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'evenement_id' => 23,
            ),
            42 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'evenement_id' => 23,
            ),
            43 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'evenement_id' => 23,
            ),
            44 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'evenement_id' => 24,
            ),
            45 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'evenement_id' => 24,
            ),
            46 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'evenement_id' => 25,
            ),
            47 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'evenement_id' => 19,
            ),
            48 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'evenement_id' => 26,
            ),
            49 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'evenement_id' => 26,
            ),
            50 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'evenement_id' => 26,
            ),
            51 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'evenement_id' => 28,
            ),
            52 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'evenement_id' => 27,
            ),
            53 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 16,
            ),
            54 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'evenement_id' => 16,
            ),
            55 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 37,
            ),
            56 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 39,
            ),
            57 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 36,
            ),
            58 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'evenement_id' => 38,
            ),
            59 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 42,
            ),
            60 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 36,
            ),
            61 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'evenement_id' => 36,
            ),
            62 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'evenement_id' => 35,
            ),
            63 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'evenement_id' => 35,
            ),
            64 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 8,
            ),
            65 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'evenement_id' => 8,
            ),
            66 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 40,
            ),
            67 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 40,
            ),
            68 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 40,
            ),
            69 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'evenement_id' => 40,
            ),
            70 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 43,
            ),
            71 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 44,
            ),
            72 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 45,
            ),
            73 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 46,
            ),
            74 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'evenement_id' => 46,
            ),
            75 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 51,
            ),
            76 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 51,
            ),
            77 => 
            array (
                'id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 42,
            ),
            78 => 
            array (
                'id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 42,
            ),
            79 => 
            array (
                'id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'evenement_id' => 42,
            ),
            80 => 
            array (
                'id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'evenement_id' => 42,
            ),
            81 => 
            array (
                'id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 50,
            ),
            82 => 
            array (
                'id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 50,
            ),
            83 => 
            array (
                'id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'evenement_id' => 50,
            ),
            84 => 
            array (
                'id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'evenement_id' => 50,
            ),
            85 => 
            array (
                'id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 37,
            ),
            86 => 
            array (
                'id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 38,
            ),
            87 => 
            array (
                'id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'evenement_id' => 38,
            ),
            88 => 
            array (
                'id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'evenement_id' => 40,
            ),
            89 => 
            array (
                'id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 40,
            ),
            90 => 
            array (
                'id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'evenement_id' => 53,
            ),
        ));
        
        
    }
}