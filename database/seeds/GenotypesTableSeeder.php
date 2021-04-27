<?php

use Illuminate\Database\Seeder;

class GenotypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genotypes')->delete();
        
        \DB::table('genotypes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 5,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 47,
                'allele_m_id' => 8,
                'locus_id' => 26,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 25,
                'allele_m_id' => 26,
                'locus_id' => 16,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 20,
                'allele_m_id' => 21,
                'locus_id' => 17,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 5,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 33,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            54 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            57 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            59 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 5,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            60 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            61 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            62 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            63 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            65 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
            ),
            66 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            68 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 32,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            69 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            71 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            72 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            73 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            75 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            77 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            78 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            80 => 
            array (
                'id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            81 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            83 => 
            array (
                'id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            84 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 33,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 33,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 33,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            87 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 36,
                'allele_m_id' => 37,
                'locus_id' => 22,
            ),
            88 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 37,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            89 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 36,
                'allele_m_id' => 37,
                'locus_id' => 22,
            ),
            90 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 34,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 34,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            92 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 34,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            93 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            94 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 34,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            96 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            98 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 37,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            99 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 47,
                'allele_m_id' => 8,
                'locus_id' => 26,
            ),
            100 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 35,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            101 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 34,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            102 => 
            array (
                'id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 36,
                'allele_m_id' => 37,
                'locus_id' => 22,
            ),
            103 => 
            array (
                'id' => 259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            104 => 
            array (
                'id' => 260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            105 => 
            array (
                'id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            106 => 
            array (
                'id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            107 => 
            array (
                'id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            108 => 
            array (
                'id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            109 => 
            array (
                'id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            110 => 
            array (
                'id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            111 => 
            array (
                'id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            112 => 
            array (
                'id' => 268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            113 => 
            array (
                'id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            114 => 
            array (
                'id' => 270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            115 => 
            array (
                'id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            116 => 
            array (
                'id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            117 => 
            array (
                'id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            118 => 
            array (
                'id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            119 => 
            array (
                'id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            120 => 
            array (
                'id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 36,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            121 => 
            array (
                'id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 11,
                'allele_m_id' => 12,
                'locus_id' => 15,
            ),
            122 => 
            array (
                'id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 37,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            123 => 
            array (
                'id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 34,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            124 => 
            array (
                'id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 34,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            125 => 
            array (
                'id' => 282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            126 => 
            array (
                'id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            127 => 
            array (
                'id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            128 => 
            array (
                'id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 8,
                'allele_m_id' => 8,
                'locus_id' => 26,
            ),
            129 => 
            array (
                'id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            130 => 
            array (
                'id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            131 => 
            array (
                'id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            132 => 
            array (
                'id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            133 => 
            array (
                'id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 24,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            134 => 
            array (
                'id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            135 => 
            array (
                'id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            136 => 
            array (
                'id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            137 => 
            array (
                'id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            138 => 
            array (
                'id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            139 => 
            array (
                'id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 44,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            140 => 
            array (
                'id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 45,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            141 => 
            array (
                'id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            142 => 
            array (
                'id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            143 => 
            array (
                'id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 48,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            144 => 
            array (
                'id' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 49,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            145 => 
            array (
                'id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            146 => 
            array (
                'id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            147 => 
            array (
                'id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            148 => 
            array (
                'id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            149 => 
            array (
                'id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 44,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            150 => 
            array (
                'id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 45,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            151 => 
            array (
                'id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            152 => 
            array (
                'id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            153 => 
            array (
                'id' => 311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 48,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            154 => 
            array (
                'id' => 312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 49,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            155 => 
            array (
                'id' => 313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            156 => 
            array (
                'id' => 314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            157 => 
            array (
                'id' => 315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 22,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            158 => 
            array (
                'id' => 316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            159 => 
            array (
                'id' => 317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 44,
                'allele_p_id' => 9,
                'allele_m_id' => 10,
                'locus_id' => 13,
            ),
            160 => 
            array (
                'id' => 318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 45,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            161 => 
            array (
                'id' => 319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            162 => 
            array (
                'id' => 320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
            ),
            163 => 
            array (
                'id' => 321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 48,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            164 => 
            array (
                'id' => 322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 49,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            165 => 
            array (
                'id' => 323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            166 => 
            array (
                'id' => 324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 51,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            167 => 
            array (
                'id' => 325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 51,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            168 => 
            array (
                'id' => 326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 51,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            169 => 
            array (
                'id' => 327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 52,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            170 => 
            array (
                'id' => 328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 53,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            171 => 
            array (
                'id' => 329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            172 => 
            array (
                'id' => 330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 52,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            173 => 
            array (
                'id' => 331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 53,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            174 => 
            array (
                'id' => 332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            175 => 
            array (
                'id' => 333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 52,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            176 => 
            array (
                'id' => 334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 53,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            177 => 
            array (
                'id' => 335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            178 => 
            array (
                'id' => 336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            179 => 
            array (
                'id' => 338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            180 => 
            array (
                'id' => 339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            181 => 
            array (
                'id' => 340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            182 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            183 => 
            array (
                'id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            184 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            185 => 
            array (
                'id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            186 => 
            array (
                'id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            187 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            188 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            189 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            190 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            191 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            192 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            193 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            194 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            195 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            196 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            197 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            198 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            199 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            200 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            201 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            202 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            203 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            204 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            205 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            206 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            207 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            208 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            209 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            210 => 
            array (
                'id' => 471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            211 => 
            array (
                'id' => 472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            212 => 
            array (
                'id' => 473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            213 => 
            array (
                'id' => 474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            214 => 
            array (
                'id' => 475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            215 => 
            array (
                'id' => 476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            216 => 
            array (
                'id' => 477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            217 => 
            array (
                'id' => 478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            218 => 
            array (
                'id' => 479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            219 => 
            array (
                'id' => 480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            220 => 
            array (
                'id' => 481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            221 => 
            array (
                'id' => 482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            222 => 
            array (
                'id' => 483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            223 => 
            array (
                'id' => 484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            224 => 
            array (
                'id' => 485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            225 => 
            array (
                'id' => 486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            226 => 
            array (
                'id' => 487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            227 => 
            array (
                'id' => 488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            228 => 
            array (
                'id' => 489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            229 => 
            array (
                'id' => 490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            230 => 
            array (
                'id' => 491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            231 => 
            array (
                'id' => 494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            232 => 
            array (
                'id' => 495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            233 => 
            array (
                'id' => 496,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            234 => 
            array (
                'id' => 497,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            235 => 
            array (
                'id' => 498,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            236 => 
            array (
                'id' => 499,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 33,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            237 => 
            array (
                'id' => 500,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            238 => 
            array (
                'id' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            239 => 
            array (
                'id' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 45,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            240 => 
            array (
                'id' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 45,
                'allele_m_id' => 45,
                'locus_id' => 25,
            ),
            241 => 
            array (
                'id' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 45,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            242 => 
            array (
                'id' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 9,
                'allele_m_id' => 10,
                'locus_id' => 13,
            ),
            243 => 
            array (
                'id' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            244 => 
            array (
                'id' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 46,
                'allele_m_id' => 45,
                'locus_id' => 25,
            ),
            245 => 
            array (
                'id' => 508,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 7,
                'allele_m_id' => 6,
                'locus_id' => 3,
            ),
            246 => 
            array (
                'id' => 509,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            247 => 
            array (
                'id' => 510,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            248 => 
            array (
                'id' => 511,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            249 => 
            array (
                'id' => 512,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            250 => 
            array (
                'id' => 513,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            251 => 
            array (
                'id' => 514,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            252 => 
            array (
                'id' => 515,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            253 => 
            array (
                'id' => 516,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            254 => 
            array (
                'id' => 517,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 19,
                'allele_m_id' => 6,
                'locus_id' => 3,
            ),
            255 => 
            array (
                'id' => 518,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            256 => 
            array (
                'id' => 519,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            257 => 
            array (
                'id' => 520,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 32,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            258 => 
            array (
                'id' => 521,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 34,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            259 => 
            array (
                'id' => 522,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            260 => 
            array (
                'id' => 523,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            261 => 
            array (
                'id' => 524,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 20,
                'allele_m_id' => 21,
                'locus_id' => 17,
            ),
            262 => 
            array (
                'id' => 525,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 25,
                'allele_m_id' => 26,
                'locus_id' => 16,
            ),
            263 => 
            array (
                'id' => 526,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            264 => 
            array (
                'id' => 527,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            265 => 
            array (
                'id' => 528,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            266 => 
            array (
                'id' => 529,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            267 => 
            array (
                'id' => 530,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            268 => 
            array (
                'id' => 531,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 88,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            269 => 
            array (
                'id' => 532,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            270 => 
            array (
                'id' => 533,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            271 => 
            array (
                'id' => 534,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            272 => 
            array (
                'id' => 535,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            273 => 
            array (
                'id' => 537,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            274 => 
            array (
                'id' => 538,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            275 => 
            array (
                'id' => 539,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            276 => 
            array (
                'id' => 540,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 5,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            277 => 
            array (
                'id' => 541,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            278 => 
            array (
                'id' => 542,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            279 => 
            array (
                'id' => 543,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            280 => 
            array (
                'id' => 544,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            281 => 
            array (
                'id' => 545,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            282 => 
            array (
                'id' => 546,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            283 => 
            array (
                'id' => 547,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            284 => 
            array (
                'id' => 548,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            285 => 
            array (
                'id' => 549,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            286 => 
            array (
                'id' => 550,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            287 => 
            array (
                'id' => 551,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            288 => 
            array (
                'id' => 552,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            289 => 
            array (
                'id' => 553,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            290 => 
            array (
                'id' => 554,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            291 => 
            array (
                'id' => 555,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            292 => 
            array (
                'id' => 556,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            293 => 
            array (
                'id' => 557,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            294 => 
            array (
                'id' => 558,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            295 => 
            array (
                'id' => 559,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            296 => 
            array (
                'id' => 560,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            297 => 
            array (
                'id' => 561,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            298 => 
            array (
                'id' => 562,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 6,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            299 => 
            array (
                'id' => 563,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 88,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            300 => 
            array (
                'id' => 565,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            301 => 
            array (
                'id' => 566,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            302 => 
            array (
                'id' => 567,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 15,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            303 => 
            array (
                'id' => 568,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            304 => 
            array (
                'id' => 569,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            305 => 
            array (
                'id' => 570,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            306 => 
            array (
                'id' => 571,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
            ),
            307 => 
            array (
                'id' => 572,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            308 => 
            array (
                'id' => 573,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            309 => 
            array (
                'id' => 574,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            310 => 
            array (
                'id' => 575,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            311 => 
            array (
                'id' => 576,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            312 => 
            array (
                'id' => 578,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            313 => 
            array (
                'id' => 579,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            314 => 
            array (
                'id' => 581,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            315 => 
            array (
                'id' => 582,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            316 => 
            array (
                'id' => 583,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            317 => 
            array (
                'id' => 584,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            318 => 
            array (
                'id' => 585,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            319 => 
            array (
                'id' => 586,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            320 => 
            array (
                'id' => 587,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 33,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            321 => 
            array (
                'id' => 588,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 33,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            322 => 
            array (
                'id' => 589,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            323 => 
            array (
                'id' => 590,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            324 => 
            array (
                'id' => 591,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            325 => 
            array (
                'id' => 592,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            326 => 
            array (
                'id' => 593,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            327 => 
            array (
                'id' => 594,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            328 => 
            array (
                'id' => 595,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            329 => 
            array (
                'id' => 596,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            330 => 
            array (
                'id' => 597,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 88,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            331 => 
            array (
                'id' => 598,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            332 => 
            array (
                'id' => 599,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            333 => 
            array (
                'id' => 600,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            334 => 
            array (
                'id' => 602,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            335 => 
            array (
                'id' => 603,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            336 => 
            array (
                'id' => 604,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            337 => 
            array (
                'id' => 605,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            338 => 
            array (
                'id' => 606,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            339 => 
            array (
                'id' => 607,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            340 => 
            array (
                'id' => 608,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            341 => 
            array (
                'id' => 609,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            342 => 
            array (
                'id' => 610,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            343 => 
            array (
                'id' => 611,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            344 => 
            array (
                'id' => 612,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            345 => 
            array (
                'id' => 613,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            346 => 
            array (
                'id' => 614,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            347 => 
            array (
                'id' => 615,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            348 => 
            array (
                'id' => 616,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            349 => 
            array (
                'id' => 617,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 98,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            350 => 
            array (
                'id' => 618,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 98,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            351 => 
            array (
                'id' => 619,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 98,
                'allele_p_id' => 18,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            352 => 
            array (
                'id' => 620,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            353 => 
            array (
                'id' => 621,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            354 => 
            array (
                'id' => 622,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            355 => 
            array (
                'id' => 623,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 7,
                'allele_m_id' => 18,
                'locus_id' => 3,
            ),
            356 => 
            array (
                'id' => 624,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 97,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            357 => 
            array (
                'id' => 625,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 97,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            358 => 
            array (
                'id' => 628,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            359 => 
            array (
                'id' => 629,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            360 => 
            array (
                'id' => 630,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            361 => 
            array (
                'id' => 631,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 13,
                'allele_m_id' => 14,
                'locus_id' => 10,
            ),
            362 => 
            array (
                'id' => 632,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            363 => 
            array (
                'id' => 633,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            364 => 
            array (
                'id' => 634,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 49,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            365 => 
            array (
                'id' => 635,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 24,
                'allele_m_id' => 24,
                'locus_id' => 4,
            ),
            366 => 
            array (
                'id' => 636,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            367 => 
            array (
                'id' => 641,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 96,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            368 => 
            array (
                'id' => 642,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 96,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            369 => 
            array (
                'id' => 643,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 102,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            370 => 
            array (
                'id' => 644,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 102,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            371 => 
            array (
                'id' => 645,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 102,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            372 => 
            array (
                'id' => 646,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 102,
                'allele_p_id' => 14,
                'allele_m_id' => 13,
                'locus_id' => 10,
            ),
            373 => 
            array (
                'id' => 647,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 103,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            374 => 
            array (
                'id' => 648,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 104,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            375 => 
            array (
                'id' => 649,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 105,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            376 => 
            array (
                'id' => 650,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 106,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            377 => 
            array (
                'id' => 651,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 107,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            378 => 
            array (
                'id' => 652,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 108,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            379 => 
            array (
                'id' => 653,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 103,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            380 => 
            array (
                'id' => 654,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 104,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            381 => 
            array (
                'id' => 655,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 105,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            382 => 
            array (
                'id' => 656,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 106,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            383 => 
            array (
                'id' => 657,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 107,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            384 => 
            array (
                'id' => 658,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 108,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            385 => 
            array (
                'id' => 659,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 104,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            386 => 
            array (
                'id' => 660,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 105,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            387 => 
            array (
                'id' => 661,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 103,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            388 => 
            array (
                'id' => 662,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 106,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            389 => 
            array (
                'id' => 663,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 107,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            390 => 
            array (
                'id' => 664,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 109,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            391 => 
            array (
                'id' => 665,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 109,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            392 => 
            array (
                'id' => 666,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 109,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            393 => 
            array (
                'id' => 667,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 110,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            394 => 
            array (
                'id' => 668,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 110,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            395 => 
            array (
                'id' => 669,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 103,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            396 => 
            array (
                'id' => 670,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 104,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            397 => 
            array (
                'id' => 671,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 105,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            398 => 
            array (
                'id' => 672,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 106,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            399 => 
            array (
                'id' => 673,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 107,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            400 => 
            array (
                'id' => 674,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 107,
                'allele_p_id' => 7,
                'allele_m_id' => 6,
                'locus_id' => 3,
            ),
            401 => 
            array (
                'id' => 675,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 111,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            402 => 
            array (
                'id' => 676,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 111,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            403 => 
            array (
                'id' => 677,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 111,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            404 => 
            array (
                'id' => 678,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 111,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            405 => 
            array (
                'id' => 679,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 113,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            406 => 
            array (
                'id' => 680,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 113,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            407 => 
            array (
                'id' => 681,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 113,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            408 => 
            array (
                'id' => 682,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 113,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            409 => 
            array (
                'id' => 683,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 113,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            410 => 
            array (
                'id' => 684,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 112,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            411 => 
            array (
                'id' => 685,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 112,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            412 => 
            array (
                'id' => 686,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 112,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            413 => 
            array (
                'id' => 687,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 112,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            414 => 
            array (
                'id' => 688,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 114,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            415 => 
            array (
                'id' => 689,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 114,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            416 => 
            array (
                'id' => 690,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 114,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            417 => 
            array (
                'id' => 691,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 114,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            418 => 
            array (
                'id' => 692,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 114,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            419 => 
            array (
                'id' => 693,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 112,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            420 => 
            array (
                'id' => 694,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 112,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            421 => 
            array (
                'id' => 695,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 115,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            422 => 
            array (
                'id' => 696,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 116,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            423 => 
            array (
                'id' => 697,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 117,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            424 => 
            array (
                'id' => 698,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 115,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            425 => 
            array (
                'id' => 699,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 116,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            426 => 
            array (
                'id' => 700,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 117,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            427 => 
            array (
                'id' => 701,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 115,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            428 => 
            array (
                'id' => 702,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 116,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            429 => 
            array (
                'id' => 703,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 117,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            430 => 
            array (
                'id' => 704,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 115,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            431 => 
            array (
                'id' => 705,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 118,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            432 => 
            array (
                'id' => 706,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 118,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            433 => 
            array (
                'id' => 707,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 118,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            434 => 
            array (
                'id' => 708,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 118,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            435 => 
            array (
                'id' => 709,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 118,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            436 => 
            array (
                'id' => 710,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 23,
                'allele_m_id' => 24,
                'locus_id' => 4,
            ),
            437 => 
            array (
                'id' => 711,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 24,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            438 => 
            array (
                'id' => 712,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            439 => 
            array (
                'id' => 713,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            440 => 
            array (
                'id' => 714,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            441 => 
            array (
                'id' => 715,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            442 => 
            array (
                'id' => 716,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            443 => 
            array (
                'id' => 717,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            444 => 
            array (
                'id' => 718,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 119,
                'allele_p_id' => 23,
                'allele_m_id' => 24,
                'locus_id' => 4,
            ),
            445 => 
            array (
                'id' => 719,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 28,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            446 => 
            array (
                'id' => 720,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 29,
                'allele_m_id' => 28,
                'locus_id' => 9,
            ),
            447 => 
            array (
                'id' => 721,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            448 => 
            array (
                'id' => 722,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            449 => 
            array (
                'id' => 723,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            450 => 
            array (
                'id' => 724,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 24,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            451 => 
            array (
                'id' => 725,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            452 => 
            array (
                'id' => 726,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 20,
                'allele_m_id' => 21,
                'locus_id' => 17,
            ),
            453 => 
            array (
                'id' => 727,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            454 => 
            array (
                'id' => 728,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 35,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            455 => 
            array (
                'id' => 729,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            456 => 
            array (
                'id' => 730,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 37,
                'allele_m_id' => 37,
                'locus_id' => 22,
            ),
            457 => 
            array (
                'id' => 731,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            458 => 
            array (
                'id' => 732,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            459 => 
            array (
                'id' => 733,
                'created_at' => '2021-01-05 17:35:16',
                'updated_at' => '2021-01-05 17:35:16',
                'animal_id' => 120,
                'allele_p_id' => 45,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            460 => 
            array (
                'id' => 734,
                'created_at' => '2021-01-05 17:40:08',
                'updated_at' => '2021-01-05 17:40:08',
                'animal_id' => 121,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            461 => 
            array (
                'id' => 735,
                'created_at' => '2021-01-05 17:40:08',
                'updated_at' => '2021-01-05 17:40:08',
                'animal_id' => 121,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            462 => 
            array (
                'id' => 736,
                'created_at' => '2021-01-05 17:40:08',
                'updated_at' => '2021-01-05 17:40:08',
                'animal_id' => 121,
                'allele_p_id' => 25,
                'allele_m_id' => 26,
                'locus_id' => 16,
            ),
            463 => 
            array (
                'id' => 737,
                'created_at' => '2021-01-05 17:40:08',
                'updated_at' => '2021-01-05 17:40:08',
                'animal_id' => 121,
                'allele_p_id' => 20,
                'allele_m_id' => 21,
                'locus_id' => 17,
            ),
            464 => 
            array (
                'id' => 738,
                'created_at' => '2021-01-05 17:40:08',
                'updated_at' => '2021-01-05 17:40:08',
                'animal_id' => 121,
                'allele_p_id' => 35,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            465 => 
            array (
                'id' => 739,
                'created_at' => '2021-01-05 17:40:08',
                'updated_at' => '2021-01-05 17:40:08',
                'animal_id' => 121,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            466 => 
            array (
                'id' => 740,
                'created_at' => '2021-01-05 17:40:09',
                'updated_at' => '2021-01-05 17:40:09',
                'animal_id' => 121,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            467 => 
            array (
                'id' => 741,
                'created_at' => '2021-01-05 17:40:09',
                'updated_at' => '2021-01-05 17:40:09',
                'animal_id' => 121,
                'allele_p_id' => 46,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            468 => 
            array (
                'id' => 742,
                'created_at' => '2021-01-05 17:45:05',
                'updated_at' => '2021-01-05 17:45:05',
                'animal_id' => 122,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            469 => 
            array (
                'id' => 743,
                'created_at' => '2021-01-05 17:45:05',
                'updated_at' => '2021-01-05 17:45:05',
                'animal_id' => 122,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            470 => 
            array (
                'id' => 744,
                'created_at' => '2021-01-05 17:45:05',
                'updated_at' => '2021-01-05 17:45:05',
                'animal_id' => 122,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            471 => 
            array (
                'id' => 745,
                'created_at' => '2021-01-05 17:45:06',
                'updated_at' => '2021-01-05 17:45:06',
                'animal_id' => 122,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            472 => 
            array (
                'id' => 746,
                'created_at' => '2021-01-05 17:45:06',
                'updated_at' => '2021-01-05 17:45:06',
                'animal_id' => 122,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            473 => 
            array (
                'id' => 747,
                'created_at' => '2021-01-05 20:45:27',
                'updated_at' => '2021-01-05 20:45:27',
                'animal_id' => 123,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            474 => 
            array (
                'id' => 748,
                'created_at' => '2021-01-05 20:45:27',
                'updated_at' => '2021-01-05 20:45:27',
                'animal_id' => 123,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            475 => 
            array (
                'id' => 749,
                'created_at' => '2021-01-05 20:45:27',
                'updated_at' => '2021-01-05 20:45:27',
                'animal_id' => 123,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            476 => 
            array (
                'id' => 750,
                'created_at' => '2021-01-05 20:45:27',
                'updated_at' => '2021-01-05 20:45:27',
                'animal_id' => 123,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            477 => 
            array (
                'id' => 751,
                'created_at' => '2021-01-05 20:45:27',
                'updated_at' => '2021-01-05 20:45:27',
                'animal_id' => 123,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            478 => 
            array (
                'id' => 752,
                'created_at' => '2021-01-05 20:45:27',
                'updated_at' => '2021-01-05 20:45:27',
                'animal_id' => 123,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            479 => 
            array (
                'id' => 753,
                'created_at' => '2021-01-05 20:47:01',
                'updated_at' => '2021-01-05 20:47:01',
                'animal_id' => 124,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            480 => 
            array (
                'id' => 754,
                'created_at' => '2021-01-05 20:47:01',
                'updated_at' => '2021-01-05 20:47:01',
                'animal_id' => 124,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            481 => 
            array (
                'id' => 755,
                'created_at' => '2021-01-05 20:47:01',
                'updated_at' => '2021-01-05 20:47:01',
                'animal_id' => 124,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            482 => 
            array (
                'id' => 756,
                'created_at' => '2021-01-05 20:47:01',
                'updated_at' => '2021-01-05 20:47:01',
                'animal_id' => 124,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            483 => 
            array (
                'id' => 757,
                'created_at' => '2021-01-05 20:47:01',
                'updated_at' => '2021-01-05 20:47:01',
                'animal_id' => 124,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            484 => 
            array (
                'id' => 758,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            485 => 
            array (
                'id' => 759,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            486 => 
            array (
                'id' => 760,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            487 => 
            array (
                'id' => 761,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 16,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            488 => 
            array (
                'id' => 762,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            489 => 
            array (
                'id' => 763,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            490 => 
            array (
                'id' => 764,
                'created_at' => '2021-01-05 21:00:29',
                'updated_at' => '2021-01-05 21:00:29',
                'animal_id' => 125,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            491 => 
            array (
                'id' => 765,
                'created_at' => '2021-01-05 21:07:24',
                'updated_at' => '2021-01-05 21:07:24',
                'animal_id' => 126,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            492 => 
            array (
                'id' => 766,
                'created_at' => '2021-01-05 21:07:24',
                'updated_at' => '2021-01-05 21:07:24',
                'animal_id' => 126,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            493 => 
            array (
                'id' => 767,
                'created_at' => '2021-01-05 21:07:24',
                'updated_at' => '2021-01-05 21:07:24',
                'animal_id' => 126,
                'allele_p_id' => 16,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            494 => 
            array (
                'id' => 768,
                'created_at' => '2021-01-05 21:07:24',
                'updated_at' => '2021-01-05 21:07:24',
                'animal_id' => 126,
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
            ),
            495 => 
            array (
                'id' => 769,
                'created_at' => '2021-01-06 10:50:47',
                'updated_at' => '2021-01-06 10:50:47',
                'animal_id' => 127,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            496 => 
            array (
                'id' => 770,
                'created_at' => '2021-01-06 10:50:47',
                'updated_at' => '2021-01-06 10:50:47',
                'animal_id' => 127,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            497 => 
            array (
                'id' => 771,
                'created_at' => '2021-01-06 10:50:47',
                'updated_at' => '2021-01-06 10:50:47',
                'animal_id' => 127,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            498 => 
            array (
                'id' => 772,
                'created_at' => '2021-01-06 10:50:47',
                'updated_at' => '2021-01-06 10:50:47',
                'animal_id' => 127,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            499 => 
            array (
                'id' => 773,
                'created_at' => '2021-01-06 10:50:47',
                'updated_at' => '2021-01-06 10:50:47',
                'animal_id' => 127,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
        ));
        \DB::table('genotypes')->insert(array (
            0 => 
            array (
                'id' => 774,
                'created_at' => '2021-01-06 10:50:47',
                'updated_at' => '2021-01-06 10:50:47',
                'animal_id' => 127,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            1 => 
            array (
                'id' => 775,
                'created_at' => '2021-01-06 10:52:56',
                'updated_at' => '2021-01-06 10:52:56',
                'animal_id' => 128,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            2 => 
            array (
                'id' => 776,
                'created_at' => '2021-01-06 10:52:56',
                'updated_at' => '2021-01-06 10:52:56',
                'animal_id' => 128,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            3 => 
            array (
                'id' => 777,
                'created_at' => '2021-01-06 10:52:56',
                'updated_at' => '2021-01-06 10:52:56',
                'animal_id' => 128,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            4 => 
            array (
                'id' => 778,
                'created_at' => '2021-01-06 10:52:56',
                'updated_at' => '2021-01-06 10:52:56',
                'animal_id' => 128,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            5 => 
            array (
                'id' => 779,
                'created_at' => '2021-01-06 10:52:56',
                'updated_at' => '2021-01-06 10:52:56',
                'animal_id' => 128,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            6 => 
            array (
                'id' => 780,
                'created_at' => '2021-01-06 10:52:56',
                'updated_at' => '2021-01-06 10:52:56',
                'animal_id' => 128,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            7 => 
            array (
                'id' => 781,
                'created_at' => '2021-01-06 10:56:07',
                'updated_at' => '2021-01-06 10:56:07',
                'animal_id' => 129,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            8 => 
            array (
                'id' => 782,
                'created_at' => '2021-01-06 10:56:07',
                'updated_at' => '2021-01-06 10:56:07',
                'animal_id' => 129,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            9 => 
            array (
                'id' => 783,
                'created_at' => '2021-01-06 10:56:07',
                'updated_at' => '2021-01-06 10:56:07',
                'animal_id' => 129,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            10 => 
            array (
                'id' => 784,
                'created_at' => '2021-01-06 10:56:07',
                'updated_at' => '2021-01-06 10:56:07',
                'animal_id' => 129,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            11 => 
            array (
                'id' => 785,
                'created_at' => '2021-01-06 10:56:07',
                'updated_at' => '2021-01-06 10:56:07',
                'animal_id' => 129,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            12 => 
            array (
                'id' => 786,
                'created_at' => '2021-01-06 10:56:07',
                'updated_at' => '2021-01-06 10:56:07',
                'animal_id' => 129,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            13 => 
            array (
                'id' => 787,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 129,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            14 => 
            array (
                'id' => 788,
                'created_at' => '2021-01-06 11:26:58',
                'updated_at' => '2021-01-06 11:26:58',
                'animal_id' => 130,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            15 => 
            array (
                'id' => 789,
                'created_at' => '2021-01-06 11:26:58',
                'updated_at' => '2021-01-06 11:26:58',
                'animal_id' => 130,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            16 => 
            array (
                'id' => 790,
                'created_at' => '2021-01-06 11:26:58',
                'updated_at' => '2021-01-06 11:26:58',
                'animal_id' => 130,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            17 => 
            array (
                'id' => 791,
                'created_at' => '2021-01-06 11:26:58',
                'updated_at' => '2021-01-06 11:26:58',
                'animal_id' => 130,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            18 => 
            array (
                'id' => 792,
                'created_at' => '2021-01-06 11:26:58',
                'updated_at' => '2021-01-06 11:26:58',
                'animal_id' => 130,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            19 => 
            array (
                'id' => 793,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            20 => 
            array (
                'id' => 794,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            21 => 
            array (
                'id' => 795,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 117,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            22 => 
            array (
                'id' => 796,
                'created_at' => '2021-01-06 12:53:31',
                'updated_at' => '2021-01-06 12:53:31',
                'animal_id' => 131,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            23 => 
            array (
                'id' => 797,
                'created_at' => '2021-01-06 12:53:31',
                'updated_at' => '2021-01-06 12:53:31',
                'animal_id' => 131,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            24 => 
            array (
                'id' => 798,
                'created_at' => '2021-01-06 12:53:31',
                'updated_at' => '2021-01-06 12:53:31',
                'animal_id' => 131,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            25 => 
            array (
                'id' => 799,
                'created_at' => '2021-01-06 12:53:31',
                'updated_at' => '2021-01-06 12:53:31',
                'animal_id' => 131,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            26 => 
            array (
                'id' => 800,
                'created_at' => '2021-01-06 12:53:31',
                'updated_at' => '2021-01-06 12:53:31',
                'animal_id' => 131,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            27 => 
            array (
                'id' => 801,
                'created_at' => '2021-01-06 13:03:50',
                'updated_at' => '2021-01-06 13:03:50',
                'animal_id' => 132,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            28 => 
            array (
                'id' => 802,
                'created_at' => '2021-01-06 13:03:50',
                'updated_at' => '2021-01-06 13:03:50',
                'animal_id' => 132,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            29 => 
            array (
                'id' => 803,
                'created_at' => '2021-01-06 13:03:50',
                'updated_at' => '2021-01-06 13:03:50',
                'animal_id' => 132,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            30 => 
            array (
                'id' => 804,
                'created_at' => '2021-01-06 13:03:50',
                'updated_at' => '2021-01-06 13:03:50',
                'animal_id' => 132,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            31 => 
            array (
                'id' => 805,
                'created_at' => '2021-01-06 13:03:50',
                'updated_at' => '2021-01-06 13:03:50',
                'animal_id' => 132,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            32 => 
            array (
                'id' => 806,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            33 => 
            array (
                'id' => 807,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            34 => 
            array (
                'id' => 808,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            35 => 
            array (
                'id' => 809,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            36 => 
            array (
                'id' => 810,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            37 => 
            array (
                'id' => 811,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            38 => 
            array (
                'id' => 812,
                'created_at' => '2021-01-06 13:05:58',
                'updated_at' => '2021-01-06 13:05:58',
                'animal_id' => 133,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            39 => 
            array (
                'id' => 813,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 133,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            40 => 
            array (
                'id' => 818,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            41 => 
            array (
                'id' => 819,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            42 => 
            array (
                'id' => 820,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            43 => 
            array (
                'id' => 821,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            44 => 
            array (
                'id' => 822,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            45 => 
            array (
                'id' => 823,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            46 => 
            array (
                'id' => 824,
                'created_at' => '2021-01-06 15:47:27',
                'updated_at' => '2021-01-06 15:47:27',
                'animal_id' => 135,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            47 => 
            array (
                'id' => 825,
                'created_at' => '2021-01-06 15:50:44',
                'updated_at' => '2021-01-06 15:50:44',
                'animal_id' => 136,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            48 => 
            array (
                'id' => 826,
                'created_at' => '2021-01-06 15:50:44',
                'updated_at' => '2021-01-06 15:50:44',
                'animal_id' => 136,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            49 => 
            array (
                'id' => 827,
                'created_at' => '2021-01-06 15:50:44',
                'updated_at' => '2021-01-06 15:50:44',
                'animal_id' => 136,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            50 => 
            array (
                'id' => 828,
                'created_at' => '2021-01-06 15:50:44',
                'updated_at' => '2021-01-06 15:50:44',
                'animal_id' => 136,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            51 => 
            array (
                'id' => 829,
                'created_at' => '2021-01-06 15:50:44',
                'updated_at' => '2021-01-06 15:50:44',
                'animal_id' => 136,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            52 => 
            array (
                'id' => 830,
                'created_at' => '2021-01-06 15:50:44',
                'updated_at' => '2021-01-06 15:50:44',
                'animal_id' => 136,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            53 => 
            array (
                'id' => 845,
                'created_at' => '2021-01-06 15:53:54',
                'updated_at' => '2021-01-06 15:53:54',
                'animal_id' => 139,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            54 => 
            array (
                'id' => 846,
                'created_at' => '2021-01-06 15:53:54',
                'updated_at' => '2021-01-06 15:53:54',
                'animal_id' => 139,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            55 => 
            array (
                'id' => 847,
                'created_at' => '2021-01-06 15:53:54',
                'updated_at' => '2021-01-06 15:53:54',
                'animal_id' => 139,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            56 => 
            array (
                'id' => 848,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            57 => 
            array (
                'id' => 849,
                'created_at' => '2021-01-21 10:31:45',
                'updated_at' => '2021-01-21 10:31:45',
                'animal_id' => 140,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            58 => 
            array (
                'id' => 850,
                'created_at' => '2021-01-21 10:31:45',
                'updated_at' => '2021-01-21 10:31:45',
                'animal_id' => 140,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            59 => 
            array (
                'id' => 851,
                'created_at' => '2021-01-21 10:31:45',
                'updated_at' => '2021-01-21 10:31:45',
                'animal_id' => 140,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            60 => 
            array (
                'id' => 852,
                'created_at' => '2021-01-21 10:31:45',
                'updated_at' => '2021-01-21 10:31:45',
                'animal_id' => 140,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            61 => 
            array (
                'id' => 853,
                'created_at' => '2021-01-21 10:31:45',
                'updated_at' => '2021-01-21 10:31:45',
                'animal_id' => 140,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            62 => 
            array (
                'id' => 854,
                'created_at' => '2021-01-21 10:31:45',
                'updated_at' => '2021-01-21 10:31:45',
                'animal_id' => 140,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            63 => 
            array (
                'id' => 855,
                'created_at' => '2021-01-21 10:33:14',
                'updated_at' => '2021-01-21 10:33:14',
                'animal_id' => 141,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            64 => 
            array (
                'id' => 856,
                'created_at' => '2021-01-21 10:33:14',
                'updated_at' => '2021-01-21 10:33:14',
                'animal_id' => 141,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            65 => 
            array (
                'id' => 857,
                'created_at' => '2021-01-21 10:33:14',
                'updated_at' => '2021-01-21 10:33:14',
                'animal_id' => 141,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            66 => 
            array (
                'id' => 858,
                'created_at' => '2021-01-21 10:33:14',
                'updated_at' => '2021-01-21 10:33:14',
                'animal_id' => 141,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            67 => 
            array (
                'id' => 859,
                'created_at' => '2021-01-21 10:33:14',
                'updated_at' => '2021-01-21 10:33:14',
                'animal_id' => 141,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            68 => 
            array (
                'id' => 860,
                'created_at' => '2021-01-21 10:33:14',
                'updated_at' => '2021-01-21 10:33:14',
                'animal_id' => 141,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            69 => 
            array (
                'id' => 861,
                'created_at' => '2021-01-21 10:34:48',
                'updated_at' => '2021-01-21 10:34:48',
                'animal_id' => 142,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            70 => 
            array (
                'id' => 862,
                'created_at' => '2021-01-21 10:34:48',
                'updated_at' => '2021-01-21 10:34:48',
                'animal_id' => 142,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            71 => 
            array (
                'id' => 863,
                'created_at' => '2021-01-21 10:34:48',
                'updated_at' => '2021-01-21 10:34:48',
                'animal_id' => 142,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            72 => 
            array (
                'id' => 864,
                'created_at' => '2021-01-21 10:34:48',
                'updated_at' => '2021-01-21 10:34:48',
                'animal_id' => 142,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            73 => 
            array (
                'id' => 865,
                'created_at' => '2021-01-21 10:34:48',
                'updated_at' => '2021-01-21 10:34:48',
                'animal_id' => 142,
                'allele_p_id' => 44,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            74 => 
            array (
                'id' => 866,
                'created_at' => '2021-01-21 10:36:11',
                'updated_at' => '2021-01-21 10:36:11',
                'animal_id' => 143,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            75 => 
            array (
                'id' => 867,
                'created_at' => '2021-01-21 10:36:11',
                'updated_at' => '2021-01-21 10:36:11',
                'animal_id' => 143,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            76 => 
            array (
                'id' => 868,
                'created_at' => '2021-01-21 10:36:11',
                'updated_at' => '2021-01-21 10:36:11',
                'animal_id' => 143,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            77 => 
            array (
                'id' => 869,
                'created_at' => '2021-01-21 10:36:11',
                'updated_at' => '2021-01-21 10:36:11',
                'animal_id' => 143,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            78 => 
            array (
                'id' => 870,
                'created_at' => '2021-01-21 10:39:15',
                'updated_at' => '2021-01-21 10:39:15',
                'animal_id' => 144,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            79 => 
            array (
                'id' => 871,
                'created_at' => '2021-01-21 10:39:15',
                'updated_at' => '2021-01-21 10:39:15',
                'animal_id' => 144,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            80 => 
            array (
                'id' => 872,
                'created_at' => '2021-01-21 10:39:15',
                'updated_at' => '2021-01-21 10:39:15',
                'animal_id' => 144,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            81 => 
            array (
                'id' => 873,
                'created_at' => '2021-01-21 10:39:15',
                'updated_at' => '2021-01-21 10:39:15',
                'animal_id' => 144,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            82 => 
            array (
                'id' => 874,
                'created_at' => '2021-01-21 10:39:15',
                'updated_at' => '2021-01-21 10:39:15',
                'animal_id' => 144,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            83 => 
            array (
                'id' => 875,
                'created_at' => '2021-01-21 10:39:15',
                'updated_at' => '2021-01-21 10:39:15',
                'animal_id' => 144,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            84 => 
            array (
                'id' => 876,
                'created_at' => '2021-01-21 10:41:28',
                'updated_at' => '2021-01-21 10:41:28',
                'animal_id' => 145,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            85 => 
            array (
                'id' => 877,
                'created_at' => '2021-01-21 10:41:28',
                'updated_at' => '2021-01-21 10:41:28',
                'animal_id' => 145,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            86 => 
            array (
                'id' => 878,
                'created_at' => '2021-01-21 10:41:28',
                'updated_at' => '2021-01-21 10:41:28',
                'animal_id' => 145,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            87 => 
            array (
                'id' => 879,
                'created_at' => '2021-01-21 10:41:28',
                'updated_at' => '2021-01-21 10:41:28',
                'animal_id' => 145,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            88 => 
            array (
                'id' => 880,
                'created_at' => '2021-01-21 10:41:28',
                'updated_at' => '2021-01-21 10:41:28',
                'animal_id' => 145,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            89 => 
            array (
                'id' => 881,
                'created_at' => '2021-01-21 10:41:28',
                'updated_at' => '2021-01-21 10:41:28',
                'animal_id' => 145,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            90 => 
            array (
                'id' => 882,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            91 => 
            array (
                'id' => 883,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            92 => 
            array (
                'id' => 884,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            93 => 
            array (
                'id' => 885,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            94 => 
            array (
                'id' => 886,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            95 => 
            array (
                'id' => 887,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            96 => 
            array (
                'id' => 888,
                'created_at' => '2021-01-21 10:43:15',
                'updated_at' => '2021-01-21 10:43:15',
                'animal_id' => 146,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            97 => 
            array (
                'id' => 889,
                'created_at' => '2021-01-21 10:45:30',
                'updated_at' => '2021-01-21 10:45:30',
                'animal_id' => 147,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            98 => 
            array (
                'id' => 890,
                'created_at' => '2021-01-21 10:45:30',
                'updated_at' => '2021-01-21 10:45:30',
                'animal_id' => 147,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            99 => 
            array (
                'id' => 891,
                'created_at' => '2021-01-21 10:45:30',
                'updated_at' => '2021-01-21 10:45:30',
                'animal_id' => 147,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            100 => 
            array (
                'id' => 892,
                'created_at' => '2021-01-21 10:45:30',
                'updated_at' => '2021-01-21 10:45:30',
                'animal_id' => 147,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            101 => 
            array (
                'id' => 893,
                'created_at' => '2021-01-21 10:45:30',
                'updated_at' => '2021-01-21 10:45:30',
                'animal_id' => 147,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            102 => 
            array (
                'id' => 894,
                'created_at' => '2021-01-21 10:45:30',
                'updated_at' => '2021-01-21 10:45:30',
                'animal_id' => 147,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            103 => 
            array (
                'id' => 895,
                'created_at' => '2021-01-21 10:47:57',
                'updated_at' => '2021-01-21 10:47:57',
                'animal_id' => 148,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            104 => 
            array (
                'id' => 896,
                'created_at' => '2021-01-21 10:47:57',
                'updated_at' => '2021-01-21 10:47:57',
                'animal_id' => 148,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            105 => 
            array (
                'id' => 897,
                'created_at' => '2021-01-21 10:47:57',
                'updated_at' => '2021-01-21 10:47:57',
                'animal_id' => 148,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            106 => 
            array (
                'id' => 898,
                'created_at' => '2021-01-21 10:47:57',
                'updated_at' => '2021-01-21 10:47:57',
                'animal_id' => 148,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            107 => 
            array (
                'id' => 899,
                'created_at' => '2021-01-21 10:50:10',
                'updated_at' => '2021-01-21 10:50:10',
                'animal_id' => 149,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            108 => 
            array (
                'id' => 900,
                'created_at' => '2021-01-21 10:50:10',
                'updated_at' => '2021-01-21 10:50:10',
                'animal_id' => 149,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            109 => 
            array (
                'id' => 901,
                'created_at' => '2021-01-21 10:50:10',
                'updated_at' => '2021-01-21 10:50:10',
                'animal_id' => 149,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            110 => 
            array (
                'id' => 902,
                'created_at' => '2021-01-21 10:50:10',
                'updated_at' => '2021-01-21 10:50:10',
                'animal_id' => 149,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            111 => 
            array (
                'id' => 903,
                'created_at' => '2021-01-21 10:51:26',
                'updated_at' => '2021-01-21 10:51:26',
                'animal_id' => 150,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            112 => 
            array (
                'id' => 904,
                'created_at' => '2021-01-21 10:51:26',
                'updated_at' => '2021-01-21 10:51:26',
                'animal_id' => 150,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            113 => 
            array (
                'id' => 905,
                'created_at' => '2021-01-21 10:51:26',
                'updated_at' => '2021-01-21 10:51:26',
                'animal_id' => 150,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            114 => 
            array (
                'id' => 906,
                'created_at' => '2021-01-21 10:51:26',
                'updated_at' => '2021-01-21 10:51:26',
                'animal_id' => 150,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            115 => 
            array (
                'id' => 907,
                'created_at' => '2021-01-21 10:51:26',
                'updated_at' => '2021-01-21 10:51:26',
                'animal_id' => 150,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            116 => 
            array (
                'id' => 908,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            117 => 
            array (
                'id' => 909,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            118 => 
            array (
                'id' => 910,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            119 => 
            array (
                'id' => 911,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            120 => 
            array (
                'id' => 912,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            121 => 
            array (
                'id' => 913,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            122 => 
            array (
                'id' => 914,
                'created_at' => '2021-01-21 10:59:04',
                'updated_at' => '2021-01-21 10:59:04',
                'animal_id' => 151,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            123 => 
            array (
                'id' => 915,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            124 => 
            array (
                'id' => 916,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            125 => 
            array (
                'id' => 917,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            126 => 
            array (
                'id' => 918,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            127 => 
            array (
                'id' => 919,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            128 => 
            array (
                'id' => 920,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            129 => 
            array (
                'id' => 921,
                'created_at' => '2021-01-21 11:00:58',
                'updated_at' => '2021-01-21 11:00:58',
                'animal_id' => 152,
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
            ),
            130 => 
            array (
                'id' => 922,
                'created_at' => '2021-01-21 11:04:28',
                'updated_at' => '2021-01-21 11:04:28',
                'animal_id' => 153,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            131 => 
            array (
                'id' => 923,
                'created_at' => '2021-01-21 11:04:28',
                'updated_at' => '2021-01-21 11:04:28',
                'animal_id' => 153,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            132 => 
            array (
                'id' => 924,
                'created_at' => '2021-01-21 11:04:28',
                'updated_at' => '2021-01-21 11:04:28',
                'animal_id' => 153,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            133 => 
            array (
                'id' => 925,
                'created_at' => '2021-04-27 17:23:20',
                'updated_at' => '2021-04-27 17:23:20',
                'animal_id' => 154,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            134 => 
            array (
                'id' => 926,
                'created_at' => '2021-04-27 17:23:20',
                'updated_at' => '2021-04-27 17:23:20',
                'animal_id' => 154,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            135 => 
            array (
                'id' => 927,
                'created_at' => '2021-04-27 17:23:20',
                'updated_at' => '2021-04-27 17:23:20',
                'animal_id' => 154,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            136 => 
            array (
                'id' => 928,
                'created_at' => '2021-04-27 17:23:20',
                'updated_at' => '2021-04-27 17:23:20',
                'animal_id' => 154,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            137 => 
            array (
                'id' => 929,
                'created_at' => '2021-04-27 17:23:20',
                'updated_at' => '2021-04-27 17:23:20',
                'animal_id' => 154,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            138 => 
            array (
                'id' => 930,
                'created_at' => '2021-04-27 17:23:21',
                'updated_at' => '2021-04-27 17:23:21',
                'animal_id' => 154,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            139 => 
            array (
                'id' => 931,
                'created_at' => '2021-04-27 17:23:21',
                'updated_at' => '2021-04-27 17:23:21',
                'animal_id' => 154,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            140 => 
            array (
                'id' => 932,
                'created_at' => '2021-04-27 17:23:21',
                'updated_at' => '2021-04-27 17:23:21',
                'animal_id' => 154,
                'allele_p_id' => 45,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            141 => 
            array (
                'id' => 933,
                'created_at' => '2021-04-27 20:21:52',
                'updated_at' => '2021-04-27 20:21:52',
                'animal_id' => 155,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            142 => 
            array (
                'id' => 934,
                'created_at' => '2021-04-27 20:21:52',
                'updated_at' => '2021-04-27 20:21:52',
                'animal_id' => 155,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            143 => 
            array (
                'id' => 935,
                'created_at' => '2021-04-27 20:21:52',
                'updated_at' => '2021-04-27 20:21:52',
                'animal_id' => 155,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            144 => 
            array (
                'id' => 936,
                'created_at' => '2021-04-27 20:21:52',
                'updated_at' => '2021-04-27 20:21:52',
                'animal_id' => 155,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            145 => 
            array (
                'id' => 937,
                'created_at' => '2021-04-27 20:21:52',
                'updated_at' => '2021-04-27 20:21:52',
                'animal_id' => 155,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
        ));
        
        
    }
}