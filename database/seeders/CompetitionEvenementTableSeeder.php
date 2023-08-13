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
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'evenement_id' => 5,
            ),
            7 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'evenement_id' => 13,
            ),
            8 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'evenement_id' => 15,
            ),
            9 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'evenement_id' => 18,
            ),
            10 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'evenement_id' => 18,
            ),
            11 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'evenement_id' => 18,
            ),
            12 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'evenement_id' => 18,
            ),
            13 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'evenement_id' => 18,
            ),
            14 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'evenement_id' => 29,
            ),
            15 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'evenement_id' => 30,
            ),
            16 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'evenement_id' => 30,
            ),
            17 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'evenement_id' => 31,
            ),
            18 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'evenement_id' => 33,
            ),
            19 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'evenement_id' => 35,
            ),
            20 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'evenement_id' => 34,
            ),
            21 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'evenement_id' => 22,
            ),
            22 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'evenement_id' => 20,
            ),
            23 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'evenement_id' => 20,
            ),
            24 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'evenement_id' => 20,
            ),
            25 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'evenement_id' => 20,
            ),
            26 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'evenement_id' => 20,
            ),
            27 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'evenement_id' => 21,
            ),
            28 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'evenement_id' => 23,
            ),
            29 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'evenement_id' => 23,
            ),
            30 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'evenement_id' => 23,
            ),
            31 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'evenement_id' => 23,
            ),
            32 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'evenement_id' => 23,
            ),
            33 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'evenement_id' => 24,
            ),
            34 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'evenement_id' => 25,
            ),
            35 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'evenement_id' => 19,
            ),
            36 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'evenement_id' => 26,
            ),
            37 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'evenement_id' => 26,
            ),
            38 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'evenement_id' => 26,
            ),
            39 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'evenement_id' => 28,
            ),
            40 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'evenement_id' => 27,
            ),
            41 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 37,
            ),
            42 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 39,
            ),
            43 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 36,
            ),
            44 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'evenement_id' => 38,
            ),
            45 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 42,
            ),
            46 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 36,
            ),
            47 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'evenement_id' => 36,
            ),
            48 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 40,
            ),
            49 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 40,
            ),
            50 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 40,
            ),
            51 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'evenement_id' => 40,
            ),
            52 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'evenement_id' => 43,
            ),
            53 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 44,
            ),
            54 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 45,
            ),
            55 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 46,
            ),
            56 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'evenement_id' => 46,
            ),
            57 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 51,
            ),
            58 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 51,
            ),
            59 => 
            array (
                'id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 42,
            ),
            60 => 
            array (
                'id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 42,
            ),
            61 => 
            array (
                'id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'evenement_id' => 42,
            ),
            62 => 
            array (
                'id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'evenement_id' => 42,
            ),
            63 => 
            array (
                'id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 50,
            ),
            64 => 
            array (
                'id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 50,
            ),
            65 => 
            array (
                'id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'evenement_id' => 50,
            ),
            66 => 
            array (
                'id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 63,
                'evenement_id' => 50,
            ),
            67 => 
            array (
                'id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 37,
            ),
            68 => 
            array (
                'id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 38,
            ),
            69 => 
            array (
                'id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'evenement_id' => 38,
            ),
            70 => 
            array (
                'id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'evenement_id' => 40,
            ),
            71 => 
            array (
                'id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'evenement_id' => 40,
            ),
            72 => 
            array (
                'id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'evenement_id' => 53,
            ),
            73 => 
            array (
                'id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'evenement_id' => 35,
            ),
            74 => 
            array (
                'id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'evenement_id' => 33,
            ),
            75 => 
            array (
                'id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'evenement_id' => 2,
            ),
            76 => 
            array (
                'id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'evenement_id' => 15,
            ),
            77 => 
            array (
                'id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'evenement_id' => 52,
            ),
            78 => 
            array (
                'id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'evenement_id' => 52,
            ),
            79 => 
            array (
                'id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'evenement_id' => 49,
            ),
            80 => 
            array (
                'id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'evenement_id' => 49,
            ),
            81 => 
            array (
                'id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 64,
                'evenement_id' => 33,
            ),
            82 => 
            array (
                'id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'evenement_id' => 33,
            ),
            83 => 
            array (
                'id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'evenement_id' => 33,
            ),
            84 => 
            array (
                'id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 68,
                'evenement_id' => 33,
            ),
            85 => 
            array (
                'id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 65,
                'evenement_id' => 35,
            ),
            86 => 
            array (
                'id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 66,
                'evenement_id' => 35,
            ),
            87 => 
            array (
                'id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 67,
                'evenement_id' => 35,
            ),
        ));
        
        
    }
}