<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompetitionRepriseTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competition_reprise')->delete();
        
        \DB::table('competition_reprise')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 38,
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 5,
            ),
            3 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 6,
            ),
            4 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 13,
            ),
            5 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 10,
            ),
            6 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 12,
            ),
            7 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 15,
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 16,
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 17,
            ),
            10 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 18,
            ),
            11 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 21,
            ),
            12 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 22,
            ),
            13 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 11,
            ),
            14 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 39,
            ),
            15 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 33,
            ),
            16 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 32,
            ),
            17 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 37,
            ),
            18 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 36,
            ),
            19 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 34,
            ),
            20 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 35,
            ),
            21 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 58,
                'reprise_id' => 32,
            ),
            22 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 40,
            ),
            23 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 59,
                'reprise_id' => 41,
            ),
            24 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 42,
            ),
            25 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 43,
            ),
            26 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 44,
            ),
            27 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 45,
            ),
            28 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 47,
            ),
            29 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 48,
            ),
            30 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 60,
                'reprise_id' => 49,
            ),
            31 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 2,
            ),
            32 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 5,
            ),
            33 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 6,
            ),
            34 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 10,
            ),
            35 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 61,
                'reprise_id' => 12,
            ),
        ));
        
        
    }
}