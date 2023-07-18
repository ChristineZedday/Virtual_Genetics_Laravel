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
                'reprise_id' => 2,
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
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 3,
            ),
            4 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 54,
                'reprise_id' => 6,
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 55,
                'reprise_id' => 13,
            ),
            6 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 10,
            ),
            7 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 12,
            ),
            8 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 15,
            ),
            9 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 16,
            ),
            10 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 17,
            ),
            11 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 56,
                'reprise_id' => 18,
            ),
            12 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'competition_id' => 57,
                'reprise_id' => 23,
            ),
        ));
        
        
    }
}