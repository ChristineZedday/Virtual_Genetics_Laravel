<?php

namespace Database\Seeders;

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
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 2,
                'created_at' => NULL,
                'id' => 1,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 3,
                'created_at' => NULL,
                'id' => 2,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 4,
                'created_at' => NULL,
                'id' => 3,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 2,
                'created_at' => NULL,
                'id' => 4,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 5,
                'animal_id' => 3,
                'created_at' => NULL,
                'id' => 5,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 4,
                'created_at' => NULL,
                'id' => 6,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 3,
                'animal_id' => 5,
                'created_at' => NULL,
                'id' => 7,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 5,
                'created_at' => NULL,
                'id' => 8,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 6,
                'created_at' => NULL,
                'id' => 9,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 6,
                'created_at' => NULL,
                'id' => 10,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 7,
                'created_at' => NULL,
                'id' => 11,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 7,
                'created_at' => NULL,
                'id' => 12,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'allele_m_id' => 8,
                'allele_p_id' => 47,
                'animal_id' => 3,
                'created_at' => NULL,
                'id' => 13,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 6,
                'created_at' => NULL,
                'id' => 14,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 27,
                'animal_id' => 2,
                'created_at' => NULL,
                'id' => 15,
                'locus_id' => 9,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 5,
                'created_at' => NULL,
                'id' => 16,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 4,
                'created_at' => NULL,
                'id' => 17,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'allele_m_id' => 26,
                'allele_p_id' => 25,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 18,
                'locus_id' => 16,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 19,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 20,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 21,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 9,
                'created_at' => NULL,
                'id' => 22,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 9,
                'created_at' => NULL,
                'id' => 23,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 9,
                'created_at' => NULL,
                'id' => 24,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 10,
                'created_at' => NULL,
                'id' => 25,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 11,
                'created_at' => NULL,
                'id' => 26,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 12,
                'created_at' => NULL,
                'id' => 27,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 10,
                'created_at' => NULL,
                'id' => 28,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 12,
                'created_at' => NULL,
                'id' => 29,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 13,
                'created_at' => NULL,
                'id' => 30,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 10,
                'created_at' => NULL,
                'id' => 31,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 11,
                'created_at' => NULL,
                'id' => 32,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 10,
                'created_at' => NULL,
                'id' => 33,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 12,
                'created_at' => NULL,
                'id' => 34,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 11,
                'created_at' => NULL,
                'id' => 35,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 13,
                'created_at' => NULL,
                'id' => 36,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 12,
                'created_at' => NULL,
                'id' => 37,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 14,
                'created_at' => NULL,
                'id' => 38,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 13,
                'created_at' => NULL,
                'id' => 39,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 17,
                'created_at' => NULL,
                'id' => 40,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 18,
                'created_at' => NULL,
                'id' => 41,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 5,
                'animal_id' => 18,
                'created_at' => NULL,
                'id' => 42,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 21,
                'created_at' => NULL,
                'id' => 43,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 21,
                'created_at' => NULL,
                'id' => 44,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 21,
                'created_at' => NULL,
                'id' => 45,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 22,
                'created_at' => NULL,
                'id' => 46,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 22,
                'created_at' => NULL,
                'id' => 47,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 27,
                'animal_id' => 22,
                'created_at' => NULL,
                'id' => 48,
                'locus_id' => 9,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 32,
                'animal_id' => 18,
                'created_at' => NULL,
                'id' => 49,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'allele_m_id' => 32,
                'allele_p_id' => 33,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 50,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 51,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 52,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 53,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 54,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 55,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 56,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 57,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 26,
                'created_at' => NULL,
                'id' => 58,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 26,
                'created_at' => NULL,
                'id' => 59,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 5,
                'animal_id' => 17,
                'created_at' => NULL,
                'id' => 60,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 26,
                'created_at' => NULL,
                'id' => 61,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 62,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 63,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 64,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 65,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 66,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 27,
                'created_at' => NULL,
                'id' => 67,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 27,
                'created_at' => NULL,
                'id' => 68,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'allele_m_id' => 32,
                'allele_p_id' => 32,
                'animal_id' => 27,
                'created_at' => NULL,
                'id' => 69,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 70,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 71,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 32,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 72,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 73,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 28,
                'created_at' => NULL,
                'id' => 74,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 28,
                'created_at' => NULL,
                'id' => 75,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 76,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 77,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 78,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 31,
                'created_at' => NULL,
                'id' => 79,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 31,
                'created_at' => NULL,
                'id' => 80,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 31,
                'created_at' => NULL,
                'id' => 81,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 32,
                'created_at' => NULL,
                'id' => 82,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 32,
                'created_at' => NULL,
                'id' => 83,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 32,
                'created_at' => NULL,
                'id' => 84,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 33,
                'created_at' => NULL,
                'id' => 85,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 33,
                'created_at' => NULL,
                'id' => 86,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 32,
                'animal_id' => 33,
                'created_at' => NULL,
                'id' => 87,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'allele_m_id' => 37,
                'allele_p_id' => 36,
                'animal_id' => 21,
                'created_at' => NULL,
                'id' => 88,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'allele_m_id' => 36,
                'allele_p_id' => 37,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 89,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'allele_m_id' => 37,
                'allele_p_id' => 36,
                'animal_id' => 28,
                'created_at' => NULL,
                'id' => 90,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 34,
                'created_at' => NULL,
                'id' => 91,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 34,
                'created_at' => NULL,
                'id' => 92,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 34,
                'created_at' => NULL,
                'id' => 93,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 35,
                'created_at' => NULL,
                'id' => 94,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 35,
                'created_at' => NULL,
                'id' => 95,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'allele_m_id' => 35,
                'allele_p_id' => 34,
                'animal_id' => 35,
                'created_at' => NULL,
                'id' => 96,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 36,
                'created_at' => NULL,
                'id' => 97,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 36,
                'created_at' => NULL,
                'id' => 98,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'allele_m_id' => 36,
                'allele_p_id' => 37,
                'animal_id' => 36,
                'created_at' => NULL,
                'id' => 99,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'allele_m_id' => 8,
                'allele_p_id' => 47,
                'animal_id' => 36,
                'created_at' => NULL,
                'id' => 100,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'allele_m_id' => 34,
                'allele_p_id' => 35,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 101,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'allele_m_id' => 34,
                'allele_p_id' => 34,
                'animal_id' => 37,
                'created_at' => NULL,
                'id' => 102,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'allele_m_id' => 37,
                'allele_p_id' => 36,
                'animal_id' => 27,
                'created_at' => NULL,
                'id' => 103,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 259,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 17,
                'created_at' => NULL,
                'id' => 260,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 21,
                'created_at' => NULL,
                'id' => 261,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 37,
                'created_at' => NULL,
                'id' => 262,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 263,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 264,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 265,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 27,
                'created_at' => NULL,
                'id' => 266,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 28,
                'created_at' => NULL,
                'id' => 267,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 268,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 269,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 32,
                'created_at' => NULL,
                'id' => 270,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 19,
                'created_at' => NULL,
                'id' => 272,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 13,
                'created_at' => NULL,
                'id' => 273,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 14,
                'created_at' => NULL,
                'id' => 274,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 7,
                'created_at' => NULL,
                'id' => 275,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 276,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'allele_m_id' => 36,
                'allele_p_id' => 36,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 277,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'allele_m_id' => 12,
                'allele_p_id' => 11,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 278,
                'locus_id' => 15,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'allele_m_id' => 36,
                'allele_p_id' => 37,
                'animal_id' => 39,
                'created_at' => NULL,
                'id' => 279,
                'locus_id' => 22,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'allele_m_id' => 35,
                'allele_p_id' => 34,
                'animal_id' => 39,
                'created_at' => NULL,
                'id' => 280,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'allele_m_id' => 34,
                'allele_p_id' => 34,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 281,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 39,
                'created_at' => NULL,
                'id' => 282,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 39,
                'created_at' => NULL,
                'id' => 283,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 39,
                'created_at' => NULL,
                'id' => 284,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'allele_m_id' => 8,
                'allele_p_id' => 8,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 285,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 286,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 287,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 40,
                'created_at' => NULL,
                'id' => 288,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 40,
                'created_at' => NULL,
                'id' => 289,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 24,
                'animal_id' => 40,
                'created_at' => NULL,
                'id' => 290,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 40,
                'created_at' => NULL,
                'id' => 291,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 40,
                'created_at' => NULL,
                'id' => 292,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 41,
                'created_at' => NULL,
                'id' => 293,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 42,
                'created_at' => NULL,
                'id' => 294,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 43,
                'created_at' => NULL,
                'id' => 295,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 44,
                'created_at' => NULL,
                'id' => 296,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 45,
                'created_at' => NULL,
                'id' => 297,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 46,
                'created_at' => NULL,
                'id' => 298,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 47,
                'created_at' => NULL,
                'id' => 299,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 48,
                'created_at' => NULL,
                'id' => 300,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 49,
                'created_at' => NULL,
                'id' => 301,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 50,
                'created_at' => NULL,
                'id' => 302,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 41,
                'created_at' => NULL,
                'id' => 303,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 42,
                'created_at' => NULL,
                'id' => 304,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 43,
                'created_at' => NULL,
                'id' => 306,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 3,
                'animal_id' => 44,
                'created_at' => NULL,
                'id' => 307,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 45,
                'created_at' => NULL,
                'id' => 308,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 46,
                'created_at' => NULL,
                'id' => 309,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 47,
                'created_at' => NULL,
                'id' => 310,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 48,
                'created_at' => NULL,
                'id' => 311,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 49,
                'created_at' => NULL,
                'id' => 312,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 50,
                'created_at' => NULL,
                'id' => 313,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 41,
                'created_at' => NULL,
                'id' => 314,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 22,
                'animal_id' => 42,
                'created_at' => NULL,
                'id' => 315,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 27,
                'animal_id' => 43,
                'created_at' => NULL,
                'id' => 316,
                'locus_id' => 9,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'allele_m_id' => 10,
                'allele_p_id' => 9,
                'animal_id' => 44,
                'created_at' => NULL,
                'id' => 317,
                'locus_id' => 13,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 45,
                'created_at' => NULL,
                'id' => 318,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 46,
                'created_at' => NULL,
                'id' => 319,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 47,
                'created_at' => NULL,
                'id' => 320,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 48,
                'created_at' => NULL,
                'id' => 321,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 49,
                'created_at' => NULL,
                'id' => 322,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 50,
                'created_at' => NULL,
                'id' => 323,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 51,
                'created_at' => NULL,
                'id' => 324,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 51,
                'created_at' => NULL,
                'id' => 325,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 51,
                'created_at' => NULL,
                'id' => 326,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 52,
                'created_at' => NULL,
                'id' => 327,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 53,
                'created_at' => NULL,
                'id' => 328,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 54,
                'created_at' => NULL,
                'id' => 329,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 52,
                'created_at' => NULL,
                'id' => 330,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 53,
                'created_at' => NULL,
                'id' => 331,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 54,
                'created_at' => NULL,
                'id' => 332,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 52,
                'created_at' => NULL,
                'id' => 333,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 53,
                'created_at' => NULL,
                'id' => 334,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 46,
                'created_at' => NULL,
                'id' => 335,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 43,
                'created_at' => NULL,
                'id' => 336,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 46,
                'created_at' => NULL,
                'id' => 338,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 35,
                'created_at' => NULL,
                'id' => 339,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 22,
                'created_at' => NULL,
                'id' => 340,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 341,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 26,
                'created_at' => NULL,
                'id' => 342,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 343,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 32,
                'created_at' => NULL,
                'id' => 344,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 2,
                'created_at' => NULL,
                'id' => 345,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 18,
                'created_at' => NULL,
                'id' => 346,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 347,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 348,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 5,
                'created_at' => NULL,
                'id' => 349,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 350,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 14,
                'created_at' => NULL,
                'id' => 351,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 10,
                'created_at' => NULL,
                'id' => 352,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 6,
                'created_at' => NULL,
                'id' => 353,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 11,
                'created_at' => NULL,
                'id' => 354,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 19,
                'created_at' => NULL,
                'id' => 355,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 47,
                'created_at' => NULL,
                'id' => 356,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 41,
                'created_at' => NULL,
                'id' => 357,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 12,
                'created_at' => NULL,
                'id' => 358,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 3,
                'created_at' => NULL,
                'id' => 359,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 17,
                'created_at' => NULL,
                'id' => 360,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 36,
                'created_at' => NULL,
                'id' => 361,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 31,
                'created_at' => NULL,
                'id' => 362,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 363,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 28,
                'created_at' => NULL,
                'id' => 364,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 365,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 366,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 50,
                'created_at' => NULL,
                'id' => 367,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 54,
                'created_at' => NULL,
                'id' => 368,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 74,
                'created_at' => NULL,
                'id' => 471,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 74,
                'created_at' => NULL,
                'id' => 472,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 74,
                'created_at' => NULL,
                'id' => 473,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 75,
                'created_at' => NULL,
                'id' => 474,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 75,
                'created_at' => NULL,
                'id' => 475,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 75,
                'created_at' => NULL,
                'id' => 476,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 76,
                'created_at' => NULL,
                'id' => 477,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 76,
                'created_at' => NULL,
                'id' => 478,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 2,
                'created_at' => NULL,
                'id' => 479,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 3,
                'created_at' => NULL,
                'id' => 480,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 4,
                'created_at' => NULL,
                'id' => 481,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 7,
                'created_at' => NULL,
                'id' => 482,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 8,
                'created_at' => NULL,
                'id' => 483,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 9,
                'created_at' => NULL,
                'id' => 484,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 12,
                'created_at' => NULL,
                'id' => 485,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 13,
                'created_at' => NULL,
                'id' => 486,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 14,
                'created_at' => NULL,
                'id' => 487,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 17,
                'created_at' => NULL,
                'id' => 488,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 18,
                'created_at' => NULL,
                'id' => 489,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 22,
                'created_at' => NULL,
                'id' => 490,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 23,
                'created_at' => NULL,
                'id' => 491,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 26,
                'created_at' => NULL,
                'id' => 494,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 27,
                'created_at' => NULL,
                'id' => 495,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 496,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 31,
                'created_at' => NULL,
                'id' => 497,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 32,
                'created_at' => NULL,
                'id' => 498,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 33,
                'created_at' => NULL,
                'id' => 499,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 75,
                'created_at' => NULL,
                'id' => 500,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 76,
                'created_at' => NULL,
                'id' => 501,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 2,
                'created_at' => NULL,
                'id' => 502,
                'locus_id' => 25,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'allele_m_id' => 45,
                'allele_p_id' => 45,
                'animal_id' => 35,
                'created_at' => NULL,
                'id' => 503,
                'locus_id' => 25,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 504,
                'locus_id' => 25,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'allele_m_id' => 10,
                'allele_p_id' => 9,
                'animal_id' => 77,
                'created_at' => NULL,
                'id' => 505,
                'locus_id' => 13,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 77,
                'created_at' => NULL,
                'id' => 506,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'allele_m_id' => 45,
                'allele_p_id' => 46,
                'animal_id' => 77,
                'created_at' => NULL,
                'id' => 507,
                'locus_id' => 25,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 7,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 508,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 509,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 78,
                'created_at' => NULL,
                'id' => 510,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 79,
                'created_at' => NULL,
                'id' => 511,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 80,
                'created_at' => NULL,
                'id' => 512,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 78,
                'created_at' => NULL,
                'id' => 513,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 79,
                'created_at' => NULL,
                'id' => 514,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 80,
                'created_at' => NULL,
                'id' => 515,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 78,
                'created_at' => NULL,
                'id' => 516,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 19,
                'animal_id' => 79,
                'created_at' => NULL,
                'id' => 517,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 80,
                'created_at' => NULL,
                'id' => 518,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 81,
                'created_at' => NULL,
                'id' => 519,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'allele_m_id' => 32,
                'allele_p_id' => 32,
                'animal_id' => 81,
                'created_at' => NULL,
                'id' => 520,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'allele_m_id' => 35,
                'allele_p_id' => 34,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 521,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 32,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 522,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 523,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 524,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'allele_m_id' => 26,
                'allele_p_id' => 25,
                'animal_id' => 80,
                'created_at' => NULL,
                'id' => 525,
                'locus_id' => 16,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 526,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 81,
                'created_at' => NULL,
                'id' => 527,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 83,
                'created_at' => NULL,
                'id' => 528,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 85,
                'created_at' => NULL,
                'id' => 529,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 86,
                'created_at' => NULL,
                'id' => 530,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 88,
                'created_at' => NULL,
                'id' => 531,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 89,
                'created_at' => NULL,
                'id' => 532,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 90,
                'created_at' => NULL,
                'id' => 533,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 91,
                'created_at' => NULL,
                'id' => 534,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 93,
                'created_at' => NULL,
                'id' => 535,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 83,
                'created_at' => NULL,
                'id' => 537,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 84,
                'created_at' => NULL,
                'id' => 538,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 85,
                'created_at' => NULL,
                'id' => 539,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 5,
                'animal_id' => 86,
                'created_at' => NULL,
                'id' => 540,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 87,
                'created_at' => NULL,
                'id' => 541,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 89,
                'created_at' => NULL,
                'id' => 542,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 90,
                'created_at' => NULL,
                'id' => 543,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 92,
                'created_at' => NULL,
                'id' => 544,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 93,
                'created_at' => NULL,
                'id' => 545,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 94,
                'created_at' => NULL,
                'id' => 546,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 83,
                'created_at' => NULL,
                'id' => 547,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 84,
                'created_at' => NULL,
                'id' => 548,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 85,
                'created_at' => NULL,
                'id' => 549,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 86,
                'created_at' => NULL,
                'id' => 550,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 87,
                'created_at' => NULL,
                'id' => 551,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 89,
                'created_at' => NULL,
                'id' => 552,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 90,
                'created_at' => NULL,
                'id' => 553,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 91,
                'created_at' => NULL,
                'id' => 554,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 92,
                'created_at' => NULL,
                'id' => 555,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 93,
                'created_at' => NULL,
                'id' => 556,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 94,
                'created_at' => NULL,
                'id' => 557,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 83,
                'created_at' => NULL,
                'id' => 558,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 84,
                'created_at' => NULL,
                'id' => 559,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 85,
                'created_at' => NULL,
                'id' => 560,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 86,
                'created_at' => NULL,
                'id' => 561,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 6,
                'animal_id' => 87,
                'created_at' => NULL,
                'id' => 562,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 88,
                'created_at' => NULL,
                'id' => 563,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 83,
                'created_at' => NULL,
                'id' => 565,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 90,
                'created_at' => NULL,
                'id' => 566,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 15,
                'animal_id' => 91,
                'created_at' => NULL,
                'id' => 567,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 92,
                'created_at' => NULL,
                'id' => 568,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 93,
                'created_at' => NULL,
                'id' => 569,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 94,
                'created_at' => NULL,
                'id' => 570,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 84,
                'created_at' => NULL,
                'id' => 571,
                'locus_id' => 27,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 83,
                'created_at' => NULL,
                'id' => 572,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 84,
                'created_at' => NULL,
                'id' => 573,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 85,
                'created_at' => NULL,
                'id' => 574,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 86,
                'created_at' => NULL,
                'id' => 575,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 89,
                'created_at' => NULL,
                'id' => 576,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 94,
                'created_at' => NULL,
                'id' => 578,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 21,
                'created_at' => NULL,
                'id' => 579,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 20,
                'created_at' => NULL,
                'id' => 581,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 582,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 583,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 28,
                'created_at' => NULL,
                'id' => 584,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 29,
                'created_at' => NULL,
                'id' => 585,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 32,
                'animal_id' => 24,
                'created_at' => NULL,
                'id' => 586,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'allele_m_id' => 32,
                'allele_p_id' => 33,
                'animal_id' => 26,
                'created_at' => NULL,
                'id' => 587,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'allele_m_id' => 32,
                'allele_p_id' => 33,
                'animal_id' => 30,
                'created_at' => NULL,
                'id' => 588,
                'locus_id' => 18,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 11,
                'created_at' => NULL,
                'id' => 589,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 13,
                'created_at' => NULL,
                'id' => 590,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 19,
                'created_at' => NULL,
                'id' => 591,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 79,
                'created_at' => NULL,
                'id' => 592,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 80,
                'created_at' => NULL,
                'id' => 593,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 81,
                'created_at' => NULL,
                'id' => 594,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 84,
                'created_at' => NULL,
                'id' => 595,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 87,
                'created_at' => NULL,
                'id' => 596,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 88,
                'created_at' => NULL,
                'id' => 597,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 91,
                'created_at' => NULL,
                'id' => 598,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 92,
                'created_at' => NULL,
                'id' => 599,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 94,
                'created_at' => NULL,
                'id' => 600,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 14,
                'created_at' => NULL,
                'id' => 602,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 14,
                'created_at' => NULL,
                'id' => 603,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 37,
                'created_at' => NULL,
                'id' => 604,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 37,
                'created_at' => NULL,
                'id' => 605,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 606,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 38,
                'created_at' => NULL,
                'id' => 607,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 77,
                'created_at' => NULL,
                'id' => 608,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 77,
                'created_at' => NULL,
                'id' => 609,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 78,
                'created_at' => NULL,
                'id' => 610,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 611,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 612,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 95,
                'created_at' => NULL,
                'id' => 613,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 95,
                'created_at' => NULL,
                'id' => 614,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 95,
                'created_at' => NULL,
                'id' => 615,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 95,
                'created_at' => NULL,
                'id' => 616,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 98,
                'created_at' => NULL,
                'id' => 617,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 98,
                'created_at' => NULL,
                'id' => 618,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 18,
                'animal_id' => 98,
                'created_at' => NULL,
                'id' => 619,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 99,
                'created_at' => NULL,
                'id' => 620,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 99,
                'created_at' => NULL,
                'id' => 621,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 99,
                'created_at' => NULL,
                'id' => 622,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'allele_m_id' => 18,
                'allele_p_id' => 7,
                'animal_id' => 99,
                'created_at' => NULL,
                'id' => 623,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 97,
                'created_at' => NULL,
                'id' => 624,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 97,
                'created_at' => NULL,
                'id' => 625,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 100,
                'created_at' => NULL,
                'id' => 628,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 100,
                'created_at' => NULL,
                'id' => 629,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 100,
                'created_at' => NULL,
                'id' => 630,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'allele_m_id' => 14,
                'allele_p_id' => 13,
                'animal_id' => 100,
                'created_at' => NULL,
                'id' => 631,
                'locus_id' => 10,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 101,
                'created_at' => NULL,
                'id' => 632,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 101,
                'created_at' => NULL,
                'id' => 633,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'allele_m_id' => 35,
                'allele_p_id' => 49,
                'animal_id' => 101,
                'created_at' => NULL,
                'id' => 634,
                'locus_id' => 19,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'allele_m_id' => 24,
                'allele_p_id' => 24,
                'animal_id' => 101,
                'created_at' => NULL,
                'id' => 635,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 101,
                'created_at' => NULL,
                'id' => 636,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 96,
                'created_at' => NULL,
                'id' => 641,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 96,
                'created_at' => NULL,
                'id' => 642,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 102,
                'created_at' => NULL,
                'id' => 643,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 102,
                'created_at' => NULL,
                'id' => 644,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 102,
                'created_at' => NULL,
                'id' => 645,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'allele_m_id' => 13,
                'allele_p_id' => 14,
                'animal_id' => 102,
                'created_at' => NULL,
                'id' => 646,
                'locus_id' => 10,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 103,
                'created_at' => NULL,
                'id' => 647,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 104,
                'created_at' => NULL,
                'id' => 648,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 105,
                'created_at' => NULL,
                'id' => 649,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 106,
                'created_at' => NULL,
                'id' => 650,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 107,
                'created_at' => NULL,
                'id' => 651,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 108,
                'created_at' => NULL,
                'id' => 652,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 103,
                'created_at' => NULL,
                'id' => 653,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 104,
                'created_at' => NULL,
                'id' => 654,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 105,
                'created_at' => NULL,
                'id' => 655,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 106,
                'created_at' => NULL,
                'id' => 656,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 107,
                'created_at' => NULL,
                'id' => 657,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 108,
                'created_at' => NULL,
                'id' => 658,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 104,
                'created_at' => NULL,
                'id' => 659,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 105,
                'created_at' => NULL,
                'id' => 660,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 103,
                'created_at' => NULL,
                'id' => 661,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 106,
                'created_at' => NULL,
                'id' => 662,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 107,
                'created_at' => NULL,
                'id' => 663,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 109,
                'created_at' => NULL,
                'id' => 664,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 109,
                'created_at' => NULL,
                'id' => 665,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 109,
                'created_at' => NULL,
                'id' => 666,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 110,
                'created_at' => NULL,
                'id' => 667,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 110,
                'created_at' => NULL,
                'id' => 668,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 103,
                'created_at' => NULL,
                'id' => 669,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 104,
                'created_at' => NULL,
                'id' => 670,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 105,
                'created_at' => NULL,
                'id' => 671,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 106,
                'created_at' => NULL,
                'id' => 672,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 107,
                'created_at' => NULL,
                'id' => 673,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 7,
                'animal_id' => 107,
                'created_at' => NULL,
                'id' => 674,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 111,
                'created_at' => NULL,
                'id' => 675,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 111,
                'created_at' => NULL,
                'id' => 676,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 111,
                'created_at' => NULL,
                'id' => 677,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 111,
                'created_at' => NULL,
                'id' => 678,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 113,
                'created_at' => NULL,
                'id' => 679,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 113,
                'created_at' => NULL,
                'id' => 680,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 113,
                'created_at' => NULL,
                'id' => 681,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 113,
                'created_at' => NULL,
                'id' => 682,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 113,
                'created_at' => NULL,
                'id' => 683,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 112,
                'created_at' => NULL,
                'id' => 684,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 112,
                'created_at' => NULL,
                'id' => 685,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 112,
                'created_at' => NULL,
                'id' => 686,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 112,
                'created_at' => NULL,
                'id' => 687,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 114,
                'created_at' => NULL,
                'id' => 688,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 114,
                'created_at' => NULL,
                'id' => 689,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 114,
                'created_at' => NULL,
                'id' => 690,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 114,
                'created_at' => NULL,
                'id' => 691,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 114,
                'created_at' => NULL,
                'id' => 692,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 112,
                'created_at' => NULL,
                'id' => 693,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 112,
                'created_at' => NULL,
                'id' => 694,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 115,
                'created_at' => NULL,
                'id' => 695,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 116,
                'created_at' => NULL,
                'id' => 696,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 117,
                'created_at' => NULL,
                'id' => 697,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 115,
                'created_at' => NULL,
                'id' => 698,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 116,
                'created_at' => NULL,
                'id' => 699,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 117,
                'created_at' => NULL,
                'id' => 700,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 115,
                'created_at' => NULL,
                'id' => 701,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 116,
                'created_at' => NULL,
                'id' => 702,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 117,
                'created_at' => NULL,
                'id' => 703,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 115,
                'created_at' => NULL,
                'id' => 704,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 118,
                'created_at' => NULL,
                'id' => 705,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 118,
                'created_at' => NULL,
                'id' => 706,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 118,
                'created_at' => NULL,
                'id' => 707,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 118,
                'created_at' => NULL,
                'id' => 708,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 118,
                'created_at' => NULL,
                'id' => 709,
                'locus_id' => 3,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'allele_m_id' => 24,
                'allele_p_id' => 23,
                'animal_id' => 79,
                'created_at' => NULL,
                'id' => 710,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 24,
                'animal_id' => 37,
                'created_at' => NULL,
                'id' => 711,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 712,
                'locus_id' => 1,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 713,
                'locus_id' => 2,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 714,
                'locus_id' => 26,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 715,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 716,
                'locus_id' => 24,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 717,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'allele_m_id' => 24,
                'allele_p_id' => 23,
                'animal_id' => 119,
                'created_at' => NULL,
                'id' => 718,
                'locus_id' => 4,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 28,
                'animal_id' => 82,
                'created_at' => NULL,
                'id' => 719,
                'locus_id' => 9,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'allele_m_id' => 28,
                'allele_p_id' => 29,
                'animal_id' => 79,
                'created_at' => NULL,
                'id' => 720,
                'locus_id' => 9,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 721,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            448 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 722,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            449 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 723,
                'locus_id' => 3,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            450 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 24,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 724,
                'locus_id' => 4,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            451 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 725,
                'locus_id' => 11,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            452 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 726,
                'locus_id' => 17,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            453 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 32,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 727,
                'locus_id' => 18,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            454 => 
            array (
                'allele_m_id' => 35,
                'allele_p_id' => 35,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 728,
                'locus_id' => 19,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            455 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 729,
                'locus_id' => 21,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            456 => 
            array (
                'allele_m_id' => 37,
                'allele_p_id' => 37,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 730,
                'locus_id' => 22,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            457 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 731,
                'locus_id' => 23,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            458 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 732,
                'locus_id' => 24,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            459 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 120,
                'created_at' => '2021-01-05 17:35:16',
                'id' => 733,
                'locus_id' => 25,
                'updated_at' => '2021-01-05 17:35:16',
            ),
            460 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:08',
                'id' => 734,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 17:40:08',
            ),
            461 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 3,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:08',
                'id' => 735,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 17:40:08',
            ),
            462 => 
            array (
                'allele_m_id' => 26,
                'allele_p_id' => 25,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:08',
                'id' => 736,
                'locus_id' => 16,
                'updated_at' => '2021-01-05 17:40:08',
            ),
            463 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:08',
                'id' => 737,
                'locus_id' => 17,
                'updated_at' => '2021-01-05 17:40:08',
            ),
            464 => 
            array (
                'allele_m_id' => 34,
                'allele_p_id' => 35,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:08',
                'id' => 738,
                'locus_id' => 19,
                'updated_at' => '2021-01-05 17:40:08',
            ),
            465 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:08',
                'id' => 739,
                'locus_id' => 21,
                'updated_at' => '2021-01-05 17:40:08',
            ),
            466 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:09',
                'id' => 740,
                'locus_id' => 24,
                'updated_at' => '2021-01-05 17:40:09',
            ),
            467 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 121,
                'created_at' => '2021-01-05 17:40:09',
                'id' => 741,
                'locus_id' => 25,
                'updated_at' => '2021-01-05 17:40:09',
            ),
            468 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 122,
                'created_at' => '2021-01-05 17:45:05',
                'id' => 742,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 17:45:05',
            ),
            469 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 122,
                'created_at' => '2021-01-05 17:45:05',
                'id' => 743,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 17:45:05',
            ),
            470 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 122,
                'created_at' => '2021-01-05 17:45:05',
                'id' => 744,
                'locus_id' => 3,
                'updated_at' => '2021-01-05 17:45:05',
            ),
            471 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 122,
                'created_at' => '2021-01-05 17:45:06',
                'id' => 745,
                'locus_id' => 23,
                'updated_at' => '2021-01-05 17:45:06',
            ),
            472 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 122,
                'created_at' => '2021-01-05 17:45:06',
                'id' => 746,
                'locus_id' => 24,
                'updated_at' => '2021-01-05 17:45:06',
            ),
            473 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 123,
                'created_at' => '2021-01-05 20:45:27',
                'id' => 747,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 20:45:27',
            ),
            474 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 123,
                'created_at' => '2021-01-05 20:45:27',
                'id' => 748,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 20:45:27',
            ),
            475 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 123,
                'created_at' => '2021-01-05 20:45:27',
                'id' => 749,
                'locus_id' => 3,
                'updated_at' => '2021-01-05 20:45:27',
            ),
            476 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 123,
                'created_at' => '2021-01-05 20:45:27',
                'id' => 750,
                'locus_id' => 11,
                'updated_at' => '2021-01-05 20:45:27',
            ),
            477 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 123,
                'created_at' => '2021-01-05 20:45:27',
                'id' => 751,
                'locus_id' => 23,
                'updated_at' => '2021-01-05 20:45:27',
            ),
            478 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 123,
                'created_at' => '2021-01-05 20:45:27',
                'id' => 752,
                'locus_id' => 24,
                'updated_at' => '2021-01-05 20:45:27',
            ),
            479 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 124,
                'created_at' => '2021-01-05 20:47:01',
                'id' => 753,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 20:47:01',
            ),
            480 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 124,
                'created_at' => '2021-01-05 20:47:01',
                'id' => 754,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 20:47:01',
            ),
            481 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 124,
                'created_at' => '2021-01-05 20:47:01',
                'id' => 755,
                'locus_id' => 23,
                'updated_at' => '2021-01-05 20:47:01',
            ),
            482 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 124,
                'created_at' => '2021-01-05 20:47:01',
                'id' => 756,
                'locus_id' => 24,
                'updated_at' => '2021-01-05 20:47:01',
            ),
            483 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 124,
                'created_at' => '2021-01-05 20:47:01',
                'id' => 757,
                'locus_id' => 4,
                'updated_at' => '2021-01-05 20:47:01',
            ),
            484 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 758,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            485 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 759,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            486 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 760,
                'locus_id' => 3,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            487 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 16,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 761,
                'locus_id' => 11,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            488 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 762,
                'locus_id' => 23,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            489 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 763,
                'locus_id' => 24,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            490 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 125,
                'created_at' => '2021-01-05 21:00:29',
                'id' => 764,
                'locus_id' => 27,
                'updated_at' => '2021-01-05 21:00:29',
            ),
            491 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 126,
                'created_at' => '2021-01-05 21:07:24',
                'id' => 765,
                'locus_id' => 1,
                'updated_at' => '2021-01-05 21:07:24',
            ),
            492 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 126,
                'created_at' => '2021-01-05 21:07:24',
                'id' => 766,
                'locus_id' => 2,
                'updated_at' => '2021-01-05 21:07:24',
            ),
            493 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 16,
                'animal_id' => 126,
                'created_at' => '2021-01-05 21:07:24',
                'id' => 767,
                'locus_id' => 11,
                'updated_at' => '2021-01-05 21:07:24',
            ),
            494 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 126,
                'created_at' => '2021-01-05 21:07:24',
                'id' => 768,
                'locus_id' => 27,
                'updated_at' => '2021-01-05 21:07:24',
            ),
            495 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 127,
                'created_at' => '2021-01-06 10:50:47',
                'id' => 769,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 10:50:47',
            ),
            496 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 127,
                'created_at' => '2021-01-06 10:50:47',
                'id' => 770,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 10:50:47',
            ),
            497 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 127,
                'created_at' => '2021-01-06 10:50:47',
                'id' => 771,
                'locus_id' => 3,
                'updated_at' => '2021-01-06 10:50:47',
            ),
            498 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 127,
                'created_at' => '2021-01-06 10:50:47',
                'id' => 772,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 10:50:47',
            ),
            499 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 127,
                'created_at' => '2021-01-06 10:50:47',
                'id' => 773,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 10:50:47',
            ),
        ));
        \DB::table('genotypes')->insert(array (
            0 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 127,
                'created_at' => '2021-01-06 10:50:47',
                'id' => 774,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 10:50:47',
            ),
            1 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 128,
                'created_at' => '2021-01-06 10:52:56',
                'id' => 775,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 10:52:56',
            ),
            2 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 128,
                'created_at' => '2021-01-06 10:52:56',
                'id' => 776,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 10:52:56',
            ),
            3 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 27,
                'animal_id' => 128,
                'created_at' => '2021-01-06 10:52:56',
                'id' => 777,
                'locus_id' => 9,
                'updated_at' => '2021-01-06 10:52:56',
            ),
            4 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 128,
                'created_at' => '2021-01-06 10:52:56',
                'id' => 778,
                'locus_id' => 21,
                'updated_at' => '2021-01-06 10:52:56',
            ),
            5 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 128,
                'created_at' => '2021-01-06 10:52:56',
                'id' => 779,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 10:52:56',
            ),
            6 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 128,
                'created_at' => '2021-01-06 10:52:56',
                'id' => 780,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 10:52:56',
            ),
            7 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 129,
                'created_at' => '2021-01-06 10:56:07',
                'id' => 781,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 10:56:07',
            ),
            8 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 3,
                'animal_id' => 129,
                'created_at' => '2021-01-06 10:56:07',
                'id' => 782,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 10:56:07',
            ),
            9 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 129,
                'created_at' => '2021-01-06 10:56:07',
                'id' => 783,
                'locus_id' => 3,
                'updated_at' => '2021-01-06 10:56:07',
            ),
            10 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 129,
                'created_at' => '2021-01-06 10:56:07',
                'id' => 784,
                'locus_id' => 14,
                'updated_at' => '2021-01-06 10:56:07',
            ),
            11 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 129,
                'created_at' => '2021-01-06 10:56:07',
                'id' => 785,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 10:56:07',
            ),
            12 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 129,
                'created_at' => '2021-01-06 10:56:07',
                'id' => 786,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 10:56:07',
            ),
            13 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 129,
                'created_at' => NULL,
                'id' => 787,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 130,
                'created_at' => '2021-01-06 11:26:58',
                'id' => 788,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 11:26:58',
            ),
            15 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 130,
                'created_at' => '2021-01-06 11:26:58',
                'id' => 789,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 11:26:58',
            ),
            16 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 130,
                'created_at' => '2021-01-06 11:26:58',
                'id' => 790,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 11:26:58',
            ),
            17 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 130,
                'created_at' => '2021-01-06 11:26:58',
                'id' => 791,
                'locus_id' => 21,
                'updated_at' => '2021-01-06 11:26:58',
            ),
            18 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 130,
                'created_at' => '2021-01-06 11:26:58',
                'id' => 792,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 11:26:58',
            ),
            19 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 42,
                'created_at' => NULL,
                'id' => 793,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 19,
                'created_at' => NULL,
                'id' => 794,
                'locus_id' => 11,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 117,
                'created_at' => NULL,
                'id' => 795,
                'locus_id' => 23,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 131,
                'created_at' => '2021-01-06 12:53:31',
                'id' => 796,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 12:53:31',
            ),
            23 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 131,
                'created_at' => '2021-01-06 12:53:31',
                'id' => 797,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 12:53:31',
            ),
            24 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 131,
                'created_at' => '2021-01-06 12:53:31',
                'id' => 798,
                'locus_id' => 4,
                'updated_at' => '2021-01-06 12:53:31',
            ),
            25 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 131,
                'created_at' => '2021-01-06 12:53:31',
                'id' => 799,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 12:53:31',
            ),
            26 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 131,
                'created_at' => '2021-01-06 12:53:31',
                'id' => 800,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 12:53:31',
            ),
            27 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 132,
                'created_at' => '2021-01-06 13:03:50',
                'id' => 801,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 13:03:50',
            ),
            28 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 132,
                'created_at' => '2021-01-06 13:03:50',
                'id' => 802,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 13:03:50',
            ),
            29 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 132,
                'created_at' => '2021-01-06 13:03:50',
                'id' => 803,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 13:03:50',
            ),
            30 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 132,
                'created_at' => '2021-01-06 13:03:50',
                'id' => 804,
                'locus_id' => 14,
                'updated_at' => '2021-01-06 13:03:50',
            ),
            31 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 132,
                'created_at' => '2021-01-06 13:03:50',
                'id' => 805,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 13:03:50',
            ),
            32 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 806,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            33 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 807,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            34 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 808,
                'locus_id' => 3,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            35 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 809,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            36 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 810,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            37 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 811,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            38 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 133,
                'created_at' => '2021-01-06 13:05:58',
                'id' => 812,
                'locus_id' => 27,
                'updated_at' => '2021-01-06 13:05:58',
            ),
            39 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 133,
                'created_at' => NULL,
                'id' => 813,
                'locus_id' => 14,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 818,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            41 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 819,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            42 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 820,
                'locus_id' => 3,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            43 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 821,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            44 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 822,
                'locus_id' => 14,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            45 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 823,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            46 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 135,
                'created_at' => '2021-01-06 15:47:27',
                'id' => 824,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 15:47:27',
            ),
            47 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 136,
                'created_at' => '2021-01-06 15:50:44',
                'id' => 825,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 15:50:44',
            ),
            48 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 136,
                'created_at' => '2021-01-06 15:50:44',
                'id' => 826,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 15:50:44',
            ),
            49 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 136,
                'created_at' => '2021-01-06 15:50:44',
                'id' => 827,
                'locus_id' => 3,
                'updated_at' => '2021-01-06 15:50:44',
            ),
            50 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 136,
                'created_at' => '2021-01-06 15:50:44',
                'id' => 828,
                'locus_id' => 11,
                'updated_at' => '2021-01-06 15:50:44',
            ),
            51 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 136,
                'created_at' => '2021-01-06 15:50:44',
                'id' => 829,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 15:50:44',
            ),
            52 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 136,
                'created_at' => '2021-01-06 15:50:44',
                'id' => 830,
                'locus_id' => 24,
                'updated_at' => '2021-01-06 15:50:44',
            ),
            53 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 139,
                'created_at' => '2021-01-06 15:53:54',
                'id' => 845,
                'locus_id' => 1,
                'updated_at' => '2021-01-06 15:53:54',
            ),
            54 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 139,
                'created_at' => '2021-01-06 15:53:54',
                'id' => 846,
                'locus_id' => 2,
                'updated_at' => '2021-01-06 15:53:54',
            ),
            55 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 139,
                'created_at' => '2021-01-06 15:53:54',
                'id' => 847,
                'locus_id' => 23,
                'updated_at' => '2021-01-06 15:53:54',
            ),
            56 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 39,
                'animal_id' => 100,
                'created_at' => NULL,
                'id' => 848,
                'locus_id' => 21,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 140,
                'created_at' => '2021-01-21 10:31:45',
                'id' => 849,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:31:45',
            ),
            58 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 140,
                'created_at' => '2021-01-21 10:31:45',
                'id' => 850,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:31:45',
            ),
            59 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 140,
                'created_at' => '2021-01-21 10:31:45',
                'id' => 851,
                'locus_id' => 4,
                'updated_at' => '2021-01-21 10:31:45',
            ),
            60 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 140,
                'created_at' => '2021-01-21 10:31:45',
                'id' => 852,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 10:31:45',
            ),
            61 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 140,
                'created_at' => '2021-01-21 10:31:45',
                'id' => 853,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:31:45',
            ),
            62 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 140,
                'created_at' => '2021-01-21 10:31:45',
                'id' => 854,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:31:45',
            ),
            63 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 141,
                'created_at' => '2021-01-21 10:33:14',
                'id' => 855,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:33:14',
            ),
            64 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 141,
                'created_at' => '2021-01-21 10:33:14',
                'id' => 856,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:33:14',
            ),
            65 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 141,
                'created_at' => '2021-01-21 10:33:14',
                'id' => 857,
                'locus_id' => 3,
                'updated_at' => '2021-01-21 10:33:14',
            ),
            66 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 141,
                'created_at' => '2021-01-21 10:33:14',
                'id' => 858,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 10:33:14',
            ),
            67 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 141,
                'created_at' => '2021-01-21 10:33:14',
                'id' => 859,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:33:14',
            ),
            68 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 141,
                'created_at' => '2021-01-21 10:33:14',
                'id' => 860,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:33:14',
            ),
            69 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 142,
                'created_at' => '2021-01-21 10:34:48',
                'id' => 861,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:34:48',
            ),
            70 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 142,
                'created_at' => '2021-01-21 10:34:48',
                'id' => 862,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:34:48',
            ),
            71 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 142,
                'created_at' => '2021-01-21 10:34:48',
                'id' => 863,
                'locus_id' => 11,
                'updated_at' => '2021-01-21 10:34:48',
            ),
            72 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 142,
                'created_at' => '2021-01-21 10:34:48',
                'id' => 864,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:34:48',
            ),
            73 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 142,
                'created_at' => '2021-01-21 10:34:48',
                'id' => 865,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:34:48',
            ),
            74 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 143,
                'created_at' => '2021-01-21 10:36:11',
                'id' => 866,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:36:11',
            ),
            75 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 143,
                'created_at' => '2021-01-21 10:36:11',
                'id' => 867,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:36:11',
            ),
            76 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 143,
                'created_at' => '2021-01-21 10:36:11',
                'id' => 868,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:36:11',
            ),
            77 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 143,
                'created_at' => '2021-01-21 10:36:11',
                'id' => 869,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:36:11',
            ),
            78 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 144,
                'created_at' => '2021-01-21 10:39:15',
                'id' => 870,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:39:15',
            ),
            79 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 144,
                'created_at' => '2021-01-21 10:39:15',
                'id' => 871,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:39:15',
            ),
            80 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 144,
                'created_at' => '2021-01-21 10:39:15',
                'id' => 872,
                'locus_id' => 11,
                'updated_at' => '2021-01-21 10:39:15',
            ),
            81 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 144,
                'created_at' => '2021-01-21 10:39:15',
                'id' => 873,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 10:39:15',
            ),
            82 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 144,
                'created_at' => '2021-01-21 10:39:15',
                'id' => 874,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:39:15',
            ),
            83 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 144,
                'created_at' => '2021-01-21 10:39:15',
                'id' => 875,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:39:15',
            ),
            84 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 145,
                'created_at' => '2021-01-21 10:41:28',
                'id' => 876,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:41:28',
            ),
            85 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 145,
                'created_at' => '2021-01-21 10:41:28',
                'id' => 877,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:41:28',
            ),
            86 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 145,
                'created_at' => '2021-01-21 10:41:28',
                'id' => 878,
                'locus_id' => 3,
                'updated_at' => '2021-01-21 10:41:28',
            ),
            87 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 145,
                'created_at' => '2021-01-21 10:41:28',
                'id' => 879,
                'locus_id' => 4,
                'updated_at' => '2021-01-21 10:41:28',
            ),
            88 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 145,
                'created_at' => '2021-01-21 10:41:28',
                'id' => 880,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:41:28',
            ),
            89 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 145,
                'created_at' => '2021-01-21 10:41:28',
                'id' => 881,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:41:28',
            ),
            90 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 882,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            91 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 883,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            92 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 884,
                'locus_id' => 4,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            93 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 885,
                'locus_id' => 11,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            94 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 886,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            95 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 887,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            96 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 146,
                'created_at' => '2021-01-21 10:43:15',
                'id' => 888,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:43:15',
            ),
            97 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 147,
                'created_at' => '2021-01-21 10:45:30',
                'id' => 889,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:45:30',
            ),
            98 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 147,
                'created_at' => '2021-01-21 10:45:30',
                'id' => 890,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:45:30',
            ),
            99 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 147,
                'created_at' => '2021-01-21 10:45:30',
                'id' => 891,
                'locus_id' => 3,
                'updated_at' => '2021-01-21 10:45:30',
            ),
            100 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 147,
                'created_at' => '2021-01-21 10:45:30',
                'id' => 892,
                'locus_id' => 4,
                'updated_at' => '2021-01-21 10:45:30',
            ),
            101 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 147,
                'created_at' => '2021-01-21 10:45:30',
                'id' => 893,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 10:45:30',
            ),
            102 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 147,
                'created_at' => '2021-01-21 10:45:30',
                'id' => 894,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:45:30',
            ),
            103 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 148,
                'created_at' => '2021-01-21 10:47:57',
                'id' => 895,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:47:57',
            ),
            104 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 148,
                'created_at' => '2021-01-21 10:47:57',
                'id' => 896,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:47:57',
            ),
            105 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 148,
                'created_at' => '2021-01-21 10:47:57',
                'id' => 897,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:47:57',
            ),
            106 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 148,
                'created_at' => '2021-01-21 10:47:57',
                'id' => 898,
                'locus_id' => 27,
                'updated_at' => '2021-01-21 10:47:57',
            ),
            107 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 149,
                'created_at' => '2021-01-21 10:50:10',
                'id' => 899,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:50:10',
            ),
            108 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 149,
                'created_at' => '2021-01-21 10:50:10',
                'id' => 900,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:50:10',
            ),
            109 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 149,
                'created_at' => '2021-01-21 10:50:10',
                'id' => 901,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:50:10',
            ),
            110 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 149,
                'created_at' => '2021-01-21 10:50:10',
                'id' => 902,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:50:10',
            ),
            111 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 150,
                'created_at' => '2021-01-21 10:51:26',
                'id' => 903,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:51:26',
            ),
            112 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 150,
                'created_at' => '2021-01-21 10:51:26',
                'id' => 904,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:51:26',
            ),
            113 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 150,
                'created_at' => '2021-01-21 10:51:26',
                'id' => 905,
                'locus_id' => 11,
                'updated_at' => '2021-01-21 10:51:26',
            ),
            114 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 150,
                'created_at' => '2021-01-21 10:51:26',
                'id' => 906,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:51:26',
            ),
            115 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 150,
                'created_at' => '2021-01-21 10:51:26',
                'id' => 907,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:51:26',
            ),
            116 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 908,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            117 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 909,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            118 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 910,
                'locus_id' => 3,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            119 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 911,
                'locus_id' => 11,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            120 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 912,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            121 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 913,
                'locus_id' => 23,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            122 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 151,
                'created_at' => '2021-01-21 10:59:04',
                'id' => 914,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 10:59:04',
            ),
            123 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 915,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            124 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 916,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            125 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 917,
                'locus_id' => 3,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            126 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 918,
                'locus_id' => 11,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            127 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 919,
                'locus_id' => 14,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            128 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 920,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            129 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 152,
                'created_at' => '2021-01-21 11:00:58',
                'id' => 921,
                'locus_id' => 27,
                'updated_at' => '2021-01-21 11:00:58',
            ),
            130 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 153,
                'created_at' => '2021-01-21 11:04:28',
                'id' => 922,
                'locus_id' => 1,
                'updated_at' => '2021-01-21 11:04:28',
            ),
            131 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 153,
                'created_at' => '2021-01-21 11:04:28',
                'id' => 923,
                'locus_id' => 2,
                'updated_at' => '2021-01-21 11:04:28',
            ),
            132 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 153,
                'created_at' => '2021-01-21 11:04:28',
                'id' => 924,
                'locus_id' => 24,
                'updated_at' => '2021-01-21 11:04:28',
            ),
            133 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:20',
                'id' => 925,
                'locus_id' => 1,
                'updated_at' => '2021-04-27 17:23:20',
            ),
            134 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:20',
                'id' => 926,
                'locus_id' => 2,
                'updated_at' => '2021-04-27 17:23:20',
            ),
            135 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:20',
                'id' => 927,
                'locus_id' => 3,
                'updated_at' => '2021-04-27 17:23:20',
            ),
            136 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:20',
                'id' => 928,
                'locus_id' => 4,
                'updated_at' => '2021-04-27 17:23:20',
            ),
            137 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:20',
                'id' => 929,
                'locus_id' => 11,
                'updated_at' => '2021-04-27 17:23:20',
            ),
            138 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:21',
                'id' => 930,
                'locus_id' => 23,
                'updated_at' => '2021-04-27 17:23:21',
            ),
            139 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:21',
                'id' => 931,
                'locus_id' => 24,
                'updated_at' => '2021-04-27 17:23:21',
            ),
            140 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 154,
                'created_at' => '2021-04-27 17:23:21',
                'id' => 932,
                'locus_id' => 25,
                'updated_at' => '2021-04-27 17:23:21',
            ),
            141 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 155,
                'created_at' => '2021-04-27 20:21:52',
                'id' => 933,
                'locus_id' => 1,
                'updated_at' => '2021-04-27 20:21:52',
            ),
            142 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 155,
                'created_at' => '2021-04-27 20:21:52',
                'id' => 934,
                'locus_id' => 2,
                'updated_at' => '2021-04-27 20:21:52',
            ),
            143 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 155,
                'created_at' => '2021-04-27 20:21:52',
                'id' => 935,
                'locus_id' => 14,
                'updated_at' => '2021-04-27 20:21:52',
            ),
            144 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 155,
                'created_at' => '2021-04-27 20:21:52',
                'id' => 936,
                'locus_id' => 23,
                'updated_at' => '2021-04-27 20:21:52',
            ),
            145 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 155,
                'created_at' => '2021-04-27 20:21:52',
                'id' => 937,
                'locus_id' => 24,
                'updated_at' => '2021-04-27 20:21:52',
            ),
            146 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 938,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            147 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 5,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 939,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            148 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 7,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 940,
                'locus_id' => 3,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            149 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 39,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 941,
                'locus_id' => 21,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            150 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 942,
                'locus_id' => 23,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            151 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 943,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            152 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 156,
                'created_at' => '2022-10-14 17:47:58',
                'id' => 944,
                'locus_id' => 25,
                'updated_at' => '2022-10-14 17:47:58',
            ),
            153 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 157,
                'created_at' => '2022-10-14 17:49:43',
                'id' => 945,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 17:49:43',
            ),
            154 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 157,
                'created_at' => '2022-10-14 17:49:43',
                'id' => 946,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 17:49:43',
            ),
            155 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 38,
                'animal_id' => 157,
                'created_at' => '2022-10-14 17:49:43',
                'id' => 947,
                'locus_id' => 21,
                'updated_at' => '2022-10-14 17:49:43',
            ),
            156 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 157,
                'created_at' => '2022-10-14 17:49:43',
                'id' => 948,
                'locus_id' => 23,
                'updated_at' => '2022-10-14 17:49:43',
            ),
            157 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 157,
                'created_at' => '2022-10-14 17:49:43',
                'id' => 949,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 17:49:43',
            ),
            158 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 157,
                'created_at' => '2022-10-14 17:49:43',
                'id' => 950,
                'locus_id' => 25,
                'updated_at' => '2022-10-14 17:49:43',
            ),
            159 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 951,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            160 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 952,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            161 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 953,
                'locus_id' => 3,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            162 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 954,
                'locus_id' => 21,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            163 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 955,
                'locus_id' => 23,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            164 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 956,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            165 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 957,
                'locus_id' => 25,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            166 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 158,
                'created_at' => '2022-10-14 17:55:00',
                'id' => 958,
                'locus_id' => 26,
                'updated_at' => '2022-10-14 17:55:00',
            ),
            167 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 159,
                'created_at' => '2022-10-14 17:56:52',
                'id' => 959,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 17:56:52',
            ),
            168 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 3,
                'animal_id' => 159,
                'created_at' => '2022-10-14 17:56:52',
                'id' => 960,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 17:56:52',
            ),
            169 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 159,
                'created_at' => '2022-10-14 17:56:52',
                'id' => 961,
                'locus_id' => 11,
                'updated_at' => '2022-10-14 17:56:52',
            ),
            170 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 159,
                'created_at' => '2022-10-14 17:56:52',
                'id' => 962,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 17:56:52',
            ),
            171 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 159,
                'created_at' => '2022-10-14 17:56:52',
                'id' => 963,
                'locus_id' => 25,
                'updated_at' => '2022-10-14 17:56:52',
            ),
            172 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 160,
                'created_at' => '2022-10-14 20:19:48',
                'id' => 964,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 20:19:48',
            ),
            173 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 160,
                'created_at' => '2022-10-14 20:19:48',
                'id' => 965,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 20:19:48',
            ),
            174 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 160,
                'created_at' => '2022-10-14 20:19:48',
                'id' => 966,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 20:19:48',
            ),
            175 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 160,
                'created_at' => '2022-10-14 20:19:48',
                'id' => 967,
                'locus_id' => 26,
                'updated_at' => '2022-10-14 20:19:48',
            ),
            176 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 161,
                'created_at' => '2022-10-14 20:22:27',
                'id' => 968,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 20:22:27',
            ),
            177 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 161,
                'created_at' => '2022-10-14 20:22:27',
                'id' => 969,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 20:22:27',
            ),
            178 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 38,
                'animal_id' => 161,
                'created_at' => '2022-10-14 20:22:27',
                'id' => 970,
                'locus_id' => 21,
                'updated_at' => '2022-10-14 20:22:27',
            ),
            179 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 161,
                'created_at' => '2022-10-14 20:22:27',
                'id' => 971,
                'locus_id' => 23,
                'updated_at' => '2022-10-14 20:22:27',
            ),
            180 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 161,
                'created_at' => '2022-10-14 20:22:27',
                'id' => 972,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 20:22:27',
            ),
            181 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 161,
                'created_at' => '2022-10-14 20:22:27',
                'id' => 973,
                'locus_id' => 25,
                'updated_at' => '2022-10-14 20:22:27',
            ),
            182 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:00',
                'id' => 974,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 20:25:00',
            ),
            183 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:00',
                'id' => 975,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 20:25:00',
            ),
            184 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:00',
                'id' => 976,
                'locus_id' => 3,
                'updated_at' => '2022-10-14 20:25:00',
            ),
            185 => 
            array (
                'allele_m_id' => 39,
                'allele_p_id' => 38,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:00',
                'id' => 977,
                'locus_id' => 21,
                'updated_at' => '2022-10-14 20:25:00',
            ),
            186 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:00',
                'id' => 978,
                'locus_id' => 23,
                'updated_at' => '2022-10-14 20:25:00',
            ),
            187 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:01',
                'id' => 979,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 20:25:01',
            ),
            188 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 162,
                'created_at' => '2022-10-14 20:25:01',
                'id' => 980,
                'locus_id' => 25,
                'updated_at' => '2022-10-14 20:25:01',
            ),
            189 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 163,
                'created_at' => '2022-10-14 20:27:30',
                'id' => 981,
                'locus_id' => 1,
                'updated_at' => '2022-10-14 20:27:30',
            ),
            190 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 163,
                'created_at' => '2022-10-14 20:27:30',
                'id' => 982,
                'locus_id' => 2,
                'updated_at' => '2022-10-14 20:27:30',
            ),
            191 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 163,
                'created_at' => '2022-10-14 20:27:30',
                'id' => 983,
                'locus_id' => 23,
                'updated_at' => '2022-10-14 20:27:30',
            ),
            192 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 163,
                'created_at' => '2022-10-14 20:27:30',
                'id' => 984,
                'locus_id' => 24,
                'updated_at' => '2022-10-14 20:27:30',
            ),
            193 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 163,
                'created_at' => '2022-10-14 20:27:30',
                'id' => 985,
                'locus_id' => 26,
                'updated_at' => '2022-10-14 20:27:30',
            ),
            194 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 986,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            195 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 987,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            196 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 7,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 988,
                'locus_id' => 3,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            197 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 23,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 989,
                'locus_id' => 4,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            198 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 29,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 990,
                'locus_id' => 9,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            199 => 
            array (
                'allele_m_id' => 14,
                'allele_p_id' => 14,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 991,
                'locus_id' => 10,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            200 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 16,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 992,
                'locus_id' => 11,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            201 => 
            array (
                'allele_m_id' => 10,
                'allele_p_id' => 10,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 993,
                'locus_id' => 13,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            202 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 31,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 994,
                'locus_id' => 14,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            203 => 
            array (
                'allele_m_id' => 12,
                'allele_p_id' => 12,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 995,
                'locus_id' => 15,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            204 => 
            array (
                'allele_m_id' => 26,
                'allele_p_id' => 26,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 996,
                'locus_id' => 16,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            205 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 21,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 997,
                'locus_id' => 17,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            206 => 
            array (
                'allele_m_id' => 33,
                'allele_p_id' => 33,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 998,
                'locus_id' => 18,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            207 => 
            array (
                'allele_m_id' => 35,
                'allele_p_id' => 35,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 999,
                'locus_id' => 19,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            208 => 
            array (
                'allele_m_id' => 38,
                'allele_p_id' => 38,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1000,
                'locus_id' => 21,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            209 => 
            array (
                'allele_m_id' => 37,
                'allele_p_id' => 37,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1001,
                'locus_id' => 22,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            210 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1002,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            211 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1003,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            212 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1004,
                'locus_id' => 25,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            213 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 47,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1005,
                'locus_id' => 26,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            214 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 48,
                'animal_id' => 164,
                'created_at' => '2023-02-06 11:32:53',
                'id' => 1006,
                'locus_id' => 27,
                'updated_at' => '2023-02-06 11:32:53',
            ),
            215 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 165,
                'created_at' => '2023-02-06 11:35:04',
                'id' => 1007,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 11:35:04',
            ),
            216 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 165,
                'created_at' => '2023-02-06 11:35:04',
                'id' => 1008,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 11:35:04',
            ),
            217 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 165,
                'created_at' => '2023-02-06 11:35:04',
                'id' => 1009,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 11:35:04',
            ),
            218 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 165,
                'created_at' => '2023-02-06 11:35:04',
                'id' => 1010,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 11:35:04',
            ),
            219 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 165,
                'created_at' => '2023-02-06 11:35:04',
                'id' => 1011,
                'locus_id' => 26,
                'updated_at' => '2023-02-06 11:35:04',
            ),
            220 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 166,
                'created_at' => '2023-02-06 11:37:25',
                'id' => 1012,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 11:37:25',
            ),
            221 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 166,
                'created_at' => '2023-02-06 11:37:25',
                'id' => 1013,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 11:37:25',
            ),
            222 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 166,
                'created_at' => '2023-02-06 11:37:25',
                'id' => 1014,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 11:37:25',
            ),
            223 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 166,
                'created_at' => '2023-02-06 11:37:25',
                'id' => 1015,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 11:37:25',
            ),
            224 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 167,
                'created_at' => '2023-02-06 12:06:21',
                'id' => 1016,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 12:06:21',
            ),
            225 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 167,
                'created_at' => '2023-02-06 12:06:21',
                'id' => 1017,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 12:06:21',
            ),
            226 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 167,
                'created_at' => '2023-02-06 12:06:21',
                'id' => 1018,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 12:06:21',
            ),
            227 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 167,
                'created_at' => '2023-02-06 12:06:21',
                'id' => 1019,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 12:06:21',
            ),
            228 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 168,
                'created_at' => '2023-02-06 12:07:57',
                'id' => 1020,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 12:07:57',
            ),
            229 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 168,
                'created_at' => '2023-02-06 12:07:57',
                'id' => 1021,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 12:07:57',
            ),
            230 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 168,
                'created_at' => '2023-02-06 12:07:57',
                'id' => 1022,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 12:07:57',
            ),
            231 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 168,
                'created_at' => '2023-02-06 12:07:57',
                'id' => 1023,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 12:07:57',
            ),
            232 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 169,
                'created_at' => '2023-02-06 12:09:54',
                'id' => 1024,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 12:09:54',
            ),
            233 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 169,
                'created_at' => '2023-02-06 12:09:54',
                'id' => 1025,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 12:09:54',
            ),
            234 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 169,
                'created_at' => '2023-02-06 12:09:54',
                'id' => 1026,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 12:09:54',
            ),
            235 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 169,
                'created_at' => '2023-02-06 12:09:54',
                'id' => 1027,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 12:09:54',
            ),
            236 => 
            array (
                'allele_m_id' => 8,
                'allele_p_id' => 47,
                'animal_id' => 169,
                'created_at' => '2023-02-06 12:09:54',
                'id' => 1028,
                'locus_id' => 26,
                'updated_at' => '2023-02-06 12:09:54',
            ),
            237 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 170,
                'created_at' => '2023-02-06 12:16:47',
                'id' => 1029,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 12:16:47',
            ),
            238 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 170,
                'created_at' => '2023-02-06 12:16:47',
                'id' => 1030,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 12:16:47',
            ),
            239 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 170,
                'created_at' => '2023-02-06 12:16:47',
                'id' => 1031,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 12:16:47',
            ),
            240 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 170,
                'created_at' => '2023-02-06 12:16:47',
                'id' => 1032,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 12:16:47',
            ),
            241 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 170,
                'created_at' => '2023-02-06 12:16:47',
                'id' => 1033,
                'locus_id' => 26,
                'updated_at' => '2023-02-06 12:16:47',
            ),
            242 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 171,
                'created_at' => '2023-02-06 17:55:17',
                'id' => 1034,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 17:55:17',
            ),
            243 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 171,
                'created_at' => '2023-02-06 17:55:17',
                'id' => 1035,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 17:55:17',
            ),
            244 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 171,
                'created_at' => '2023-02-06 17:55:17',
                'id' => 1036,
                'locus_id' => 3,
                'updated_at' => '2023-02-06 17:55:17',
            ),
            245 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 171,
                'created_at' => '2023-02-06 17:55:17',
                'id' => 1037,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 17:55:17',
            ),
            246 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 171,
                'created_at' => '2023-02-06 17:55:17',
                'id' => 1038,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 17:55:17',
            ),
            247 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 172,
                'created_at' => '2023-02-06 17:59:44',
                'id' => 1039,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 17:59:44',
            ),
            248 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 172,
                'created_at' => '2023-02-06 17:59:44',
                'id' => 1040,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 17:59:44',
            ),
            249 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 16,
                'animal_id' => 172,
                'created_at' => '2023-02-06 17:59:44',
                'id' => 1041,
                'locus_id' => 11,
                'updated_at' => '2023-02-06 17:59:44',
            ),
            250 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 172,
                'created_at' => '2023-02-06 17:59:44',
                'id' => 1042,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 17:59:44',
            ),
            251 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 172,
                'created_at' => '2023-02-06 17:59:44',
                'id' => 1043,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 17:59:44',
            ),
            252 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 172,
                'created_at' => '2023-02-06 17:59:44',
                'id' => 1044,
                'locus_id' => 25,
                'updated_at' => '2023-02-06 17:59:44',
            ),
            253 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 173,
                'created_at' => '2023-02-06 18:17:50',
                'id' => 1045,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 18:17:50',
            ),
            254 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 173,
                'created_at' => '2023-02-06 18:17:50',
                'id' => 1046,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 18:17:50',
            ),
            255 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 173,
                'created_at' => '2023-02-06 18:17:50',
                'id' => 1047,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 18:17:50',
            ),
            256 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 173,
                'created_at' => '2023-02-06 18:17:50',
                'id' => 1048,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 18:17:50',
            ),
            257 => 
            array (
                'allele_m_id' => 45,
                'allele_p_id' => 46,
                'animal_id' => 173,
                'created_at' => '2023-02-06 18:17:50',
                'id' => 1049,
                'locus_id' => 25,
                'updated_at' => '2023-02-06 18:17:50',
            ),
            258 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 174,
                'created_at' => '2023-02-06 18:19:26',
                'id' => 1050,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 18:19:26',
            ),
            259 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 174,
                'created_at' => '2023-02-06 18:19:26',
                'id' => 1051,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 18:19:26',
            ),
            260 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 174,
                'created_at' => '2023-02-06 18:19:26',
                'id' => 1052,
                'locus_id' => 3,
                'updated_at' => '2023-02-06 18:19:26',
            ),
            261 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 174,
                'created_at' => '2023-02-06 18:19:26',
                'id' => 1053,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 18:19:26',
            ),
            262 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 174,
                'created_at' => '2023-02-06 18:19:26',
                'id' => 1054,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 18:19:26',
            ),
            263 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 174,
                'created_at' => '2023-02-06 18:19:26',
                'id' => 1055,
                'locus_id' => 25,
                'updated_at' => '2023-02-06 18:19:26',
            ),
            264 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 175,
                'created_at' => '2023-02-06 18:22:38',
                'id' => 1056,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 18:22:38',
            ),
            265 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 5,
                'animal_id' => 175,
                'created_at' => '2023-02-06 18:22:38',
                'id' => 1057,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 18:22:38',
            ),
            266 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 175,
                'created_at' => '2023-02-06 18:22:38',
                'id' => 1058,
                'locus_id' => 11,
                'updated_at' => '2023-02-06 18:22:38',
            ),
            267 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 175,
                'created_at' => '2023-02-06 18:22:38',
                'id' => 1059,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 18:22:38',
            ),
            268 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 175,
                'created_at' => '2023-02-06 18:22:38',
                'id' => 1060,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 18:22:38',
            ),
            269 => 
            array (
                'allele_m_id' => 45,
                'allele_p_id' => 46,
                'animal_id' => 175,
                'created_at' => '2023-02-06 18:22:38',
                'id' => 1061,
                'locus_id' => 25,
                'updated_at' => '2023-02-06 18:22:38',
            ),
            270 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 176,
                'created_at' => '2023-02-06 18:24:07',
                'id' => 1062,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 18:24:07',
            ),
            271 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 176,
                'created_at' => '2023-02-06 18:24:07',
                'id' => 1063,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 18:24:07',
            ),
            272 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 176,
                'created_at' => '2023-02-06 18:24:07',
                'id' => 1064,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 18:24:07',
            ),
            273 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 176,
                'created_at' => '2023-02-06 18:24:07',
                'id' => 1065,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 18:24:07',
            ),
            274 => 
            array (
                'allele_m_id' => 8,
                'allele_p_id' => 8,
                'animal_id' => 176,
                'created_at' => '2023-02-06 18:24:07',
                'id' => 1066,
                'locus_id' => 26,
                'updated_at' => '2023-02-06 18:24:07',
            ),
            275 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1067,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            276 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1068,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            277 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1069,
                'locus_id' => 3,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            278 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1070,
                'locus_id' => 4,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            279 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1071,
                'locus_id' => 14,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            280 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1072,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            281 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 177,
                'created_at' => '2023-02-06 19:53:16',
                'id' => 1073,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 19:53:16',
            ),
            282 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 178,
                'created_at' => '2023-02-06 19:57:24',
                'id' => 1074,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 19:57:24',
            ),
            283 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 178,
                'created_at' => '2023-02-06 19:57:24',
                'id' => 1075,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 19:57:24',
            ),
            284 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 178,
                'created_at' => '2023-02-06 19:57:24',
                'id' => 1076,
                'locus_id' => 11,
                'updated_at' => '2023-02-06 19:57:24',
            ),
            285 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 178,
                'created_at' => '2023-02-06 19:57:24',
                'id' => 1077,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 19:57:24',
            ),
            286 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 178,
                'created_at' => '2023-02-06 19:57:24',
                'id' => 1078,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 19:57:24',
            ),
            287 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 179,
                'created_at' => '2023-02-06 19:59:58',
                'id' => 1079,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 19:59:58',
            ),
            288 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 179,
                'created_at' => '2023-02-06 19:59:58',
                'id' => 1080,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 19:59:58',
            ),
            289 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 179,
                'created_at' => '2023-02-06 19:59:58',
                'id' => 1081,
                'locus_id' => 3,
                'updated_at' => '2023-02-06 19:59:58',
            ),
            290 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 31,
                'animal_id' => 179,
                'created_at' => '2023-02-06 19:59:58',
                'id' => 1082,
                'locus_id' => 14,
                'updated_at' => '2023-02-06 19:59:58',
            ),
            291 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 179,
                'created_at' => '2023-02-06 19:59:58',
                'id' => 1083,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 19:59:58',
            ),
            292 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 179,
                'created_at' => '2023-02-06 19:59:58',
                'id' => 1084,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 19:59:58',
            ),
            293 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 180,
                'created_at' => '2023-02-06 20:04:08',
                'id' => 1085,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 20:04:08',
            ),
            294 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 180,
                'created_at' => '2023-02-06 20:04:08',
                'id' => 1086,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 20:04:08',
            ),
            295 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 180,
                'created_at' => '2023-02-06 20:04:08',
                'id' => 1087,
                'locus_id' => 3,
                'updated_at' => '2023-02-06 20:04:08',
            ),
            296 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 180,
                'created_at' => '2023-02-06 20:04:08',
                'id' => 1088,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 20:04:08',
            ),
            297 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 180,
                'created_at' => '2023-02-06 20:04:08',
                'id' => 1089,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 20:04:08',
            ),
            298 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 181,
                'created_at' => '2023-02-06 20:11:36',
                'id' => 1090,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 20:11:36',
            ),
            299 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 181,
                'created_at' => '2023-02-06 20:11:37',
                'id' => 1091,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 20:11:37',
            ),
            300 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 181,
                'created_at' => '2023-02-06 20:11:37',
                'id' => 1092,
                'locus_id' => 4,
                'updated_at' => '2023-02-06 20:11:37',
            ),
            301 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 181,
                'created_at' => '2023-02-06 20:11:37',
                'id' => 1093,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 20:11:37',
            ),
            302 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 181,
                'created_at' => '2023-02-06 20:11:37',
                'id' => 1094,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 20:11:37',
            ),
            303 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 182,
                'created_at' => '2023-02-06 20:14:39',
                'id' => 1095,
                'locus_id' => 1,
                'updated_at' => '2023-02-06 20:14:39',
            ),
            304 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 182,
                'created_at' => '2023-02-06 20:14:39',
                'id' => 1096,
                'locus_id' => 2,
                'updated_at' => '2023-02-06 20:14:39',
            ),
            305 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 182,
                'created_at' => '2023-02-06 20:14:39',
                'id' => 1097,
                'locus_id' => 11,
                'updated_at' => '2023-02-06 20:14:39',
            ),
            306 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 182,
                'created_at' => '2023-02-06 20:14:39',
                'id' => 1098,
                'locus_id' => 23,
                'updated_at' => '2023-02-06 20:14:39',
            ),
            307 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 182,
                'created_at' => '2023-02-06 20:14:39',
                'id' => 1099,
                'locus_id' => 24,
                'updated_at' => '2023-02-06 20:14:39',
            ),
            308 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 182,
                'created_at' => '2023-02-06 20:14:39',
                'id' => 1100,
                'locus_id' => 25,
                'updated_at' => '2023-02-06 20:14:39',
            ),
            309 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 188,
                'created_at' => '2023-08-26 11:38:40',
                'id' => 1101,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:38:40',
            ),
            310 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 188,
                'created_at' => '2023-08-26 11:38:40',
                'id' => 1102,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:38:40',
            ),
            311 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 188,
                'created_at' => '2023-08-26 11:38:40',
                'id' => 1103,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:38:40',
            ),
            312 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 188,
                'created_at' => '2023-08-26 11:38:40',
                'id' => 1104,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:38:40',
            ),
            313 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 189,
                'created_at' => '2023-08-26 11:40:43',
                'id' => 1105,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:40:43',
            ),
            314 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 189,
                'created_at' => '2023-08-26 11:40:43',
                'id' => 1106,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:40:43',
            ),
            315 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 189,
                'created_at' => '2023-08-26 11:40:43',
                'id' => 1107,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 11:40:43',
            ),
            316 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 189,
                'created_at' => '2023-08-26 11:40:43',
                'id' => 1108,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:40:43',
            ),
            317 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 189,
                'created_at' => '2023-08-26 11:40:43',
                'id' => 1109,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:40:43',
            ),
            318 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 189,
                'created_at' => '2023-08-26 11:40:43',
                'id' => 1110,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:40:43',
            ),
            319 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 190,
                'created_at' => '2023-08-26 11:42:12',
                'id' => 1111,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:42:12',
            ),
            320 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 190,
                'created_at' => '2023-08-26 11:42:13',
                'id' => 1112,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:42:13',
            ),
            321 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 190,
                'created_at' => '2023-08-26 11:42:13',
                'id' => 1113,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 11:42:13',
            ),
            322 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 190,
                'created_at' => '2023-08-26 11:42:13',
                'id' => 1114,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:42:13',
            ),
            323 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 190,
                'created_at' => '2023-08-26 11:42:13',
                'id' => 1115,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:42:13',
            ),
            324 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 190,
                'created_at' => '2023-08-26 11:42:13',
                'id' => 1116,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:42:13',
            ),
            325 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 191,
                'created_at' => '2023-08-26 11:44:04',
                'id' => 1117,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:44:04',
            ),
            326 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 191,
                'created_at' => '2023-08-26 11:44:04',
                'id' => 1118,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:44:04',
            ),
            327 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 191,
                'created_at' => '2023-08-26 11:44:04',
                'id' => 1119,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 11:44:04',
            ),
            328 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 191,
                'created_at' => '2023-08-26 11:44:04',
                'id' => 1120,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:44:04',
            ),
            329 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 191,
                'created_at' => '2023-08-26 11:44:04',
                'id' => 1121,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:44:04',
            ),
            330 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 191,
                'created_at' => '2023-08-26 11:44:04',
                'id' => 1122,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:44:04',
            ),
            331 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 192,
                'created_at' => '2023-08-26 11:45:50',
                'id' => 1123,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:45:50',
            ),
            332 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 192,
                'created_at' => '2023-08-26 11:45:50',
                'id' => 1124,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:45:50',
            ),
            333 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 192,
                'created_at' => '2023-08-26 11:45:50',
                'id' => 1125,
                'locus_id' => 14,
                'updated_at' => '2023-08-26 11:45:50',
            ),
            334 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 192,
                'created_at' => '2023-08-26 11:45:50',
                'id' => 1126,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:45:50',
            ),
            335 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 192,
                'created_at' => '2023-08-26 11:45:50',
                'id' => 1127,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:45:50',
            ),
            336 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 192,
                'created_at' => '2023-08-26 11:45:50',
                'id' => 1128,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:45:50',
            ),
            337 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 193,
                'created_at' => '2023-08-26 11:52:05',
                'id' => 1129,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:52:05',
            ),
            338 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 193,
                'created_at' => '2023-08-26 11:52:05',
                'id' => 1130,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:52:05',
            ),
            339 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 193,
                'created_at' => '2023-08-26 11:52:05',
                'id' => 1131,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:52:05',
            ),
            340 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 193,
                'created_at' => '2023-08-26 11:52:05',
                'id' => 1132,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:52:05',
            ),
            341 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 193,
                'created_at' => '2023-08-26 11:52:05',
                'id' => 1133,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:52:05',
            ),
            342 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 194,
                'created_at' => '2023-08-26 11:54:27',
                'id' => 1134,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:54:27',
            ),
            343 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 194,
                'created_at' => '2023-08-26 11:54:27',
                'id' => 1135,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:54:27',
            ),
            344 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 18,
                'animal_id' => 194,
                'created_at' => '2023-08-26 11:54:27',
                'id' => 1136,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 11:54:27',
            ),
            345 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 194,
                'created_at' => '2023-08-26 11:54:27',
                'id' => 1137,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:54:27',
            ),
            346 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 194,
                'created_at' => '2023-08-26 11:54:27',
                'id' => 1138,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:54:27',
            ),
            347 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 194,
                'created_at' => '2023-08-26 11:54:27',
                'id' => 1139,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:54:27',
            ),
            348 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1140,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            349 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 5,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1141,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            350 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1142,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            351 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 7,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1143,
                'locus_id' => 22,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            352 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1144,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            353 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1145,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            354 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 195,
                'created_at' => '2023-08-26 11:58:30',
                'id' => 1146,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 11:58:30',
            ),
            355 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1147,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            356 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1148,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            357 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1149,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            358 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1150,
                'locus_id' => 4,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            359 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1151,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            360 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1152,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            361 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 196,
                'created_at' => '2023-08-26 13:12:49',
                'id' => 1153,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:12:49',
            ),
            362 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 197,
                'created_at' => '2023-08-26 13:14:49',
                'id' => 1154,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:14:49',
            ),
            363 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 197,
                'created_at' => '2023-08-26 13:14:49',
                'id' => 1155,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:14:49',
            ),
            364 => 
            array (
                'allele_m_id' => 13,
                'allele_p_id' => 14,
                'animal_id' => 197,
                'created_at' => '2023-08-26 13:14:49',
                'id' => 1156,
                'locus_id' => 10,
                'updated_at' => '2023-08-26 13:14:49',
            ),
            365 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 197,
                'created_at' => '2023-08-26 13:14:49',
                'id' => 1157,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:14:49',
            ),
            366 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 197,
                'created_at' => '2023-08-26 13:14:49',
                'id' => 1158,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:14:49',
            ),
            367 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:20',
                'id' => 1159,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:16:20',
            ),
            368 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:20',
                'id' => 1160,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:16:20',
            ),
            369 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:20',
                'id' => 1161,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:16:20',
            ),
            370 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:20',
                'id' => 1162,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:16:20',
            ),
            371 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:20',
                'id' => 1163,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:16:20',
            ),
            372 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:21',
                'id' => 1164,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:16:21',
            ),
            373 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 198,
                'created_at' => '2023-08-26 13:16:21',
                'id' => 1165,
                'locus_id' => 27,
                'updated_at' => '2023-08-26 13:16:21',
            ),
            374 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1166,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            375 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1167,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            376 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1168,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            377 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1169,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            378 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1170,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            379 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1171,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            380 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 199,
                'created_at' => '2023-08-26 13:18:48',
                'id' => 1172,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:18:48',
            ),
            381 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 200,
                'created_at' => '2023-08-26 13:23:15',
                'id' => 1173,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:23:15',
            ),
            382 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 200,
                'created_at' => '2023-08-26 13:23:15',
                'id' => 1174,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:23:15',
            ),
            383 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 200,
                'created_at' => '2023-08-26 13:23:15',
                'id' => 1175,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:23:15',
            ),
            384 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 200,
                'created_at' => '2023-08-26 13:23:15',
                'id' => 1176,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:23:15',
            ),
            385 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 200,
                'created_at' => '2023-08-26 13:23:15',
                'id' => 1177,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:23:15',
            ),
            386 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 200,
                'created_at' => '2023-08-26 13:23:15',
                'id' => 1178,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:23:15',
            ),
            387 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 201,
                'created_at' => '2023-08-26 13:24:45',
                'id' => 1179,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:24:45',
            ),
            388 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 149,
                'created_at' => '2023-08-26 13:24:45',
                'id' => 1180,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:24:45',
            ),
            389 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 7,
                'animal_id' => 201,
                'created_at' => '2023-08-26 13:24:45',
                'id' => 1181,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:24:45',
            ),
            390 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 201,
                'created_at' => '2023-08-26 13:24:45',
                'id' => 1182,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 13:24:45',
            ),
            391 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 201,
                'created_at' => '2023-08-26 13:24:45',
                'id' => 1183,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:24:45',
            ),
            392 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 201,
                'created_at' => '2023-08-26 13:24:45',
                'id' => 1184,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:24:45',
            ),
            393 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1185,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            394 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1186,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            395 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1187,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            396 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1188,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            397 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1189,
                'locus_id' => 14,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            398 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1190,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            399 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1191,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            400 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 202,
                'created_at' => '2023-08-26 13:26:55',
                'id' => 1192,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:26:55',
            ),
            401 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 203,
                'created_at' => '2023-08-26 13:44:15',
                'id' => 1193,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:44:15',
            ),
            402 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 203,
                'created_at' => '2023-08-26 13:44:15',
                'id' => 1194,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:44:15',
            ),
            403 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 203,
                'created_at' => '2023-08-26 13:44:15',
                'id' => 1195,
                'locus_id' => 3,
                'updated_at' => '2023-08-26 13:44:15',
            ),
            404 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 16,
                'animal_id' => 203,
                'created_at' => '2023-08-26 13:44:15',
                'id' => 1196,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 13:44:15',
            ),
            405 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 203,
                'created_at' => '2023-08-26 13:44:15',
                'id' => 1197,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:44:15',
            ),
            406 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 203,
                'created_at' => '2023-08-26 13:44:15',
                'id' => 1198,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:44:15',
            ),
            407 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1199,
                'locus_id' => 1,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            408 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1200,
                'locus_id' => 2,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            409 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1201,
                'locus_id' => 11,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            410 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1202,
                'locus_id' => 23,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            411 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1203,
                'locus_id' => 24,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            412 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1204,
                'locus_id' => 25,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            413 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 204,
                'created_at' => '2023-08-26 13:45:39',
                'id' => 1205,
                'locus_id' => 27,
                'updated_at' => '2023-08-26 13:45:39',
            ),
            414 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 10,
                'created_at' => NULL,
                'id' => 1206,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 178,
                'created_at' => NULL,
                'id' => 1207,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 25,
                'created_at' => NULL,
                'id' => 1208,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 20,
                'animal_id' => 36,
                'created_at' => NULL,
                'id' => 1209,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 95,
                'created_at' => NULL,
                'id' => 1210,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 100,
                'created_at' => NULL,
                'id' => 1211,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 150,
                'created_at' => NULL,
                'id' => 1212,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 51,
                'created_at' => NULL,
                'id' => 1213,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 184,
                'created_at' => NULL,
                'id' => 1214,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 21,
                'animal_id' => 103,
                'created_at' => NULL,
                'id' => 1215,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 187,
                'created_at' => NULL,
                'id' => 1216,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 203,
                'created_at' => NULL,
                'id' => 1217,
                'locus_id' => 17,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1218,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            427 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1219,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            428 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 19,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1220,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            429 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1221,
                'locus_id' => 17,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            430 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1222,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            431 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1223,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            432 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 205,
                'created_at' => '2023-08-28 19:56:51',
                'id' => 1224,
                'locus_id' => 25,
                'updated_at' => '2023-08-28 19:56:51',
            ),
            433 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1225,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            434 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1226,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            435 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 7,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1227,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            436 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1228,
                'locus_id' => 11,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            437 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 42,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1229,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            438 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1230,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            439 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 206,
                'created_at' => '2023-08-28 20:04:26',
                'id' => 1231,
                'locus_id' => 25,
                'updated_at' => '2023-08-28 20:04:26',
            ),
            440 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 207,
                'created_at' => '2023-08-28 20:09:55',
                'id' => 1232,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:09:55',
            ),
            441 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 207,
                'created_at' => '2023-08-28 20:09:55',
                'id' => 1233,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:09:55',
            ),
            442 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 207,
                'created_at' => '2023-08-28 20:09:55',
                'id' => 1234,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:09:55',
            ),
            443 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 207,
                'created_at' => '2023-08-28 20:09:55',
                'id' => 1235,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:09:55',
            ),
            444 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 207,
                'created_at' => '2023-08-28 20:09:55',
                'id' => 1236,
                'locus_id' => 25,
                'updated_at' => '2023-08-28 20:09:55',
            ),
            445 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 2,
                'animal_id' => 208,
                'created_at' => '2023-08-28 20:14:47',
                'id' => 1237,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:14:47',
            ),
            446 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 208,
                'created_at' => '2023-08-28 20:14:47',
                'id' => 1238,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:14:47',
            ),
            447 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 208,
                'created_at' => '2023-08-28 20:14:47',
                'id' => 1239,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 20:14:47',
            ),
            448 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 208,
                'created_at' => '2023-08-28 20:14:47',
                'id' => 1240,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:14:47',
            ),
            449 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 208,
                'created_at' => '2023-08-28 20:14:47',
                'id' => 1241,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:14:47',
            ),
            450 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 208,
                'created_at' => '2023-08-28 20:14:47',
                'id' => 1242,
                'locus_id' => 25,
                'updated_at' => '2023-08-28 20:14:47',
            ),
            451 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 209,
                'created_at' => '2023-08-28 20:17:07',
                'id' => 1243,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:17:07',
            ),
            452 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 209,
                'created_at' => '2023-08-28 20:17:07',
                'id' => 1244,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:17:07',
            ),
            453 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 209,
                'created_at' => '2023-08-28 20:17:07',
                'id' => 1245,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 20:17:07',
            ),
            454 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 209,
                'created_at' => '2023-08-28 20:17:07',
                'id' => 1246,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:17:07',
            ),
            455 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 209,
                'created_at' => '2023-08-28 20:17:07',
                'id' => 1247,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:17:07',
            ),
            456 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 46,
                'animal_id' => 209,
                'created_at' => '2023-08-28 20:17:07',
                'id' => 1248,
                'locus_id' => 25,
                'updated_at' => '2023-08-28 20:17:07',
            ),
            457 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 210,
                'created_at' => '2023-08-28 20:18:32',
                'id' => 1249,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:18:32',
            ),
            458 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 210,
                'created_at' => '2023-08-28 20:18:33',
                'id' => 1250,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:18:33',
            ),
            459 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 210,
                'created_at' => '2023-08-28 20:18:33',
                'id' => 1251,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:18:33',
            ),
            460 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 210,
                'created_at' => '2023-08-28 20:18:33',
                'id' => 1252,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:18:33',
            ),
            461 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 210,
                'created_at' => '2023-08-28 20:18:33',
                'id' => 1253,
                'locus_id' => 27,
                'updated_at' => '2023-08-28 20:18:33',
            ),
            462 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1254,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            463 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1255,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            464 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1256,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            465 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1257,
                'locus_id' => 17,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            466 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1258,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            467 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1259,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            468 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 211,
                'created_at' => '2023-08-28 20:20:14',
                'id' => 1260,
                'locus_id' => 27,
                'updated_at' => '2023-08-28 20:20:14',
            ),
            469 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 212,
                'created_at' => '2023-08-28 20:21:56',
                'id' => 1261,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:21:56',
            ),
            470 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 212,
                'created_at' => '2023-08-28 20:21:56',
                'id' => 1262,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:21:56',
            ),
            471 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 212,
                'created_at' => '2023-08-28 20:21:56',
                'id' => 1263,
                'locus_id' => 14,
                'updated_at' => '2023-08-28 20:21:56',
            ),
            472 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 212,
                'created_at' => '2023-08-28 20:21:56',
                'id' => 1264,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:21:56',
            ),
            473 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 212,
                'created_at' => '2023-08-28 20:21:56',
                'id' => 1265,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:21:56',
            ),
            474 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 213,
                'created_at' => '2023-08-28 20:23:38',
                'id' => 1266,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:23:38',
            ),
            475 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 213,
                'created_at' => '2023-08-28 20:23:39',
                'id' => 1267,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:23:39',
            ),
            476 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 213,
                'created_at' => '2023-08-28 20:23:39',
                'id' => 1268,
                'locus_id' => 11,
                'updated_at' => '2023-08-28 20:23:39',
            ),
            477 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 213,
                'created_at' => '2023-08-28 20:23:39',
                'id' => 1269,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:23:39',
            ),
            478 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 213,
                'created_at' => '2023-08-28 20:23:39',
                'id' => 1270,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:23:39',
            ),
            479 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 214,
                'created_at' => '2023-08-28 20:25:17',
                'id' => 1271,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:25:17',
            ),
            480 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 214,
                'created_at' => '2023-08-28 20:25:17',
                'id' => 1272,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:25:17',
            ),
            481 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 214,
                'created_at' => '2023-08-28 20:25:17',
                'id' => 1273,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 20:25:17',
            ),
            482 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 214,
                'created_at' => '2023-08-28 20:25:17',
                'id' => 1274,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:25:17',
            ),
            483 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 214,
                'created_at' => '2023-08-28 20:25:17',
                'id' => 1275,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:25:17',
            ),
            484 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 214,
                'created_at' => '2023-08-28 20:25:17',
                'id' => 1276,
                'locus_id' => 27,
                'updated_at' => '2023-08-28 20:25:17',
            ),
            485 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 215,
                'created_at' => '2023-08-28 20:26:21',
                'id' => 1277,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:26:21',
            ),
            486 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 215,
                'created_at' => '2023-08-28 20:26:21',
                'id' => 1278,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:26:21',
            ),
            487 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 215,
                'created_at' => '2023-08-28 20:26:21',
                'id' => 1279,
                'locus_id' => 11,
                'updated_at' => '2023-08-28 20:26:21',
            ),
            488 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 215,
                'created_at' => '2023-08-28 20:26:21',
                'id' => 1280,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:26:21',
            ),
            489 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 215,
                'created_at' => '2023-08-28 20:26:21',
                'id' => 1281,
                'locus_id' => 24,
                'updated_at' => '2023-08-28 20:26:21',
            ),
            490 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 216,
                'created_at' => '2023-08-28 20:28:47',
                'id' => 1282,
                'locus_id' => 1,
                'updated_at' => '2023-08-28 20:28:47',
            ),
            491 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 216,
                'created_at' => '2023-08-28 20:28:47',
                'id' => 1283,
                'locus_id' => 2,
                'updated_at' => '2023-08-28 20:28:47',
            ),
            492 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 216,
                'created_at' => '2023-08-28 20:28:47',
                'id' => 1284,
                'locus_id' => 3,
                'updated_at' => '2023-08-28 20:28:47',
            ),
            493 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 40,
                'animal_id' => 216,
                'created_at' => '2023-08-28 20:28:47',
                'id' => 1285,
                'locus_id' => 23,
                'updated_at' => '2023-08-28 20:28:47',
            ),
            494 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 217,
                'created_at' => '2023-08-29 10:40:02',
                'id' => 1286,
                'locus_id' => 1,
                'updated_at' => '2023-08-29 10:40:02',
            ),
            495 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 217,
                'created_at' => '2023-08-29 10:40:02',
                'id' => 1287,
                'locus_id' => 2,
                'updated_at' => '2023-08-29 10:40:02',
            ),
            496 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 217,
                'created_at' => '2023-08-29 10:40:02',
                'id' => 1288,
                'locus_id' => 3,
                'updated_at' => '2023-08-29 10:40:02',
            ),
            497 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 217,
                'created_at' => '2023-08-29 10:40:02',
                'id' => 1289,
                'locus_id' => 23,
                'updated_at' => '2023-08-29 10:40:02',
            ),
            498 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 217,
                'created_at' => '2023-08-29 10:40:02',
                'id' => 1290,
                'locus_id' => 24,
                'updated_at' => '2023-08-29 10:40:02',
            ),
            499 => 
            array (
                'allele_m_id' => 48,
                'allele_p_id' => 17,
                'animal_id' => 217,
                'created_at' => '2023-08-29 10:40:02',
                'id' => 1291,
                'locus_id' => 27,
                'updated_at' => '2023-08-29 10:40:02',
            ),
        ));
        \DB::table('genotypes')->insert(array (
            0 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 218,
                'created_at' => '2023-08-29 10:42:24',
                'id' => 1292,
                'locus_id' => 1,
                'updated_at' => '2023-08-29 10:42:24',
            ),
            1 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 218,
                'created_at' => '2023-08-29 10:42:24',
                'id' => 1293,
                'locus_id' => 2,
                'updated_at' => '2023-08-29 10:42:24',
            ),
            2 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 6,
                'animal_id' => 218,
                'created_at' => '2023-08-29 10:42:24',
                'id' => 1294,
                'locus_id' => 3,
                'updated_at' => '2023-08-29 10:42:24',
            ),
            3 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 218,
                'created_at' => '2023-08-29 10:42:24',
                'id' => 1295,
                'locus_id' => 23,
                'updated_at' => '2023-08-29 10:42:24',
            ),
            4 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 218,
                'created_at' => '2023-08-29 10:42:24',
                'id' => 1296,
                'locus_id' => 24,
                'updated_at' => '2023-08-29 10:42:24',
            ),
            5 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 219,
                'created_at' => '2023-08-29 10:43:44',
                'id' => 1297,
                'locus_id' => 1,
                'updated_at' => '2023-08-29 10:43:44',
            ),
            6 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 219,
                'created_at' => '2023-08-29 10:43:44',
                'id' => 1298,
                'locus_id' => 2,
                'updated_at' => '2023-08-29 10:43:44',
            ),
            7 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 219,
                'created_at' => '2023-08-29 10:43:44',
                'id' => 1299,
                'locus_id' => 3,
                'updated_at' => '2023-08-29 10:43:44',
            ),
            8 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 219,
                'created_at' => '2023-08-29 10:43:44',
                'id' => 1300,
                'locus_id' => 23,
                'updated_at' => '2023-08-29 10:43:44',
            ),
            9 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 219,
                'created_at' => '2023-08-29 10:43:44',
                'id' => 1301,
                'locus_id' => 24,
                'updated_at' => '2023-08-29 10:43:44',
            ),
            10 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 220,
                'created_at' => '2023-08-29 10:45:00',
                'id' => 1302,
                'locus_id' => 1,
                'updated_at' => '2023-08-29 10:45:00',
            ),
            11 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 220,
                'created_at' => '2023-08-29 10:45:00',
                'id' => 1303,
                'locus_id' => 2,
                'updated_at' => '2023-08-29 10:45:00',
            ),
            12 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 7,
                'animal_id' => 220,
                'created_at' => '2023-08-29 10:45:00',
                'id' => 1304,
                'locus_id' => 3,
                'updated_at' => '2023-08-29 10:45:00',
            ),
            13 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 220,
                'created_at' => '2023-08-29 10:45:00',
                'id' => 1305,
                'locus_id' => 23,
                'updated_at' => '2023-08-29 10:45:00',
            ),
            14 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 220,
                'created_at' => '2023-08-29 10:45:00',
                'id' => 1306,
                'locus_id' => 24,
                'updated_at' => '2023-08-29 10:45:00',
            ),
            15 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 221,
                'created_at' => '2023-08-29 11:06:09',
                'id' => 1307,
                'locus_id' => 1,
                'updated_at' => '2023-08-29 11:06:09',
            ),
            16 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 221,
                'created_at' => '2023-08-29 11:06:09',
                'id' => 1308,
                'locus_id' => 2,
                'updated_at' => '2023-08-29 11:06:09',
            ),
            17 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 221,
                'created_at' => '2023-08-29 11:06:09',
                'id' => 1309,
                'locus_id' => 11,
                'updated_at' => '2023-08-29 11:06:09',
            ),
            18 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 221,
                'created_at' => '2023-08-29 11:06:09',
                'id' => 1310,
                'locus_id' => 23,
                'updated_at' => '2023-08-29 11:06:09',
            ),
            19 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 221,
                'created_at' => '2023-08-29 11:06:09',
                'id' => 1311,
                'locus_id' => 24,
                'updated_at' => '2023-08-29 11:06:09',
            ),
            20 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 222,
                'created_at' => '2023-08-29 11:07:49',
                'id' => 1312,
                'locus_id' => 1,
                'updated_at' => '2023-08-29 11:07:49',
            ),
            21 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 222,
                'created_at' => '2023-08-29 11:07:49',
                'id' => 1313,
                'locus_id' => 2,
                'updated_at' => '2023-08-29 11:07:49',
            ),
            22 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 223,
                'created_at' => '2023-09-08 11:27:43',
                'id' => 1314,
                'locus_id' => 1,
                'updated_at' => '2023-09-08 11:27:43',
            ),
            23 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 223,
                'created_at' => '2023-09-08 11:27:43',
                'id' => 1315,
                'locus_id' => 2,
                'updated_at' => '2023-09-08 11:27:43',
            ),
            24 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 223,
                'created_at' => '2023-09-08 11:27:43',
                'id' => 1316,
                'locus_id' => 3,
                'updated_at' => '2023-09-08 11:27:43',
            ),
            25 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 223,
                'created_at' => '2023-09-08 11:27:43',
                'id' => 1317,
                'locus_id' => 23,
                'updated_at' => '2023-09-08 11:27:43',
            ),
            26 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 223,
                'created_at' => '2023-09-08 11:27:43',
                'id' => 1318,
                'locus_id' => 24,
                'updated_at' => '2023-09-08 11:27:43',
            ),
            27 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 224,
                'created_at' => '2023-09-08 11:58:23',
                'id' => 1319,
                'locus_id' => 1,
                'updated_at' => '2023-09-08 11:58:23',
            ),
            28 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 4,
                'animal_id' => 224,
                'created_at' => '2023-09-08 11:58:23',
                'id' => 1320,
                'locus_id' => 2,
                'updated_at' => '2023-09-08 11:58:23',
            ),
            29 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 224,
                'created_at' => '2023-09-08 11:58:23',
                'id' => 1321,
                'locus_id' => 11,
                'updated_at' => '2023-09-08 11:58:23',
            ),
            30 => 
            array (
                'allele_m_id' => 9,
                'allele_p_id' => 10,
                'animal_id' => 224,
                'created_at' => '2023-09-08 11:58:23',
                'id' => 1322,
                'locus_id' => 13,
                'updated_at' => '2023-09-08 11:58:23',
            ),
            31 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 224,
                'created_at' => '2023-09-08 11:58:23',
                'id' => 1323,
                'locus_id' => 24,
                'updated_at' => '2023-09-08 11:58:23',
            ),
            32 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 225,
                'created_at' => '2026-06-15 17:34:32',
                'id' => 1324,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:34:32',
            ),
            33 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 225,
                'created_at' => '2026-06-15 17:34:32',
                'id' => 1325,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:34:32',
            ),
            34 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 225,
                'created_at' => '2026-06-15 17:34:32',
                'id' => 1326,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:34:32',
            ),
            35 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 225,
                'created_at' => '2026-06-15 17:34:32',
                'id' => 1327,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 17:34:32',
            ),
            36 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 225,
                'created_at' => '2026-06-15 17:34:33',
                'id' => 1328,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:34:33',
            ),
            37 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 225,
                'created_at' => '2026-06-15 17:34:33',
                'id' => 1329,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:34:33',
            ),
            38 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:53',
                'id' => 1330,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:35:53',
            ),
            39 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:53',
                'id' => 1331,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:35:53',
            ),
            40 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 7,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:54',
                'id' => 1332,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:35:54',
            ),
            41 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 24,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:54',
                'id' => 1333,
                'locus_id' => 4,
                'updated_at' => '2026-06-15 17:35:54',
            ),
            42 => 
            array (
                'allele_m_id' => 16,
                'allele_p_id' => 15,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:54',
                'id' => 1334,
                'locus_id' => 11,
                'updated_at' => '2026-06-15 17:35:54',
            ),
            43 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:55',
                'id' => 1335,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:35:55',
            ),
            44 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 226,
                'created_at' => '2026-06-15 17:35:55',
                'id' => 1336,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:35:55',
            ),
            45 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 227,
                'created_at' => '2026-06-15 17:37:08',
                'id' => 1337,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:37:08',
            ),
            46 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 227,
                'created_at' => '2026-06-15 17:37:08',
                'id' => 1338,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:37:08',
            ),
            47 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 227,
                'created_at' => '2026-06-15 17:37:08',
                'id' => 1339,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:37:08',
            ),
            48 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 22,
                'animal_id' => 227,
                'created_at' => '2026-06-15 17:37:09',
                'id' => 1340,
                'locus_id' => 4,
                'updated_at' => '2026-06-15 17:37:09',
            ),
            49 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 227,
                'created_at' => '2026-06-15 17:37:09',
                'id' => 1341,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:37:09',
            ),
            50 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 227,
                'created_at' => '2026-06-15 17:37:09',
                'id' => 1342,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:37:09',
            ),
            51 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 228,
                'created_at' => '2026-06-15 17:38:17',
                'id' => 1343,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:38:17',
            ),
            52 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 228,
                'created_at' => '2026-06-15 17:38:17',
                'id' => 1344,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:38:17',
            ),
            53 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 228,
                'created_at' => '2026-06-15 17:38:17',
                'id' => 1345,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:38:17',
            ),
            54 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 228,
                'created_at' => '2026-06-15 17:38:17',
                'id' => 1346,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 17:38:17',
            ),
            55 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 228,
                'created_at' => '2026-06-15 17:38:18',
                'id' => 1347,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:38:18',
            ),
            56 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 228,
                'created_at' => '2026-06-15 17:38:18',
                'id' => 1348,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:38:18',
            ),
            57 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:49',
                'id' => 1349,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:39:49',
            ),
            58 => 
            array (
                'allele_m_id' => 5,
                'allele_p_id' => 3,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:49',
                'id' => 1350,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:39:49',
            ),
            59 => 
            array (
                'allele_m_id' => 19,
                'allele_p_id' => 7,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:49',
                'id' => 1351,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:39:49',
            ),
            60 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 24,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:49',
                'id' => 1352,
                'locus_id' => 4,
                'updated_at' => '2026-06-15 17:39:49',
            ),
            61 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:50',
                'id' => 1353,
                'locus_id' => 17,
                'updated_at' => '2026-06-15 17:39:50',
            ),
            62 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:50',
                'id' => 1354,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:39:50',
            ),
            63 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 229,
                'created_at' => '2026-06-15 17:39:50',
                'id' => 1355,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:39:50',
            ),
            64 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 230,
                'created_at' => '2026-06-15 17:41:41',
                'id' => 1356,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:41:41',
            ),
            65 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 4,
                'animal_id' => 230,
                'created_at' => '2026-06-15 17:41:41',
                'id' => 1357,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:41:41',
            ),
            66 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 230,
                'created_at' => '2026-06-15 17:41:41',
                'id' => 1358,
                'locus_id' => 17,
                'updated_at' => '2026-06-15 17:41:41',
            ),
            67 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 230,
                'created_at' => '2026-06-15 17:41:42',
                'id' => 1359,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:41:42',
            ),
            68 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 230,
                'created_at' => '2026-06-15 17:41:42',
                'id' => 1360,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:41:42',
            ),
            69 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:43',
                'id' => 1361,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:47:43',
            ),
            70 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:43',
                'id' => 1362,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:47:43',
            ),
            71 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:43',
                'id' => 1363,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:47:43',
            ),
            72 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:43',
                'id' => 1364,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 17:47:43',
            ),
            73 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 20,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:43',
                'id' => 1365,
                'locus_id' => 17,
                'updated_at' => '2026-06-15 17:47:43',
            ),
            74 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:44',
                'id' => 1366,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:47:44',
            ),
            75 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 231,
                'created_at' => '2026-06-15 17:47:44',
                'id' => 1367,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:47:44',
            ),
            76 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 232,
                'created_at' => '2026-06-15 17:49:21',
                'id' => 1368,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:49:21',
            ),
            77 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 232,
                'created_at' => '2026-06-15 17:49:21',
                'id' => 1369,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:49:21',
            ),
            78 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 7,
                'animal_id' => 232,
                'created_at' => '2026-06-15 17:49:21',
                'id' => 1370,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:49:21',
            ),
            79 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 42,
                'animal_id' => 232,
                'created_at' => '2026-06-15 17:49:22',
                'id' => 1371,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:49:22',
            ),
            80 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 232,
                'created_at' => '2026-06-15 17:49:22',
                'id' => 1372,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:49:22',
            ),
            81 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:58',
                'id' => 1373,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 17:57:58',
            ),
            82 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:58',
                'id' => 1374,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 17:57:58',
            ),
            83 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:58',
                'id' => 1375,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 17:57:58',
            ),
            84 => 
            array (
                'allele_m_id' => 29,
                'allele_p_id' => 27,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:58',
                'id' => 1376,
                'locus_id' => 9,
                'updated_at' => '2026-06-15 17:57:58',
            ),
            85 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:59',
                'id' => 1377,
                'locus_id' => 11,
                'updated_at' => '2026-06-15 17:57:59',
            ),
            86 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:59',
                'id' => 1378,
                'locus_id' => 17,
                'updated_at' => '2026-06-15 17:57:59',
            ),
            87 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:59',
                'id' => 1379,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 17:57:59',
            ),
            88 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 233,
                'created_at' => '2026-06-15 17:57:59',
                'id' => 1380,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 17:57:59',
            ),
            89 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:21',
                'id' => 1381,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:00:21',
            ),
            90 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:22',
                'id' => 1382,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:00:22',
            ),
            91 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:22',
                'id' => 1383,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 18:00:22',
            ),
            92 => 
            array (
                'allele_m_id' => 28,
                'allele_p_id' => 29,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:22',
                'id' => 1384,
                'locus_id' => 9,
                'updated_at' => '2026-06-15 18:00:22',
            ),
            93 => 
            array (
                'allele_m_id' => 30,
                'allele_p_id' => 30,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:22',
                'id' => 1385,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 18:00:22',
            ),
            94 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 40,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:22',
                'id' => 1386,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:00:22',
            ),
            95 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 44,
                'animal_id' => 234,
                'created_at' => '2026-06-15 18:00:22',
                'id' => 1387,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:00:22',
            ),
            96 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:11',
                'id' => 1388,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:02:11',
            ),
            97 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:11',
                'id' => 1389,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:02:11',
            ),
            98 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 19,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:11',
                'id' => 1390,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 18:02:11',
            ),
            99 => 
            array (
                'allele_m_id' => 23,
                'allele_p_id' => 24,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:11',
                'id' => 1391,
                'locus_id' => 4,
                'updated_at' => '2026-06-15 18:02:11',
            ),
            100 => 
            array (
                'allele_m_id' => 20,
                'allele_p_id' => 21,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:11',
                'id' => 1392,
                'locus_id' => 17,
                'updated_at' => '2026-06-15 18:02:11',
            ),
            101 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 41,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:12',
                'id' => 1393,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:02:12',
            ),
            102 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 235,
                'created_at' => '2026-06-15 18:02:12',
                'id' => 1394,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:02:12',
            ),
            103 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 236,
                'created_at' => '2026-06-15 18:03:40',
                'id' => 1395,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:03:40',
            ),
            104 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 236,
                'created_at' => '2026-06-15 18:03:40',
                'id' => 1396,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:03:40',
            ),
            105 => 
            array (
                'allele_m_id' => 6,
                'allele_p_id' => 7,
                'animal_id' => 236,
                'created_at' => '2026-06-15 18:03:40',
                'id' => 1397,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 18:03:40',
            ),
            106 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 236,
                'created_at' => '2026-06-15 18:03:40',
                'id' => 1398,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 18:03:40',
            ),
            107 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 42,
                'animal_id' => 236,
                'created_at' => '2026-06-15 18:03:40',
                'id' => 1399,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:03:40',
            ),
            108 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 236,
                'created_at' => '2026-06-15 18:03:40',
                'id' => 1400,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:03:40',
            ),
            109 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 237,
                'created_at' => '2026-06-15 18:06:08',
                'id' => 1401,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:06:08',
            ),
            110 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 237,
                'created_at' => '2026-06-15 18:06:08',
                'id' => 1402,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:06:08',
            ),
            111 => 
            array (
                'allele_m_id' => 43,
                'allele_p_id' => 43,
                'animal_id' => 237,
                'created_at' => '2026-06-15 18:06:08',
                'id' => 1403,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:06:08',
            ),
            112 => 
            array (
                'allele_m_id' => 17,
                'allele_p_id' => 48,
                'animal_id' => 237,
                'created_at' => '2026-06-15 18:06:08',
                'id' => 1404,
                'locus_id' => 27,
                'updated_at' => '2026-06-15 18:06:08',
            ),
            113 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 238,
                'created_at' => '2026-06-15 18:08:34',
                'id' => 1405,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:08:34',
            ),
            114 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 4,
                'animal_id' => 238,
                'created_at' => '2026-06-15 18:08:34',
                'id' => 1406,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:08:34',
            ),
            115 => 
            array (
                'allele_m_id' => 22,
                'allele_p_id' => 23,
                'animal_id' => 238,
                'created_at' => '2026-06-15 18:08:35',
                'id' => 1407,
                'locus_id' => 4,
                'updated_at' => '2026-06-15 18:08:35',
            ),
            116 => 
            array (
                'allele_m_id' => 15,
                'allele_p_id' => 16,
                'animal_id' => 238,
                'created_at' => '2026-06-15 18:08:35',
                'id' => 1408,
                'locus_id' => 11,
                'updated_at' => '2026-06-15 18:08:35',
            ),
            117 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 238,
                'created_at' => '2026-06-15 18:08:36',
                'id' => 1409,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:08:36',
            ),
            118 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 238,
                'created_at' => '2026-06-15 18:08:36',
                'id' => 1410,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:08:36',
            ),
            119 => 
            array (
                'allele_m_id' => 1,
                'allele_p_id' => 1,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:32',
                'id' => 1411,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:11:32',
            ),
            120 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:32',
                'id' => 1412,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:11:32',
            ),
            121 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:32',
                'id' => 1413,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 18:11:32',
            ),
            122 => 
            array (
                'allele_m_id' => 21,
                'allele_p_id' => 20,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:33',
                'id' => 1414,
                'locus_id' => 17,
                'updated_at' => '2026-06-15 18:11:33',
            ),
            123 => 
            array (
                'allele_m_id' => 40,
                'allele_p_id' => 41,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:33',
                'id' => 1415,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:11:33',
            ),
            124 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 44,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:33',
                'id' => 1416,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:11:33',
            ),
            125 => 
            array (
                'allele_m_id' => 46,
                'allele_p_id' => 45,
                'animal_id' => 239,
                'created_at' => '2026-06-15 18:11:33',
                'id' => 1417,
                'locus_id' => 25,
                'updated_at' => '2026-06-15 18:11:33',
            ),
            126 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 1,
                'animal_id' => 240,
                'created_at' => '2026-06-15 18:16:41',
                'id' => 1418,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:16:41',
            ),
            127 => 
            array (
                'allele_m_id' => 3,
                'allele_p_id' => 3,
                'animal_id' => 240,
                'created_at' => '2026-06-15 18:16:41',
                'id' => 1419,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:16:41',
            ),
            128 => 
            array (
                'allele_m_id' => 42,
                'allele_p_id' => 40,
                'animal_id' => 240,
                'created_at' => '2026-06-15 18:16:41',
                'id' => 1420,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:16:41',
            ),
            129 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 240,
                'created_at' => '2026-06-15 18:16:41',
                'id' => 1421,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:16:41',
            ),
            130 => 
            array (
                'allele_m_id' => 47,
                'allele_p_id' => 8,
                'animal_id' => 240,
                'created_at' => '2026-06-15 18:16:41',
                'id' => 1422,
                'locus_id' => 26,
                'updated_at' => '2026-06-15 18:16:41',
            ),
            131 => 
            array (
                'allele_m_id' => 2,
                'allele_p_id' => 2,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:25',
                'id' => 1423,
                'locus_id' => 1,
                'updated_at' => '2026-06-15 18:19:25',
            ),
            132 => 
            array (
                'allele_m_id' => 4,
                'allele_p_id' => 3,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:25',
                'id' => 1424,
                'locus_id' => 2,
                'updated_at' => '2026-06-15 18:19:25',
            ),
            133 => 
            array (
                'allele_m_id' => 7,
                'allele_p_id' => 18,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:26',
                'id' => 1425,
                'locus_id' => 3,
                'updated_at' => '2026-06-15 18:19:26',
            ),
            134 => 
            array (
                'allele_m_id' => 24,
                'allele_p_id' => 23,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:26',
                'id' => 1426,
                'locus_id' => 4,
                'updated_at' => '2026-06-15 18:19:26',
            ),
            135 => 
            array (
                'allele_m_id' => 31,
                'allele_p_id' => 30,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:26',
                'id' => 1427,
                'locus_id' => 14,
                'updated_at' => '2026-06-15 18:19:26',
            ),
            136 => 
            array (
                'allele_m_id' => 41,
                'allele_p_id' => 41,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:26',
                'id' => 1428,
                'locus_id' => 23,
                'updated_at' => '2026-06-15 18:19:26',
            ),
            137 => 
            array (
                'allele_m_id' => 44,
                'allele_p_id' => 43,
                'animal_id' => 241,
                'created_at' => '2026-06-15 18:19:26',
                'id' => 1429,
                'locus_id' => 24,
                'updated_at' => '2026-06-15 18:19:26',
            ),
        ));
        
        
    }
}