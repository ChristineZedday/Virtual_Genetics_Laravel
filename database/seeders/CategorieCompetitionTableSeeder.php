<?php

namespace Database\Seeders;

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
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 10,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 10,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 4,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 5,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 6,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 7,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 10,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 4,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 5,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 6,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 7,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 10,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 4,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 5,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 6,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 7,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 10,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 4,
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 5,
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 6,
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 7,
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 10,
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 3,
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 4,
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 5,
            ),
            53 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 6,
            ),
            54 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 10,
            ),
            56 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 2,
            ),
            57 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 3,
            ),
            58 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 4,
            ),
            59 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 5,
            ),
            60 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 6,
            ),
            61 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 7,
            ),
            62 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 10,
            ),
            63 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 2,
            ),
            64 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 3,
            ),
            65 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 4,
            ),
            66 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 5,
            ),
            67 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 6,
            ),
            68 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 7,
            ),
            69 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 10,
            ),
            70 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 2,
            ),
            71 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 3,
            ),
            72 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 4,
            ),
            73 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 5,
            ),
            74 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 6,
            ),
            75 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 7,
            ),
            76 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 10,
            ),
            77 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 2,
            ),
            79 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 3,
            ),
            80 => 
            array (
                'id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 4,
            ),
            81 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 5,
            ),
            82 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 6,
            ),
            83 => 
            array (
                'id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 7,
            ),
            84 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 10,
            ),
            85 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 2,
            ),
            87 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 4,
            ),
            88 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 3,
            ),
            89 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 5,
            ),
            90 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 6,
            ),
            91 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 7,
            ),
            92 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 10,
            ),
            93 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 2,
            ),
            95 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 3,
            ),
            97 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 4,
            ),
            98 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 5,
            ),
            99 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 6,
            ),
            100 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 7,
            ),
            101 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 10,
            ),
            102 => 
            array (
                'id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 2,
            ),
            103 => 
            array (
                'id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 3,
            ),
            104 => 
            array (
                'id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 4,
            ),
            105 => 
            array (
                'id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 5,
            ),
            106 => 
            array (
                'id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 6,
            ),
            107 => 
            array (
                'id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 7,
            ),
            108 => 
            array (
                'id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 10,
            ),
            109 => 
            array (
                'id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 1,
            ),
            110 => 
            array (
                'id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 1,
            ),
            111 => 
            array (
                'id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 10,
            ),
            112 => 
            array (
                'id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 7,
            ),
            113 => 
            array (
                'id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 5,
            ),
            114 => 
            array (
                'id' => 120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 2,
            ),
            115 => 
            array (
                'id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 3,
            ),
            116 => 
            array (
                'id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 6,
            ),
            117 => 
            array (
                'id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 10,
            ),
            118 => 
            array (
                'id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 7,
            ),
            119 => 
            array (
                'id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 5,
            ),
            120 => 
            array (
                'id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 2,
            ),
            121 => 
            array (
                'id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 3,
            ),
            122 => 
            array (
                'id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 6,
            ),
            123 => 
            array (
                'id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 10,
            ),
            124 => 
            array (
                'id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 7,
            ),
            125 => 
            array (
                'id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 5,
            ),
            126 => 
            array (
                'id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 2,
            ),
            127 => 
            array (
                'id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 3,
            ),
            128 => 
            array (
                'id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 6,
            ),
            129 => 
            array (
                'id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 10,
            ),
            130 => 
            array (
                'id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 7,
            ),
            131 => 
            array (
                'id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 5,
            ),
            132 => 
            array (
                'id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 2,
            ),
            133 => 
            array (
                'id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 3,
            ),
            134 => 
            array (
                'id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 6,
            ),
            135 => 
            array (
                'id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 10,
            ),
            136 => 
            array (
                'id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 7,
            ),
            137 => 
            array (
                'id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 5,
            ),
            138 => 
            array (
                'id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 2,
            ),
            139 => 
            array (
                'id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 3,
            ),
            140 => 
            array (
                'id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 6,
            ),
            141 => 
            array (
                'id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 10,
            ),
            142 => 
            array (
                'id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 7,
            ),
            143 => 
            array (
                'id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 5,
            ),
            144 => 
            array (
                'id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 2,
            ),
            145 => 
            array (
                'id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 3,
            ),
            146 => 
            array (
                'id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 6,
            ),
            147 => 
            array (
                'id' => 153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 10,
            ),
            148 => 
            array (
                'id' => 154,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 7,
            ),
            149 => 
            array (
                'id' => 155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 5,
            ),
            150 => 
            array (
                'id' => 156,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 2,
            ),
            151 => 
            array (
                'id' => 157,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 3,
            ),
            152 => 
            array (
                'id' => 158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 6,
            ),
            153 => 
            array (
                'id' => 159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 10,
            ),
            154 => 
            array (
                'id' => 160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 7,
            ),
            155 => 
            array (
                'id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 5,
            ),
            156 => 
            array (
                'id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 2,
            ),
            157 => 
            array (
                'id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 3,
            ),
            158 => 
            array (
                'id' => 164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 6,
            ),
            159 => 
            array (
                'id' => 165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 10,
            ),
            160 => 
            array (
                'id' => 166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 7,
            ),
            161 => 
            array (
                'id' => 167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 5,
            ),
            162 => 
            array (
                'id' => 168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 2,
            ),
            163 => 
            array (
                'id' => 169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 3,
            ),
            164 => 
            array (
                'id' => 170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 6,
            ),
            165 => 
            array (
                'id' => 171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 10,
            ),
            166 => 
            array (
                'id' => 172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 7,
            ),
            167 => 
            array (
                'id' => 173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 5,
            ),
            168 => 
            array (
                'id' => 174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 2,
            ),
            169 => 
            array (
                'id' => 175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 3,
            ),
            170 => 
            array (
                'id' => 176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 6,
            ),
            171 => 
            array (
                'id' => 177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 3,
            ),
            172 => 
            array (
                'id' => 178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 5,
            ),
            173 => 
            array (
                'id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 6,
            ),
            174 => 
            array (
                'id' => 180,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 3,
            ),
            175 => 
            array (
                'id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 5,
            ),
            176 => 
            array (
                'id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 6,
            ),
            177 => 
            array (
                'id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 3,
            ),
            178 => 
            array (
                'id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 5,
            ),
            179 => 
            array (
                'id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 6,
            ),
            180 => 
            array (
                'id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 3,
            ),
            181 => 
            array (
                'id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 5,
            ),
            182 => 
            array (
                'id' => 188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 6,
            ),
            183 => 
            array (
                'id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 3,
            ),
            184 => 
            array (
                'id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 5,
            ),
            185 => 
            array (
                'id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 6,
            ),
            186 => 
            array (
                'id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 3,
            ),
            187 => 
            array (
                'id' => 193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 5,
            ),
            188 => 
            array (
                'id' => 194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 6,
            ),
            189 => 
            array (
                'id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 3,
            ),
            190 => 
            array (
                'id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 5,
            ),
            191 => 
            array (
                'id' => 197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 6,
            ),
            192 => 
            array (
                'id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 3,
            ),
            193 => 
            array (
                'id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 5,
            ),
            194 => 
            array (
                'id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 6,
            ),
            195 => 
            array (
                'id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 3,
            ),
            196 => 
            array (
                'id' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 5,
            ),
            197 => 
            array (
                'id' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 6,
            ),
            198 => 
            array (
                'id' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 3,
            ),
            199 => 
            array (
                'id' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 5,
            ),
            200 => 
            array (
                'id' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 6,
            ),
            201 => 
            array (
                'id' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 3,
            ),
            202 => 
            array (
                'id' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 5,
            ),
            203 => 
            array (
                'id' => 209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 6,
            ),
            204 => 
            array (
                'id' => 210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 3,
            ),
            205 => 
            array (
                'id' => 211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 5,
            ),
            206 => 
            array (
                'id' => 212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 6,
            ),
            207 => 
            array (
                'id' => 213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 3,
            ),
            208 => 
            array (
                'id' => 214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 5,
            ),
            209 => 
            array (
                'id' => 215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 6,
            ),
            210 => 
            array (
                'id' => 216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 3,
            ),
            211 => 
            array (
                'id' => 217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 5,
            ),
            212 => 
            array (
                'id' => 218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 6,
            ),
            213 => 
            array (
                'id' => 219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 3,
            ),
            214 => 
            array (
                'id' => 220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 5,
            ),
            215 => 
            array (
                'id' => 221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 6,
            ),
            216 => 
            array (
                'id' => 222,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'categorie_id' => 3,
            ),
            217 => 
            array (
                'id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'categorie_id' => 5,
            ),
            218 => 
            array (
                'id' => 224,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'categorie_id' => 6,
            ),
            219 => 
            array (
                'id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 3,
            ),
            220 => 
            array (
                'id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 5,
            ),
            221 => 
            array (
                'id' => 227,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 6,
            ),
            222 => 
            array (
                'id' => 228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 3,
            ),
            223 => 
            array (
                'id' => 229,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 5,
            ),
            224 => 
            array (
                'id' => 230,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 6,
            ),
            225 => 
            array (
                'id' => 231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 3,
            ),
            226 => 
            array (
                'id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 5,
            ),
            227 => 
            array (
                'id' => 233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 6,
            ),
            228 => 
            array (
                'id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 3,
            ),
            229 => 
            array (
                'id' => 235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 5,
            ),
            230 => 
            array (
                'id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 6,
            ),
            231 => 
            array (
                'id' => 237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 3,
            ),
            232 => 
            array (
                'id' => 238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 5,
            ),
            233 => 
            array (
                'id' => 239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 6,
            ),
            234 => 
            array (
                'id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 3,
            ),
            235 => 
            array (
                'id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 5,
            ),
            236 => 
            array (
                'id' => 242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 6,
            ),
            237 => 
            array (
                'id' => 243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 3,
            ),
            238 => 
            array (
                'id' => 244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 5,
            ),
            239 => 
            array (
                'id' => 245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 6,
            ),
            240 => 
            array (
                'id' => 246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 3,
            ),
            241 => 
            array (
                'id' => 247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 5,
            ),
            242 => 
            array (
                'id' => 248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 6,
            ),
            243 => 
            array (
                'id' => 249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 5,
            ),
            244 => 
            array (
                'id' => 250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 6,
            ),
            245 => 
            array (
                'id' => 251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 3,
            ),
            246 => 
            array (
                'id' => 252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 5,
            ),
            247 => 
            array (
                'id' => 253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 6,
            ),
            248 => 
            array (
                'id' => 254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 3,
            ),
            249 => 
            array (
                'id' => 255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 5,
            ),
            250 => 
            array (
                'id' => 256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 6,
            ),
            251 => 
            array (
                'id' => 257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 3,
            ),
            252 => 
            array (
                'id' => 258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 5,
            ),
            253 => 
            array (
                'id' => 259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 6,
            ),
            254 => 
            array (
                'id' => 260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 7,
            ),
            255 => 
            array (
                'id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 10,
            ),
            256 => 
            array (
                'id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 2,
            ),
            257 => 
            array (
                'id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 1,
            ),
            258 => 
            array (
                'id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 1,
            ),
            259 => 
            array (
                'id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 1,
            ),
            260 => 
            array (
                'id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 4,
            ),
            261 => 
            array (
                'id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 1,
            ),
            262 => 
            array (
                'id' => 268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 4,
            ),
            263 => 
            array (
                'id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 1,
            ),
            264 => 
            array (
                'id' => 270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 4,
            ),
            265 => 
            array (
                'id' => 271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 4,
            ),
            266 => 
            array (
                'id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 1,
            ),
            267 => 
            array (
                'id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 4,
            ),
            268 => 
            array (
                'id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 1,
            ),
            269 => 
            array (
                'id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 4,
            ),
            270 => 
            array (
                'id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 1,
            ),
            271 => 
            array (
                'id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 4,
            ),
            272 => 
            array (
                'id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 1,
            ),
            273 => 
            array (
                'id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 4,
            ),
            274 => 
            array (
                'id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 1,
            ),
            275 => 
            array (
                'id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 4,
            ),
            276 => 
            array (
                'id' => 282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 1,
            ),
            277 => 
            array (
                'id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 4,
            ),
            278 => 
            array (
                'id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 1,
            ),
            279 => 
            array (
                'id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 4,
            ),
            280 => 
            array (
                'id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 1,
            ),
            281 => 
            array (
                'id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 2,
            ),
            282 => 
            array (
                'id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 4,
            ),
            283 => 
            array (
                'id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 10,
            ),
            284 => 
            array (
                'id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 4,
            ),
            285 => 
            array (
                'id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 10,
            ),
            286 => 
            array (
                'id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 1,
            ),
            287 => 
            array (
                'id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 2,
            ),
            288 => 
            array (
                'id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 7,
            ),
            289 => 
            array (
                'id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 7,
            ),
            290 => 
            array (
                'id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 1,
            ),
            291 => 
            array (
                'id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 2,
            ),
            292 => 
            array (
                'id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 3,
            ),
            293 => 
            array (
                'id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 4,
            ),
            294 => 
            array (
                'id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 7,
            ),
            295 => 
            array (
                'id' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 10,
            ),
            296 => 
            array (
                'id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 1,
            ),
            297 => 
            array (
                'id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 2,
            ),
            298 => 
            array (
                'id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 7,
            ),
            299 => 
            array (
                'id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 4,
            ),
            300 => 
            array (
                'id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 10,
            ),
            301 => 
            array (
                'id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 7,
            ),
            302 => 
            array (
                'id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 2,
            ),
            303 => 
            array (
                'id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 10,
            ),
            304 => 
            array (
                'id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 2,
            ),
            305 => 
            array (
                'id' => 311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 10,
            ),
            306 => 
            array (
                'id' => 312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 7,
            ),
            307 => 
            array (
                'id' => 313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 2,
            ),
            308 => 
            array (
                'id' => 314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 7,
            ),
            309 => 
            array (
                'id' => 315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 10,
            ),
            310 => 
            array (
                'id' => 316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 2,
            ),
            311 => 
            array (
                'id' => 317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 7,
            ),
            312 => 
            array (
                'id' => 318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 10,
            ),
            313 => 
            array (
                'id' => 319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 2,
            ),
            314 => 
            array (
                'id' => 320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 7,
            ),
            315 => 
            array (
                'id' => 321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 10,
            ),
            316 => 
            array (
                'id' => 322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 2,
            ),
            317 => 
            array (
                'id' => 323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 7,
            ),
            318 => 
            array (
                'id' => 324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 10,
            ),
            319 => 
            array (
                'id' => 325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 2,
            ),
            320 => 
            array (
                'id' => 326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 7,
            ),
            321 => 
            array (
                'id' => 327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 10,
            ),
            322 => 
            array (
                'id' => 328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 2,
            ),
            323 => 
            array (
                'id' => 329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 7,
            ),
            324 => 
            array (
                'id' => 330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 10,
            ),
            325 => 
            array (
                'id' => 331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 2,
            ),
            326 => 
            array (
                'id' => 332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 7,
            ),
            327 => 
            array (
                'id' => 333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 10,
            ),
            328 => 
            array (
                'id' => 334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 2,
            ),
            329 => 
            array (
                'id' => 335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 7,
            ),
            330 => 
            array (
                'id' => 336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 10,
            ),
            331 => 
            array (
                'id' => 337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'categorie_id' => 2,
            ),
            332 => 
            array (
                'id' => 338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'categorie_id' => 7,
            ),
            333 => 
            array (
                'id' => 339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 41,
                'categorie_id' => 10,
            ),
            334 => 
            array (
                'id' => 340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 7,
            ),
            335 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 2,
            ),
            336 => 
            array (
                'id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 10,
            ),
            337 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 2,
            ),
            338 => 
            array (
                'id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 7,
            ),
            339 => 
            array (
                'id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 10,
            ),
            340 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 2,
            ),
            341 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 7,
            ),
            342 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 10,
            ),
            343 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 2,
            ),
            344 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 7,
            ),
            345 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 10,
            ),
            346 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 2,
            ),
            347 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 7,
            ),
            348 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 10,
            ),
            349 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 2,
            ),
            350 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 7,
            ),
            351 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 10,
            ),
            352 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 2,
            ),
            353 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 7,
            ),
            354 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 10,
            ),
            355 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 2,
            ),
            356 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 7,
            ),
            357 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 10,
            ),
            358 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 2,
            ),
            359 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 7,
            ),
            360 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 10,
            ),
            361 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 2,
            ),
            362 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 7,
            ),
            363 => 
            array (
                'id' => 369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 10,
            ),
            364 => 
            array (
                'id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 2,
            ),
            365 => 
            array (
                'id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 7,
            ),
            366 => 
            array (
                'id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 10,
            ),
            367 => 
            array (
                'id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 2,
            ),
            368 => 
            array (
                'id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 7,
            ),
            369 => 
            array (
                'id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 10,
            ),
            370 => 
            array (
                'id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 4,
            ),
            371 => 
            array (
                'id' => 377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 1,
            ),
            372 => 
            array (
                'id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 1,
            ),
            373 => 
            array (
                'id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 4,
            ),
            374 => 
            array (
                'id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 1,
            ),
            375 => 
            array (
                'id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 4,
            ),
            376 => 
            array (
                'id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 1,
            ),
            377 => 
            array (
                'id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 4,
            ),
            378 => 
            array (
                'id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 1,
            ),
            379 => 
            array (
                'id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 4,
            ),
            380 => 
            array (
                'id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 1,
            ),
            381 => 
            array (
                'id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 4,
            ),
            382 => 
            array (
                'id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 1,
            ),
            383 => 
            array (
                'id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 4,
            ),
            384 => 
            array (
                'id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 1,
            ),
            385 => 
            array (
                'id' => 391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 4,
            ),
            386 => 
            array (
                'id' => 392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 1,
            ),
            387 => 
            array (
                'id' => 393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 4,
            ),
            388 => 
            array (
                'id' => 394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 1,
            ),
            389 => 
            array (
                'id' => 395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 4,
            ),
            390 => 
            array (
                'id' => 396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 1,
            ),
            391 => 
            array (
                'id' => 397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 4,
            ),
            392 => 
            array (
                'id' => 398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 1,
            ),
            393 => 
            array (
                'id' => 399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 1,
            ),
            394 => 
            array (
                'id' => 400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 4,
            ),
        ));
        
        
    }
}