<?php

use Illuminate\Database\Seeder;

class ConcoursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Concours')->delete();
        
        \DB::table('Concours')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Modèle et Allures',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'CSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Dressage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}