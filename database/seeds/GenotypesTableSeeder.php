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
                'allele_p_id' => 7,
                'allele_m_id' => 8,
                'locus_id' => 3,
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
                'allele_m_id' => 7,
                'locus_id' => 3,
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
                'allele_m_id' => 7,
                'locus_id' => 3,
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
                'allele_p_id' => 8,
                'allele_m_id' => 17,
                'locus_id' => 3,
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
                'allele_m_id' => 7,
                'locus_id' => 3,
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
                'allele_p_id' => 3,
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
                'allele_m_id' => 7,
                'locus_id' => 3,
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
                'allele_p_id' => 7,
                'allele_m_id' => 8,
                'locus_id' => 3,
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
                'id' => 271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            116 => 
            array (
                'id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            117 => 
            array (
                'id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            118 => 
            array (
                'id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            119 => 
            array (
                'id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            120 => 
            array (
                'id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            121 => 
            array (
                'id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 36,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            122 => 
            array (
                'id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 11,
                'allele_m_id' => 12,
                'locus_id' => 15,
            ),
            123 => 
            array (
                'id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 36,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            124 => 
            array (
                'id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 34,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            125 => 
            array (
                'id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 34,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            126 => 
            array (
                'id' => 282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            127 => 
            array (
                'id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            128 => 
            array (
                'id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 39,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            129 => 
            array (
                'id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 8,
                'allele_m_id' => 8,
                'locus_id' => 3,
            ),
            130 => 
            array (
                'id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 8,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            131 => 
            array (
                'id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 8,
                'allele_m_id' => 6,
                'locus_id' => 3,
            ),
            132 => 
            array (
                'id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            133 => 
            array (
                'id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            134 => 
            array (
                'id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 24,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            135 => 
            array (
                'id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            136 => 
            array (
                'id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            137 => 
            array (
                'id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            138 => 
            array (
                'id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            139 => 
            array (
                'id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            140 => 
            array (
                'id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 44,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            141 => 
            array (
                'id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 45,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            142 => 
            array (
                'id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            143 => 
            array (
                'id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            144 => 
            array (
                'id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 48,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            145 => 
            array (
                'id' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 49,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            146 => 
            array (
                'id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            147 => 
            array (
                'id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            148 => 
            array (
                'id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            149 => 
            array (
                'id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            150 => 
            array (
                'id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 44,
                'allele_p_id' => 3,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            151 => 
            array (
                'id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 45,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            152 => 
            array (
                'id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            153 => 
            array (
                'id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            154 => 
            array (
                'id' => 311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 48,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            155 => 
            array (
                'id' => 312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 49,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            156 => 
            array (
                'id' => 313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            157 => 
            array (
                'id' => 314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            158 => 
            array (
                'id' => 315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 42,
                'allele_p_id' => 22,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            159 => 
            array (
                'id' => 316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            160 => 
            array (
                'id' => 317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 44,
                'allele_p_id' => 9,
                'allele_m_id' => 10,
                'locus_id' => 13,
            ),
            161 => 
            array (
                'id' => 318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 45,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            162 => 
            array (
                'id' => 319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            163 => 
            array (
                'id' => 320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 7,
                'allele_m_id' => 17,
                'locus_id' => 3,
            ),
            164 => 
            array (
                'id' => 321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 48,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            165 => 
            array (
                'id' => 322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 49,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            166 => 
            array (
                'id' => 323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            167 => 
            array (
                'id' => 324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 51,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            168 => 
            array (
                'id' => 325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 51,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            169 => 
            array (
                'id' => 326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 51,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            170 => 
            array (
                'id' => 327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 52,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            171 => 
            array (
                'id' => 328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 53,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            172 => 
            array (
                'id' => 329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            173 => 
            array (
                'id' => 330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 52,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            174 => 
            array (
                'id' => 331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 53,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            175 => 
            array (
                'id' => 332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            176 => 
            array (
                'id' => 333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 52,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            177 => 
            array (
                'id' => 334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 53,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            178 => 
            array (
                'id' => 335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            179 => 
            array (
                'id' => 336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 43,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            180 => 
            array (
                'id' => 337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 40,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            181 => 
            array (
                'id' => 338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            182 => 
            array (
                'id' => 339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            183 => 
            array (
                'id' => 340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            184 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            185 => 
            array (
                'id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            186 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            187 => 
            array (
                'id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            188 => 
            array (
                'id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            189 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            190 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            191 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            192 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            193 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            194 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            195 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            196 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            197 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            198 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            199 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            200 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            201 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            202 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            203 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            204 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            205 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            206 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            207 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            208 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            209 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            210 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            211 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            212 => 
            array (
                'id' => 369,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 55,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            213 => 
            array (
                'id' => 370,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 55,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            214 => 
            array (
                'id' => 371,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 55,
                'allele_p_id' => 29,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            215 => 
            array (
                'id' => 372,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 55,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            216 => 
            array (
                'id' => 373,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 55,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            217 => 
            array (
                'id' => 374,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 56,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            218 => 
            array (
                'id' => 375,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 56,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            219 => 
            array (
                'id' => 376,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 56,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            220 => 
            array (
                'id' => 377,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 56,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            221 => 
            array (
                'id' => 378,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 56,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            222 => 
            array (
                'id' => 379,
                'created_at' => '2020-05-22 20:52:38',
                'updated_at' => '2020-05-22 20:52:38',
                'animal_id' => 56,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            223 => 
            array (
                'id' => 380,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 57,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            224 => 
            array (
                'id' => 381,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 57,
                'allele_p_id' => 16,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            225 => 
            array (
                'id' => 382,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 57,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            226 => 
            array (
                'id' => 383,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 57,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            227 => 
            array (
                'id' => 384,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 57,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            228 => 
            array (
                'id' => 385,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 58,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            229 => 
            array (
                'id' => 386,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 58,
                'allele_p_id' => 31,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            230 => 
            array (
                'id' => 387,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
                'animal_id' => 58,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            231 => 
            array (
                'id' => 388,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 36,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            232 => 
            array (
                'id' => 389,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 34,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            233 => 
            array (
                'id' => 390,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            234 => 
            array (
                'id' => 391,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            235 => 
            array (
                'id' => 392,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 12,
                'allele_m_id' => 11,
                'locus_id' => 15,
            ),
            236 => 
            array (
                'id' => 393,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            237 => 
            array (
                'id' => 394,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            238 => 
            array (
                'id' => 395,
                'created_at' => '2020-05-22 20:52:41',
                'updated_at' => '2020-05-22 20:52:41',
                'animal_id' => 59,
                'allele_p_id' => 7,
                'allele_m_id' => 8,
                'locus_id' => 3,
            ),
            239 => 
            array (
                'id' => 396,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            240 => 
            array (
                'id' => 397,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 29,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            241 => 
            array (
                'id' => 398,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            242 => 
            array (
                'id' => 399,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 37,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            243 => 
            array (
                'id' => 400,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            244 => 
            array (
                'id' => 401,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            245 => 
            array (
                'id' => 402,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 60,
                'allele_p_id' => 7,
                'allele_m_id' => 8,
                'locus_id' => 3,
            ),
            246 => 
            array (
                'id' => 403,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 61,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            247 => 
            array (
                'id' => 404,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 61,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            248 => 
            array (
                'id' => 405,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 61,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            249 => 
            array (
                'id' => 406,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 61,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            250 => 
            array (
                'id' => 407,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 61,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            251 => 
            array (
                'id' => 408,
                'created_at' => '2020-05-22 20:52:43',
                'updated_at' => '2020-05-22 20:52:43',
                'animal_id' => 61,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            252 => 
            array (
                'id' => 409,
                'created_at' => '2020-05-22 20:52:44',
                'updated_at' => '2020-05-22 20:52:44',
                'animal_id' => 62,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            253 => 
            array (
                'id' => 410,
                'created_at' => '2020-05-22 20:52:44',
                'updated_at' => '2020-05-22 20:52:44',
                'animal_id' => 62,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            254 => 
            array (
                'id' => 411,
                'created_at' => '2020-05-22 20:52:44',
                'updated_at' => '2020-05-22 20:52:44',
                'animal_id' => 62,
                'allele_p_id' => 38,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            255 => 
            array (
                'id' => 412,
                'created_at' => '2020-05-22 20:52:44',
                'updated_at' => '2020-05-22 20:52:44',
                'animal_id' => 62,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            256 => 
            array (
                'id' => 413,
                'created_at' => '2020-05-22 20:52:44',
                'updated_at' => '2020-05-22 20:52:44',
                'animal_id' => 62,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            257 => 
            array (
                'id' => 414,
                'created_at' => '2020-05-22 20:52:44',
                'updated_at' => '2020-05-22 20:52:44',
                'animal_id' => 62,
                'allele_p_id' => 8,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            258 => 
            array (
                'id' => 415,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 63,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            259 => 
            array (
                'id' => 416,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 63,
                'allele_p_id' => 38,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            260 => 
            array (
                'id' => 417,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 63,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            261 => 
            array (
                'id' => 418,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 64,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            262 => 
            array (
                'id' => 419,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 64,
                'allele_p_id' => 29,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            263 => 
            array (
                'id' => 420,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 64,
                'allele_p_id' => 16,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            264 => 
            array (
                'id' => 421,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 64,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            265 => 
            array (
                'id' => 422,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 64,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            266 => 
            array (
                'id' => 423,
                'created_at' => '2020-05-22 20:52:45',
                'updated_at' => '2020-05-22 20:52:45',
                'animal_id' => 64,
                'allele_p_id' => 7,
                'allele_m_id' => 17,
                'locus_id' => 3,
            ),
            267 => 
            array (
                'id' => 424,
                'created_at' => '2020-05-22 20:52:53',
                'updated_at' => '2020-05-22 20:52:53',
                'animal_id' => 65,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            268 => 
            array (
                'id' => 425,
                'created_at' => '2020-05-22 20:52:53',
                'updated_at' => '2020-05-22 20:52:53',
                'animal_id' => 65,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            269 => 
            array (
                'id' => 426,
                'created_at' => '2020-05-22 20:52:53',
                'updated_at' => '2020-05-22 20:52:53',
                'animal_id' => 65,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            270 => 
            array (
                'id' => 427,
                'created_at' => '2020-05-22 20:52:53',
                'updated_at' => '2020-05-22 20:52:53',
                'animal_id' => 65,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            271 => 
            array (
                'id' => 428,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 66,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            272 => 
            array (
                'id' => 429,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 66,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            273 => 
            array (
                'id' => 430,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 66,
                'allele_p_id' => 29,
                'allele_m_id' => 27,
                'locus_id' => 9,
            ),
            274 => 
            array (
                'id' => 431,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 66,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            275 => 
            array (
                'id' => 432,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 66,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            276 => 
            array (
                'id' => 433,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 67,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            277 => 
            array (
                'id' => 434,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 67,
                'allele_p_id' => 31,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            278 => 
            array (
                'id' => 435,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 67,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            279 => 
            array (
                'id' => 436,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 67,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            280 => 
            array (
                'id' => 437,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 67,
                'allele_p_id' => 33,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            281 => 
            array (
                'id' => 438,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 67,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            282 => 
            array (
                'id' => 439,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 68,
                'allele_p_id' => 25,
                'allele_m_id' => 26,
                'locus_id' => 16,
            ),
            283 => 
            array (
                'id' => 440,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 68,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            284 => 
            array (
                'id' => 441,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 68,
                'allele_p_id' => 34,
                'allele_m_id' => 34,
                'locus_id' => 19,
            ),
            285 => 
            array (
                'id' => 442,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 68,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            286 => 
            array (
                'id' => 443,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 68,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            287 => 
            array (
                'id' => 444,
                'created_at' => '2020-05-22 20:52:56',
                'updated_at' => '2020-05-22 20:52:56',
                'animal_id' => 68,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            288 => 
            array (
                'id' => 445,
                'created_at' => '2020-05-22 20:52:57',
                'updated_at' => '2020-05-22 20:52:57',
                'animal_id' => 69,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            289 => 
            array (
                'id' => 446,
                'created_at' => '2020-05-22 20:52:57',
                'updated_at' => '2020-05-22 20:52:57',
                'animal_id' => 69,
                'allele_p_id' => 16,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            290 => 
            array (
                'id' => 447,
                'created_at' => '2020-05-22 20:52:57',
                'updated_at' => '2020-05-22 20:52:57',
                'animal_id' => 69,
                'allele_p_id' => 38,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            291 => 
            array (
                'id' => 448,
                'created_at' => '2020-05-22 20:52:57',
                'updated_at' => '2020-05-22 20:52:57',
                'animal_id' => 69,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            292 => 
            array (
                'id' => 449,
                'created_at' => '2020-05-22 20:52:57',
                'updated_at' => '2020-05-22 20:52:57',
                'animal_id' => 69,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            293 => 
            array (
                'id' => 450,
                'created_at' => '2020-05-22 20:55:08',
                'updated_at' => '2020-05-22 20:55:08',
                'animal_id' => 70,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            294 => 
            array (
                'id' => 451,
                'created_at' => '2020-05-22 20:55:08',
                'updated_at' => '2020-05-22 20:55:08',
                'animal_id' => 70,
                'allele_p_id' => 23,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            295 => 
            array (
                'id' => 452,
                'created_at' => '2020-05-22 20:55:08',
                'updated_at' => '2020-05-22 20:55:08',
                'animal_id' => 70,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            296 => 
            array (
                'id' => 453,
                'created_at' => '2020-05-22 20:55:08',
                'updated_at' => '2020-05-22 20:55:08',
                'animal_id' => 70,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            297 => 
            array (
                'id' => 454,
                'created_at' => '2020-05-22 20:55:08',
                'updated_at' => '2020-05-22 20:55:08',
                'animal_id' => 70,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            298 => 
            array (
                'id' => 455,
                'created_at' => '2020-05-22 20:55:11',
                'updated_at' => '2020-05-22 20:55:11',
                'animal_id' => 71,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            299 => 
            array (
                'id' => 456,
                'created_at' => '2020-05-22 20:55:11',
                'updated_at' => '2020-05-22 20:55:11',
                'animal_id' => 71,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            300 => 
            array (
                'id' => 457,
                'created_at' => '2020-05-22 20:55:11',
                'updated_at' => '2020-05-22 20:55:11',
                'animal_id' => 71,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            301 => 
            array (
                'id' => 458,
                'created_at' => '2020-05-22 20:55:11',
                'updated_at' => '2020-05-22 20:55:11',
                'animal_id' => 71,
                'allele_p_id' => 37,
                'allele_m_id' => 36,
                'locus_id' => 22,
            ),
            302 => 
            array (
                'id' => 459,
                'created_at' => '2020-05-22 20:55:11',
                'updated_at' => '2020-05-22 20:55:11',
                'animal_id' => 71,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            303 => 
            array (
                'id' => 460,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            304 => 
            array (
                'id' => 461,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 27,
                'allele_m_id' => 29,
                'locus_id' => 9,
            ),
            305 => 
            array (
                'id' => 462,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            306 => 
            array (
                'id' => 463,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 31,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            307 => 
            array (
                'id' => 464,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 23,
                'allele_m_id' => 22,
                'locus_id' => 4,
            ),
            308 => 
            array (
                'id' => 465,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            309 => 
            array (
                'id' => 466,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 72,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            310 => 
            array (
                'id' => 467,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 73,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            311 => 
            array (
                'id' => 468,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 73,
                'allele_p_id' => 31,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            312 => 
            array (
                'id' => 469,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 73,
                'allele_p_id' => 3,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            313 => 
            array (
                'id' => 470,
                'created_at' => '2020-05-22 20:55:12',
                'updated_at' => '2020-05-22 20:55:12',
                'animal_id' => 73,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            314 => 
            array (
                'id' => 471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            315 => 
            array (
                'id' => 472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            316 => 
            array (
                'id' => 473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            317 => 
            array (
                'id' => 474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            318 => 
            array (
                'id' => 475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            319 => 
            array (
                'id' => 476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            320 => 
            array (
                'id' => 477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            321 => 
            array (
                'id' => 478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
        ));
        
        
    }
}