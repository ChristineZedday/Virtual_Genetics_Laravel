<?php

use Illuminate\Database\Seeder;

class ImageablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('imageables')->delete();
        
        \DB::table('imageables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'imageable_id' => 10,
                'imageable_type' => 'Phenotype',
            ),
            1 => 
            array (
                'id' => 2,
                'image_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'imageable_id' => 11,
                'imageable_type' => 'Phenotype',
            ),
        ));
        
        
    }
}