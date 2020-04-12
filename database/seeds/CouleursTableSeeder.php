<?php

use Illuminate\Database\Seeder;

class CouleursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('couleurs')->delete();
        
        \DB::table('couleurs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'bai',
                'image_id' => 2,
                'base_couleur'=> 0, 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'noir',
                'image_id' => 3,
                'base_couleur'=> 0, 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'alezan',
                'image_id' => 4,
                'base_couleur'=> 0, 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'noirbai',
                'image_id' => NULL,
                'base_couleur'=> 0, 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'alezanbai',
                'image_id' => NULL,
                'base_couleur'=> 0, 'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'alezannoir',
                'image_id' => NULL,
                'base_couleur'=> 0, 'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}