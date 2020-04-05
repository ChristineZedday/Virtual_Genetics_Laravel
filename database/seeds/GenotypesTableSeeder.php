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
                'locus_id' => 20,
            ),
        ));
        
        
    }
}