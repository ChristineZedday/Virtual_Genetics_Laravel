<?php

use Illuminate\Database\Seeder;

class CompetitionablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competitionables')->delete();
        
        \DB::table('competitionables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'competition_id' => 1,
                'competitionable_id' => 1,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'competition_id' => 1,
                'competitionable_id' => 2,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'competition_id' => 1,
                'competitionable_id' => 3,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'competition_id' => 1,
                'competitionable_id' => 4,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'competition_id' => 1,
                'competitionable_id' => 5,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'competition_id' => 1,
                'competitionable_id' => 6,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'competition_id' => 1,
                'competitionable_id' => 7,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'competition_id' => 1,
                'competitionable_id' => 8,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'competition_id' => 1,
                'competitionable_id' => 9,
                'competitionable_type' => 'ModeleAllures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}