<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chemin' => 'fond.png',
                'z_index' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'chemin' => 'bai.png',
                'z_index' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'chemin' => 'noir.png',
                'z_index' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'chemin' => 'alezan.png',
                'z_index' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}