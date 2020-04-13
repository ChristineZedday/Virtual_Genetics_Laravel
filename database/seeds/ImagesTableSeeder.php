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
                'chemin' => 'fond',
                'extension' => 'png',
                'z_index' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'chemin' => 'bai',
                'extension' => 'png',
                'z_index' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'chemin' => 'noir',
                'extension' => 'png',
                'z_index' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'chemin' => 'alezan',
                'extension' => 'png',
                'z_index' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'chemin' => 'isabelle',
                'extension' => 'png',
                'z_index' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'chemin' => 'perlino',
                'extension' => 'png',
                'z_index' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'chemin' => 'palomino',
                'extension' => 'png',
                'z_index' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'chemin' => 'cremello',
                'extension' => 'png',
                'z_index' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'chemin' => 'smoky_cream',
                'extension' => 'png',
                'z_index' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'chemin' => 'abricot',
                'extension' => 'png',
                'z_index' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'chemin' => 'isabelle_perle',
                'extension' => 'png',
                'z_index' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'chemin' => 'tobiano',
                'extension' => 'png',
                'z_index' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'chemin' => 'blanc',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'chemin' => 'sabino',
                'extension' => 'png',
                'z_index' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'chemin' => 'W20',
                'extension' => 'png',
                'z_index' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}