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
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 1,
            ),
            44 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 2,
            ),
            45 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 3,
            ),
            46 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 4,
            ),
            47 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 5,
            ),
            48 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 6,
            ),
            49 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 7,
            ),
            50 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 10,
            ),
            51 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 2,
            ),
            52 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 3,
            ),
            53 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 4,
            ),
            54 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 5,
            ),
            55 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 6,
            ),
            56 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 7,
            ),
            57 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 10,
            ),
            58 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 2,
            ),
            59 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 3,
            ),
            60 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 4,
            ),
            61 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 5,
            ),
            62 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 6,
            ),
            63 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 7,
            ),
            64 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 10,
            ),
            65 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 2,
            ),
            66 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 3,
            ),
            67 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 4,
            ),
            68 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 5,
            ),
            69 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 6,
            ),
            70 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 7,
            ),
            71 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 10,
            ),
            72 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 1,
            ),
            73 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 2,
            ),
            74 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 3,
            ),
            75 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 1,
            ),
            76 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 2,
            ),
            77 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 4,
            ),
            78 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 3,
            ),
            79 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 5,
            ),
            80 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 6,
            ),
            81 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 7,
            ),
            82 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 10,
            ),
            83 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 1,
            ),
            84 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 2,
            ),
            85 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 1,
            ),
            86 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 3,
            ),
            87 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 4,
            ),
            88 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 5,
            ),
            89 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 6,
            ),
            90 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 7,
            ),
            91 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 10,
            ),
            92 => 
            array (
                'id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 2,
            ),
            93 => 
            array (
                'id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 3,
            ),
            94 => 
            array (
                'id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 4,
            ),
            95 => 
            array (
                'id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 5,
            ),
            96 => 
            array (
                'id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 6,
            ),
            97 => 
            array (
                'id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 7,
            ),
            98 => 
            array (
                'id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 10,
            ),
            99 => 
            array (
                'id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 1,
            ),
            100 => 
            array (
                'id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 1,
            ),
            101 => 
            array (
                'id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 10,
            ),
            102 => 
            array (
                'id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 7,
            ),
            103 => 
            array (
                'id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 5,
            ),
            104 => 
            array (
                'id' => 120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 2,
            ),
            105 => 
            array (
                'id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 3,
            ),
            106 => 
            array (
                'id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 6,
            ),
            107 => 
            array (
                'id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 10,
            ),
            108 => 
            array (
                'id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 7,
            ),
            109 => 
            array (
                'id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 5,
            ),
            110 => 
            array (
                'id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 2,
            ),
            111 => 
            array (
                'id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 3,
            ),
            112 => 
            array (
                'id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 6,
            ),
            113 => 
            array (
                'id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 10,
            ),
            114 => 
            array (
                'id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 7,
            ),
            115 => 
            array (
                'id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 5,
            ),
            116 => 
            array (
                'id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 2,
            ),
            117 => 
            array (
                'id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 3,
            ),
            118 => 
            array (
                'id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 6,
            ),
            119 => 
            array (
                'id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 10,
            ),
            120 => 
            array (
                'id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 7,
            ),
            121 => 
            array (
                'id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 5,
            ),
            122 => 
            array (
                'id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 2,
            ),
            123 => 
            array (
                'id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 3,
            ),
            124 => 
            array (
                'id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 6,
            ),
            125 => 
            array (
                'id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 10,
            ),
            126 => 
            array (
                'id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 7,
            ),
            127 => 
            array (
                'id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 5,
            ),
            128 => 
            array (
                'id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 2,
            ),
            129 => 
            array (
                'id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 3,
            ),
            130 => 
            array (
                'id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 6,
            ),
            131 => 
            array (
                'id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 10,
            ),
            132 => 
            array (
                'id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 7,
            ),
            133 => 
            array (
                'id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 5,
            ),
            134 => 
            array (
                'id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 2,
            ),
            135 => 
            array (
                'id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 3,
            ),
            136 => 
            array (
                'id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 6,
            ),
            137 => 
            array (
                'id' => 153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 10,
            ),
            138 => 
            array (
                'id' => 155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 5,
            ),
            139 => 
            array (
                'id' => 158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 6,
            ),
            140 => 
            array (
                'id' => 159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 10,
            ),
            141 => 
            array (
                'id' => 160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 7,
            ),
            142 => 
            array (
                'id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 5,
            ),
            143 => 
            array (
                'id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 2,
            ),
            144 => 
            array (
                'id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 3,
            ),
            145 => 
            array (
                'id' => 164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 6,
            ),
            146 => 
            array (
                'id' => 165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 10,
            ),
            147 => 
            array (
                'id' => 166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 7,
            ),
            148 => 
            array (
                'id' => 167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 5,
            ),
            149 => 
            array (
                'id' => 168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 2,
            ),
            150 => 
            array (
                'id' => 169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 3,
            ),
            151 => 
            array (
                'id' => 170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 6,
            ),
            152 => 
            array (
                'id' => 171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 10,
            ),
            153 => 
            array (
                'id' => 172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 7,
            ),
            154 => 
            array (
                'id' => 173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 5,
            ),
            155 => 
            array (
                'id' => 174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 2,
            ),
            156 => 
            array (
                'id' => 175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 3,
            ),
            157 => 
            array (
                'id' => 176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 6,
            ),
            158 => 
            array (
                'id' => 177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 3,
            ),
            159 => 
            array (
                'id' => 178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 5,
            ),
            160 => 
            array (
                'id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 6,
            ),
            161 => 
            array (
                'id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 5,
            ),
            162 => 
            array (
                'id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 6,
            ),
            163 => 
            array (
                'id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 3,
            ),
            164 => 
            array (
                'id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 5,
            ),
            165 => 
            array (
                'id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 6,
            ),
            166 => 
            array (
                'id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 3,
            ),
            167 => 
            array (
                'id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 5,
            ),
            168 => 
            array (
                'id' => 188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 6,
            ),
            169 => 
            array (
                'id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 3,
            ),
            170 => 
            array (
                'id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 5,
            ),
            171 => 
            array (
                'id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 6,
            ),
            172 => 
            array (
                'id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 3,
            ),
            173 => 
            array (
                'id' => 193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 5,
            ),
            174 => 
            array (
                'id' => 194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 6,
            ),
            175 => 
            array (
                'id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 3,
            ),
            176 => 
            array (
                'id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 5,
            ),
            177 => 
            array (
                'id' => 197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 6,
            ),
            178 => 
            array (
                'id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 3,
            ),
            179 => 
            array (
                'id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 5,
            ),
            180 => 
            array (
                'id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 6,
            ),
            181 => 
            array (
                'id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 3,
            ),
            182 => 
            array (
                'id' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 5,
            ),
            183 => 
            array (
                'id' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 6,
            ),
            184 => 
            array (
                'id' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 3,
            ),
            185 => 
            array (
                'id' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 5,
            ),
            186 => 
            array (
                'id' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 6,
            ),
            187 => 
            array (
                'id' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 3,
            ),
            188 => 
            array (
                'id' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 5,
            ),
            189 => 
            array (
                'id' => 209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 6,
            ),
            190 => 
            array (
                'id' => 210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 3,
            ),
            191 => 
            array (
                'id' => 211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 5,
            ),
            192 => 
            array (
                'id' => 212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 6,
            ),
            193 => 
            array (
                'id' => 213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 3,
            ),
            194 => 
            array (
                'id' => 214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 5,
            ),
            195 => 
            array (
                'id' => 215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 6,
            ),
            196 => 
            array (
                'id' => 216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 3,
            ),
            197 => 
            array (
                'id' => 217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 5,
            ),
            198 => 
            array (
                'id' => 218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 6,
            ),
            199 => 
            array (
                'id' => 219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 3,
            ),
            200 => 
            array (
                'id' => 220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 5,
            ),
            201 => 
            array (
                'id' => 221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 6,
            ),
            202 => 
            array (
                'id' => 228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 3,
            ),
            203 => 
            array (
                'id' => 231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 3,
            ),
            204 => 
            array (
                'id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 5,
            ),
            205 => 
            array (
                'id' => 233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 6,
            ),
            206 => 
            array (
                'id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 3,
            ),
            207 => 
            array (
                'id' => 235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 5,
            ),
            208 => 
            array (
                'id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 6,
            ),
            209 => 
            array (
                'id' => 237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 3,
            ),
            210 => 
            array (
                'id' => 238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 5,
            ),
            211 => 
            array (
                'id' => 239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 6,
            ),
            212 => 
            array (
                'id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 3,
            ),
            213 => 
            array (
                'id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 5,
            ),
            214 => 
            array (
                'id' => 242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 6,
            ),
            215 => 
            array (
                'id' => 243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 3,
            ),
            216 => 
            array (
                'id' => 244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 5,
            ),
            217 => 
            array (
                'id' => 245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 6,
            ),
            218 => 
            array (
                'id' => 246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 3,
            ),
            219 => 
            array (
                'id' => 247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 5,
            ),
            220 => 
            array (
                'id' => 248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 6,
            ),
            221 => 
            array (
                'id' => 249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 5,
            ),
            222 => 
            array (
                'id' => 250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 6,
            ),
            223 => 
            array (
                'id' => 251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 3,
            ),
            224 => 
            array (
                'id' => 252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 5,
            ),
            225 => 
            array (
                'id' => 253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 6,
            ),
            226 => 
            array (
                'id' => 254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 3,
            ),
            227 => 
            array (
                'id' => 255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 5,
            ),
            228 => 
            array (
                'id' => 256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 6,
            ),
            229 => 
            array (
                'id' => 257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 3,
            ),
            230 => 
            array (
                'id' => 258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 5,
            ),
            231 => 
            array (
                'id' => 259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 6,
            ),
            232 => 
            array (
                'id' => 260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 7,
            ),
            233 => 
            array (
                'id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 10,
            ),
            234 => 
            array (
                'id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 2,
            ),
            235 => 
            array (
                'id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 7,
                'categorie_id' => 1,
            ),
            236 => 
            array (
                'id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 1,
            ),
            237 => 
            array (
                'id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 4,
            ),
            238 => 
            array (
                'id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 1,
            ),
            239 => 
            array (
                'id' => 268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 4,
            ),
            240 => 
            array (
                'id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 1,
            ),
            241 => 
            array (
                'id' => 270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 4,
            ),
            242 => 
            array (
                'id' => 271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 4,
            ),
            243 => 
            array (
                'id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 1,
            ),
            244 => 
            array (
                'id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 4,
            ),
            245 => 
            array (
                'id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 1,
            ),
            246 => 
            array (
                'id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 4,
            ),
            247 => 
            array (
                'id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 22,
                'categorie_id' => 4,
            ),
            248 => 
            array (
                'id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 1,
            ),
            249 => 
            array (
                'id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 4,
            ),
            250 => 
            array (
                'id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 1,
            ),
            251 => 
            array (
                'id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 4,
            ),
            252 => 
            array (
                'id' => 282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 1,
            ),
            253 => 
            array (
                'id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 4,
            ),
            254 => 
            array (
                'id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 1,
            ),
            255 => 
            array (
                'id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 4,
            ),
            256 => 
            array (
                'id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 4,
            ),
            257 => 
            array (
                'id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 27,
                'categorie_id' => 10,
            ),
            258 => 
            array (
                'id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 4,
            ),
            259 => 
            array (
                'id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 10,
            ),
            260 => 
            array (
                'id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 1,
            ),
            261 => 
            array (
                'id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 2,
            ),
            262 => 
            array (
                'id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 7,
            ),
            263 => 
            array (
                'id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 1,
            ),
            264 => 
            array (
                'id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 2,
            ),
            265 => 
            array (
                'id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 4,
            ),
            266 => 
            array (
                'id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 7,
            ),
            267 => 
            array (
                'id' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 10,
            ),
            268 => 
            array (
                'id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 1,
            ),
            269 => 
            array (
                'id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 2,
            ),
            270 => 
            array (
                'id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 7,
            ),
            271 => 
            array (
                'id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 4,
            ),
            272 => 
            array (
                'id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 10,
            ),
            273 => 
            array (
                'id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 7,
            ),
            274 => 
            array (
                'id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 2,
            ),
            275 => 
            array (
                'id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 10,
            ),
            276 => 
            array (
                'id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 2,
            ),
            277 => 
            array (
                'id' => 311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 10,
            ),
            278 => 
            array (
                'id' => 312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 7,
            ),
            279 => 
            array (
                'id' => 313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 2,
            ),
            280 => 
            array (
                'id' => 314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 7,
            ),
            281 => 
            array (
                'id' => 315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 10,
            ),
            282 => 
            array (
                'id' => 316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 2,
            ),
            283 => 
            array (
                'id' => 317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 7,
            ),
            284 => 
            array (
                'id' => 318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 10,
            ),
            285 => 
            array (
                'id' => 319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 2,
            ),
            286 => 
            array (
                'id' => 320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 7,
            ),
            287 => 
            array (
                'id' => 321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 10,
            ),
            288 => 
            array (
                'id' => 322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 2,
            ),
            289 => 
            array (
                'id' => 323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 7,
            ),
            290 => 
            array (
                'id' => 324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 10,
            ),
            291 => 
            array (
                'id' => 325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 2,
            ),
            292 => 
            array (
                'id' => 326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 7,
            ),
            293 => 
            array (
                'id' => 327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 10,
            ),
            294 => 
            array (
                'id' => 328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 2,
            ),
            295 => 
            array (
                'id' => 329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 7,
            ),
            296 => 
            array (
                'id' => 330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 10,
            ),
            297 => 
            array (
                'id' => 331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 2,
            ),
            298 => 
            array (
                'id' => 332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 7,
            ),
            299 => 
            array (
                'id' => 333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 10,
            ),
            300 => 
            array (
                'id' => 334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 2,
            ),
            301 => 
            array (
                'id' => 335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 7,
            ),
            302 => 
            array (
                'id' => 336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 10,
            ),
            303 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 12,
                'categorie_id' => 2,
            ),
            304 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 2,
            ),
            305 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 2,
            ),
            306 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 7,
            ),
            307 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 10,
            ),
            308 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 2,
            ),
            309 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 7,
            ),
            310 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 10,
            ),
            311 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 2,
            ),
            312 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 7,
            ),
            313 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 10,
            ),
            314 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 2,
            ),
            315 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 7,
            ),
            316 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 10,
            ),
            317 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 2,
            ),
            318 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 7,
            ),
            319 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 10,
            ),
            320 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 2,
            ),
            321 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 7,
            ),
            322 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 10,
            ),
            323 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 2,
            ),
            324 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 7,
            ),
            325 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 10,
            ),
            326 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 2,
            ),
            327 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 7,
            ),
            328 => 
            array (
                'id' => 369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 10,
            ),
            329 => 
            array (
                'id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 2,
            ),
            330 => 
            array (
                'id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 7,
            ),
            331 => 
            array (
                'id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 10,
            ),
            332 => 
            array (
                'id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 2,
            ),
            333 => 
            array (
                'id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 7,
            ),
            334 => 
            array (
                'id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 10,
            ),
            335 => 
            array (
                'id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 4,
            ),
            336 => 
            array (
                'id' => 377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 1,
            ),
            337 => 
            array (
                'id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 1,
            ),
            338 => 
            array (
                'id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 4,
            ),
            339 => 
            array (
                'id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 1,
            ),
            340 => 
            array (
                'id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 4,
            ),
            341 => 
            array (
                'id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 1,
            ),
            342 => 
            array (
                'id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 4,
            ),
            343 => 
            array (
                'id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 1,
            ),
            344 => 
            array (
                'id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 4,
            ),
            345 => 
            array (
                'id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 1,
            ),
            346 => 
            array (
                'id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 43,
                'categorie_id' => 1,
            ),
            347 => 
            array (
                'id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 1,
            ),
            348 => 
            array (
                'id' => 391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 4,
            ),
            349 => 
            array (
                'id' => 392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 1,
            ),
            350 => 
            array (
                'id' => 393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 4,
            ),
            351 => 
            array (
                'id' => 394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 1,
            ),
            352 => 
            array (
                'id' => 395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 4,
            ),
            353 => 
            array (
                'id' => 396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 1,
            ),
            354 => 
            array (
                'id' => 397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 4,
            ),
            355 => 
            array (
                'id' => 398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 1,
            ),
            356 => 
            array (
                'id' => 399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 1,
            ),
            357 => 
            array (
                'id' => 400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 4,
            ),
            358 => 
            array (
                'id' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'categorie_id' => 17,
            ),
            359 => 
            array (
                'id' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'categorie_id' => 18,
            ),
            360 => 
            array (
                'id' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'categorie_id' => 12,
            ),
            361 => 
            array (
                'id' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'categorie_id' => 17,
            ),
            362 => 
            array (
                'id' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'categorie_id' => 19,
            ),
            363 => 
            array (
                'id' => 407,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'categorie_id' => 12,
            ),
            364 => 
            array (
                'id' => 408,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'categorie_id' => 15,
            ),
            365 => 
            array (
                'id' => 409,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'categorie_id' => 15,
            ),
            366 => 
            array (
                'id' => 410,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'categorie_id' => 15,
            ),
            367 => 
            array (
                'id' => 411,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 64,
                'categorie_id' => 1,
            ),
            368 => 
            array (
                'id' => 412,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 64,
                'categorie_id' => 2,
            ),
            369 => 
            array (
                'id' => 413,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 64,
                'categorie_id' => 3,
            ),
            370 => 
            array (
                'id' => 415,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 65,
                'categorie_id' => 4,
            ),
            371 => 
            array (
                'id' => 416,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 67,
                'categorie_id' => 4,
            ),
            372 => 
            array (
                'id' => 417,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 42,
                'categorie_id' => 3,
            ),
            373 => 
            array (
                'id' => 418,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 68,
                'categorie_id' => 1,
            ),
            374 => 
            array (
                'id' => 419,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 68,
                'categorie_id' => 2,
            ),
            375 => 
            array (
                'id' => 420,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 68,
                'categorie_id' => 3,
            ),
            376 => 
            array (
                'id' => 421,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 65,
                'categorie_id' => 6,
            ),
            377 => 
            array (
                'id' => 422,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 65,
                'categorie_id' => 5,
            ),
            378 => 
            array (
                'id' => 424,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 65,
                'categorie_id' => 10,
            ),
            379 => 
            array (
                'id' => 425,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 66,
                'categorie_id' => 4,
            ),
            380 => 
            array (
                'id' => 426,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 66,
                'categorie_id' => 5,
            ),
            381 => 
            array (
                'id' => 427,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 66,
                'categorie_id' => 6,
            ),
            382 => 
            array (
                'id' => 428,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 66,
                'categorie_id' => 10,
            ),
            383 => 
            array (
                'id' => 429,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 67,
                'categorie_id' => 5,
            ),
            384 => 
            array (
                'id' => 430,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 67,
                'categorie_id' => 6,
            ),
            385 => 
            array (
                'id' => 431,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 67,
                'categorie_id' => 10,
            ),
            386 => 
            array (
                'id' => 432,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 1,
                'categorie_id' => 21,
            ),
            387 => 
            array (
                'id' => 433,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 3,
                'categorie_id' => 21,
            ),
            388 => 
            array (
                'id' => 434,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 2,
                'categorie_id' => 21,
            ),
            389 => 
            array (
                'id' => 435,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 4,
                'categorie_id' => 21,
            ),
            390 => 
            array (
                'id' => 436,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 5,
                'categorie_id' => 21,
            ),
            391 => 
            array (
                'id' => 437,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 6,
                'categorie_id' => 21,
            ),
            392 => 
            array (
                'id' => 438,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 8,
                'categorie_id' => 21,
            ),
            393 => 
            array (
                'id' => 439,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 9,
                'categorie_id' => 21,
            ),
            394 => 
            array (
                'id' => 440,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 10,
                'categorie_id' => 21,
            ),
            395 => 
            array (
                'id' => 441,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 11,
                'categorie_id' => 21,
            ),
            396 => 
            array (
                'id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 13,
                'categorie_id' => 21,
            ),
            397 => 
            array (
                'id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 14,
                'categorie_id' => 21,
            ),
            398 => 
            array (
                'id' => 444,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 16,
                'categorie_id' => 21,
            ),
            399 => 
            array (
                'id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 17,
                'categorie_id' => 21,
            ),
            400 => 
            array (
                'id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 18,
                'categorie_id' => 21,
            ),
            401 => 
            array (
                'id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 19,
                'categorie_id' => 21,
            ),
            402 => 
            array (
                'id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 20,
                'categorie_id' => 21,
            ),
            403 => 
            array (
                'id' => 449,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 21,
                'categorie_id' => 21,
            ),
            404 => 
            array (
                'id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 23,
                'categorie_id' => 21,
            ),
            405 => 
            array (
                'id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 24,
                'categorie_id' => 21,
            ),
            406 => 
            array (
                'id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 25,
                'categorie_id' => 21,
            ),
            407 => 
            array (
                'id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 26,
                'categorie_id' => 21,
            ),
            408 => 
            array (
                'id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 28,
                'categorie_id' => 21,
            ),
            409 => 
            array (
                'id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 29,
                'categorie_id' => 21,
            ),
            410 => 
            array (
                'id' => 456,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 30,
                'categorie_id' => 21,
            ),
            411 => 
            array (
                'id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 31,
                'categorie_id' => 21,
            ),
            412 => 
            array (
                'id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 32,
                'categorie_id' => 21,
            ),
            413 => 
            array (
                'id' => 459,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 33,
                'categorie_id' => 21,
            ),
            414 => 
            array (
                'id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 34,
                'categorie_id' => 21,
            ),
            415 => 
            array (
                'id' => 461,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 35,
                'categorie_id' => 21,
            ),
            416 => 
            array (
                'id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 36,
                'categorie_id' => 21,
            ),
            417 => 
            array (
                'id' => 463,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 37,
                'categorie_id' => 21,
            ),
            418 => 
            array (
                'id' => 464,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 38,
                'categorie_id' => 21,
            ),
            419 => 
            array (
                'id' => 465,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 39,
                'categorie_id' => 21,
            ),
            420 => 
            array (
                'id' => 466,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 40,
                'categorie_id' => 21,
            ),
            421 => 
            array (
                'id' => 468,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 44,
                'categorie_id' => 21,
            ),
            422 => 
            array (
                'id' => 469,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 21,
            ),
            423 => 
            array (
                'id' => 470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 21,
            ),
            424 => 
            array (
                'id' => 471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 21,
            ),
            425 => 
            array (
                'id' => 472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 48,
                'categorie_id' => 21,
            ),
            426 => 
            array (
                'id' => 474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 1,
            ),
            427 => 
            array (
                'id' => 475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 4,
            ),
            428 => 
            array (
                'id' => 476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 50,
                'categorie_id' => 21,
            ),
            429 => 
            array (
                'id' => 477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 49,
                'categorie_id' => 21,
            ),
            430 => 
            array (
                'id' => 478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 21,
            ),
            431 => 
            array (
                'id' => 479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 4,
            ),
            432 => 
            array (
                'id' => 480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 51,
                'categorie_id' => 1,
            ),
            433 => 
            array (
                'id' => 481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 52,
                'categorie_id' => 21,
            ),
            434 => 
            array (
                'id' => 482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 1,
            ),
            435 => 
            array (
                'id' => 483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 4,
            ),
            436 => 
            array (
                'id' => 484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 53,
                'categorie_id' => 21,
            ),
            437 => 
            array (
                'id' => 485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 1,
            ),
            438 => 
            array (
                'id' => 486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 45,
                'categorie_id' => 4,
            ),
            439 => 
            array (
                'id' => 487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 1,
            ),
            440 => 
            array (
                'id' => 488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 47,
                'categorie_id' => 4,
            ),
            441 => 
            array (
                'id' => 489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 46,
                'categorie_id' => 5,
            ),
            442 => 
            array (
                'id' => 490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'categorie_id' => 17,
            ),
            443 => 
            array (
                'id' => 491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'categorie_id' => 19,
            ),
            444 => 
            array (
                'id' => 492,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 62,
                'categorie_id' => 20,
            ),
            445 => 
            array (
                'id' => 493,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'categorie_id' => 20,
            ),
        ));
        
        
    }
}