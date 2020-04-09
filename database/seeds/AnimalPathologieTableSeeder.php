<?php

use Illuminate\Database\Seeder;

class AnimalPathologieTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('animal_pathologie')->delete();
        
        \DB::table('animal_pathologie')->insert(array (
            0 => 
            array (
                'id' => 1,
                'animal_id' => 37,
                'pathologie_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'animal_id' => 38,
                'pathologie_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'animal_id' => 38,
                'pathologie_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'animal_id' => 39,
                'pathologie_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}