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
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'nanisme chondrodysplasique',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}