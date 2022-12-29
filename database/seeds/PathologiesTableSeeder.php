<?php

use Illuminate\Database\Seeder;

class PathologiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pathologies')->delete();
        
        \DB::table('pathologies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'atavisme squeletal',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 0,
                'redhibitoire' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'nanisme chondrodysplasique',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 0,
                'redhibitoire' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'anomalies congénitales oculaires multiples',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 0,
                'redhibitoire' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'absence de vision nocturne',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 0,
                'redhibitoire' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'mort embryon',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 0,
                'redhibitoire' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'intestin incomplet',
                'description' => NULL,
                'letal' => 1,
                'letal_foetus' => 0,
                'redhibitoire' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'nanisme létal',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 1,
                'redhibitoire' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'nanisme difforme',
                'description' => NULL,
                'letal' => 0,
                'letal_foetus' => 0,
                'redhibitoire' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}