<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NiveauxTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('niveaux')->delete();
        
        \DB::table('niveaux')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'départemental',
                'open_before' => 0, 
                'open_after' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'régional',
                'open_before' => 1, 
                'open_after' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'national',
                'open_before' => 0, 
                'open_after' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'mondial',
                'open_before' => 0, 
                'open_after' => 0,
            ),
        ));
        
        
    }
}