<?php

use Illuminate\Database\Seeder;

class NiveauxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('niveaux')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'départemental',
                'open' => true,

            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'régional',
                'open' => false,

            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'national',
                'open' => false,

            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'mondial',
                'open' => false,

            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'entrainement',
                'open' => true,

            ),
        ));
    }
}
