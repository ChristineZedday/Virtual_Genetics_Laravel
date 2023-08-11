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
                'open' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'régional',
                'open' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'national',
                'open' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'libelle' => 'mondial',
                'open' => 0,
            ),
        ));
        
        
    }
}