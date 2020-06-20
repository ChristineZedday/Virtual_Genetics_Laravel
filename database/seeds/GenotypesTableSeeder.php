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
                'locus_id' => 26,
            ),
            130 => 
            array (
                'id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            131 => 
            array (
                'id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
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
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
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
                'id' => 338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 46,
                'allele_p_id' => 39,
                'allele_m_id' => 38,
                'locus_id' => 21,
            ),
            181 => 
            array (
                'id' => 339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            182 => 
            array (
                'id' => 340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            183 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            184 => 
            array (
                'id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            185 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            186 => 
            array (
                'id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            187 => 
            array (
                'id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            188 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            189 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            190 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            191 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 5,
                'allele_p_id' => 41,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            192 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            193 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            194 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 10,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            195 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 6,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            196 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            197 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            198 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 47,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            199 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 41,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            200 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            201 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            202 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            203 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 36,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            204 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            205 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            206 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            207 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            208 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            209 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 50,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            210 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 54,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            211 => 
            array (
                'id' => 471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            212 => 
            array (
                'id' => 472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            213 => 
            array (
                'id' => 473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 74,
                'allele_p_id' => 30,
                'allele_m_id' => 31,
                'locus_id' => 14,
            ),
            214 => 
            array (
                'id' => 474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            215 => 
            array (
                'id' => 475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            216 => 
            array (
                'id' => 476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 30,
                'allele_m_id' => 30,
                'locus_id' => 14,
            ),
            217 => 
            array (
                'id' => 477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            218 => 
            array (
                'id' => 478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            219 => 
            array (
                'id' => 479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            220 => 
            array (
                'id' => 480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 3,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            221 => 
            array (
                'id' => 481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 4,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            222 => 
            array (
                'id' => 482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 7,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            223 => 
            array (
                'id' => 483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 8,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            224 => 
            array (
                'id' => 484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 9,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            225 => 
            array (
                'id' => 485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 12,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            226 => 
            array (
                'id' => 486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            227 => 
            array (
                'id' => 487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            228 => 
            array (
                'id' => 488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 17,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            229 => 
            array (
                'id' => 489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 18,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            230 => 
            array (
                'id' => 490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 22,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            231 => 
            array (
                'id' => 491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 23,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            232 => 
            array (
                'id' => 494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            233 => 
            array (
                'id' => 495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 27,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            234 => 
            array (
                'id' => 496,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            235 => 
            array (
                'id' => 497,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 31,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            236 => 
            array (
                'id' => 498,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 32,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            237 => 
            array (
                'id' => 499,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 33,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            238 => 
            array (
                'id' => 500,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 75,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            239 => 
            array (
                'id' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 76,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            240 => 
            array (
                'id' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 2,
                'allele_p_id' => 45,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            241 => 
            array (
                'id' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 35,
                'allele_p_id' => 45,
                'allele_m_id' => 45,
                'locus_id' => 25,
            ),
            242 => 
            array (
                'id' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 45,
                'allele_m_id' => 46,
                'locus_id' => 25,
            ),
            243 => 
            array (
                'id' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 9,
                'allele_m_id' => 10,
                'locus_id' => 13,
            ),
            244 => 
            array (
                'id' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            245 => 
            array (
                'id' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 46,
                'allele_m_id' => 45,
                'locus_id' => 25,
            ),
            246 => 
            array (
                'id' => 508,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 7,
                'allele_m_id' => 6,
                'locus_id' => 3,
            ),
            247 => 
            array (
                'id' => 509,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 8,
                'allele_m_id' => 47,
                'locus_id' => 26,
            ),
            248 => 
            array (
                'id' => 510,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            249 => 
            array (
                'id' => 511,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            250 => 
            array (
                'id' => 512,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            251 => 
            array (
                'id' => 513,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            252 => 
            array (
                'id' => 514,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            253 => 
            array (
                'id' => 515,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            254 => 
            array (
                'id' => 516,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            255 => 
            array (
                'id' => 517,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 19,
                'allele_m_id' => 6,
                'locus_id' => 3,
            ),
            256 => 
            array (
                'id' => 518,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            257 => 
            array (
                'id' => 519,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            258 => 
            array (
                'id' => 520,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 32,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            259 => 
            array (
                'id' => 521,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 34,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            260 => 
            array (
                'id' => 522,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            261 => 
            array (
                'id' => 523,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            262 => 
            array (
                'id' => 524,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 20,
                'allele_m_id' => 21,
                'locus_id' => 17,
            ),
            263 => 
            array (
                'id' => 525,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 25,
                'allele_m_id' => 26,
                'locus_id' => 16,
            ),
            264 => 
            array (
                'id' => 526,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            265 => 
            array (
                'id' => 527,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            266 => 
            array (
                'id' => 528,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            267 => 
            array (
                'id' => 529,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            268 => 
            array (
                'id' => 530,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            269 => 
            array (
                'id' => 531,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 88,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            270 => 
            array (
                'id' => 532,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            271 => 
            array (
                'id' => 533,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            272 => 
            array (
                'id' => 534,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            273 => 
            array (
                'id' => 535,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            274 => 
            array (
                'id' => 537,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            275 => 
            array (
                'id' => 538,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            276 => 
            array (
                'id' => 539,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            277 => 
            array (
                'id' => 540,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 5,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            278 => 
            array (
                'id' => 541,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            279 => 
            array (
                'id' => 542,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            280 => 
            array (
                'id' => 543,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            281 => 
            array (
                'id' => 544,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            282 => 
            array (
                'id' => 545,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            283 => 
            array (
                'id' => 546,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            284 => 
            array (
                'id' => 547,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 41,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            285 => 
            array (
                'id' => 548,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            286 => 
            array (
                'id' => 549,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 42,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            287 => 
            array (
                'id' => 550,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            288 => 
            array (
                'id' => 551,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 42,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            289 => 
            array (
                'id' => 552,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 42,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            290 => 
            array (
                'id' => 553,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            291 => 
            array (
                'id' => 554,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 40,
                'allele_m_id' => 42,
                'locus_id' => 23,
            ),
            292 => 
            array (
                'id' => 555,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 40,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            293 => 
            array (
                'id' => 556,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 41,
                'allele_m_id' => 40,
                'locus_id' => 23,
            ),
            294 => 
            array (
                'id' => 557,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 40,
                'allele_m_id' => 41,
                'locus_id' => 23,
            ),
            295 => 
            array (
                'id' => 558,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 22,
                'allele_m_id' => 23,
                'locus_id' => 4,
            ),
            296 => 
            array (
                'id' => 559,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 6,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            297 => 
            array (
                'id' => 560,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            298 => 
            array (
                'id' => 561,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 7,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            299 => 
            array (
                'id' => 562,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 6,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            300 => 
            array (
                'id' => 563,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 88,
                'allele_p_id' => 19,
                'allele_m_id' => 19,
                'locus_id' => 3,
            ),
            301 => 
            array (
                'id' => 565,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            302 => 
            array (
                'id' => 566,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 90,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            303 => 
            array (
                'id' => 567,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 15,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            304 => 
            array (
                'id' => 568,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 16,
                'allele_m_id' => 15,
                'locus_id' => 11,
            ),
            305 => 
            array (
                'id' => 569,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 93,
                'allele_p_id' => 15,
                'allele_m_id' => 16,
                'locus_id' => 11,
            ),
            306 => 
            array (
                'id' => 570,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 17,
                'allele_m_id' => 48,
                'locus_id' => 27,
            ),
            307 => 
            array (
                'id' => 571,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 48,
                'allele_m_id' => 17,
                'locus_id' => 27,
            ),
            308 => 
            array (
                'id' => 572,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 83,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            309 => 
            array (
                'id' => 573,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            310 => 
            array (
                'id' => 574,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 85,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            311 => 
            array (
                'id' => 575,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 86,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            312 => 
            array (
                'id' => 576,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 89,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            313 => 
            array (
                'id' => 578,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            314 => 
            array (
                'id' => 579,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 21,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            315 => 
            array (
                'id' => 581,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 20,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            316 => 
            array (
                'id' => 582,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            317 => 
            array (
                'id' => 583,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 25,
                'allele_p_id' => 43,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            318 => 
            array (
                'id' => 584,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 28,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            319 => 
            array (
                'id' => 585,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 29,
                'allele_p_id' => 44,
                'allele_m_id' => 43,
                'locus_id' => 24,
            ),
            320 => 
            array (
                'id' => 586,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 24,
                'allele_p_id' => 32,
                'allele_m_id' => 33,
                'locus_id' => 18,
            ),
            321 => 
            array (
                'id' => 587,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 26,
                'allele_p_id' => 33,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            322 => 
            array (
                'id' => 588,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 30,
                'allele_p_id' => 33,
                'allele_m_id' => 32,
                'locus_id' => 18,
            ),
            323 => 
            array (
                'id' => 589,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 11,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            324 => 
            array (
                'id' => 590,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 13,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            325 => 
            array (
                'id' => 591,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 19,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            326 => 
            array (
                'id' => 592,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 79,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            327 => 
            array (
                'id' => 593,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 80,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            328 => 
            array (
                'id' => 594,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 81,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            329 => 
            array (
                'id' => 595,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 84,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            330 => 
            array (
                'id' => 596,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 87,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            331 => 
            array (
                'id' => 597,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 88,
                'allele_p_id' => 4,
                'allele_m_id' => 5,
                'locus_id' => 2,
            ),
            332 => 
            array (
                'id' => 598,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 91,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            333 => 
            array (
                'id' => 599,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 92,
                'allele_p_id' => 2,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            334 => 
            array (
                'id' => 600,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 94,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            335 => 
            array (
                'id' => 602,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            336 => 
            array (
                'id' => 603,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 14,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            337 => 
            array (
                'id' => 604,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 4,
                'allele_m_id' => 3,
                'locus_id' => 2,
            ),
            338 => 
            array (
                'id' => 605,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 37,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            339 => 
            array (
                'id' => 606,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            340 => 
            array (
                'id' => 607,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 38,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            341 => 
            array (
                'id' => 608,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            342 => 
            array (
                'id' => 609,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 77,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            343 => 
            array (
                'id' => 610,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 78,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            344 => 
            array (
                'id' => 611,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            345 => 
            array (
                'id' => 612,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 82,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            346 => 
            array (
                'id' => 613,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            347 => 
            array (
                'id' => 614,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            348 => 
            array (
                'id' => 615,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            349 => 
            array (
                'id' => 616,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 95,
                'allele_p_id' => 43,
                'allele_m_id' => 44,
                'locus_id' => 24,
            ),
            350 => 
            array (
                'id' => 617,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 98,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            351 => 
            array (
                'id' => 618,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 98,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            352 => 
            array (
                'id' => 619,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 98,
                'allele_p_id' => 18,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            353 => 
            array (
                'id' => 620,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            354 => 
            array (
                'id' => 621,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            355 => 
            array (
                'id' => 622,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
            356 => 
            array (
                'id' => 623,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 99,
                'allele_p_id' => 7,
                'allele_m_id' => 18,
                'locus_id' => 3,
            ),
            357 => 
            array (
                'id' => 624,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 97,
                'allele_p_id' => 1,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            358 => 
            array (
                'id' => 625,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 97,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            
            361 => 
            array (
                'id' => 628,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 1,
                'allele_m_id' => 1,
                'locus_id' => 1,
            ),
            362 => 
            array (
                'id' => 629,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 3,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            363 => 
            array (
                'id' => 630,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 19,
                'allele_m_id' => 7,
                'locus_id' => 3,
            ),
            364 => 
            array (
                'id' => 631,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 100,
                'allele_p_id' => 13,
                'allele_m_id' => 14,
                'locus_id' => 10,
            ),
            365 => 
            array (
                'id' => 632,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 2,
                'allele_m_id' => 2,
                'locus_id' => 1,
            ),
            366 => 
            array (
                'id' => 633,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 4,
                'allele_m_id' => 4,
                'locus_id' => 2,
            ),
            367 => 
            array (
                'id' => 634,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 49,
                'allele_m_id' => 35,
                'locus_id' => 19,
            ),
            368 => 
            array (
                'id' => 635,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 24,
                'allele_m_id' => 24,
                'locus_id' => 4,
            ),
            369 => 
            array (
                'id' => 636,
                'created_at' => NULL,
                'updated_at' => NULL,
                'animal_id' => 101,
                'allele_p_id' => 39,
                'allele_m_id' => 39,
                'locus_id' => 21,
            ),
        ));
        
        
    }
}