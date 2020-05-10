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
                'chemin' => 'smokycream',
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
                'chemin' => 'baiperle',
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
                'z_index' => 100,
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
            15 => 
            array (
                'id' => 16,
                'chemin' => 'tobianosabino',
                'extension' => 'png',
                'z_index' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'chemin' => 'tobianoW20',
                'extension' => 'png',
                'z_index' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'chemin' => 'sabinoW20',
                'extension' => 'png',
                'z_index' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'chemin' => 'tobiano0',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-18 15:31:40',
                'updated_at' => '2020-04-18 15:31:40',
            ),
            19 => 
            array (
                'id' => 20,
                'chemin' => 'tobiano4',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-18 15:35:47',
                'updated_at' => '2020-04-18 15:35:47',
            ),
            20 => 
            array (
                'id' => 21,
                'chemin' => 'tobiano2',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-18 15:36:04',
                'updated_at' => '2020-04-18 15:36:04',
            ),
            21 => 
            array (
                'id' => 22,
                'chemin' => 'W201',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-18 15:36:04',
                'updated_at' => '2020-04-18 15:36:04',
            ),
            22 => 
            array (
                'id' => 23,
                'chemin' => 'sabino2',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 17:33:35',
                'updated_at' => '2020-04-20 17:33:35',
            ),
            23 => 
            array (
                'id' => 24,
                'chemin' => 'W203',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 17:34:03',
                'updated_at' => '2020-04-20 17:34:03',
            ),
            24 => 
            array (
                'id' => 25,
                'chemin' => 'tobianoW202',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 18:22:14',
                'updated_at' => '2020-04-20 18:22:14',
            ),
            25 => 
            array (
                'id' => 26,
                'chemin' => 'sabinoW204',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 18:37:50',
                'updated_at' => '2020-04-20 18:37:50',
            ),
            26 => 
            array (
                'id' => 27,
                'chemin' => 'sabino0',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 20:36:05',
                'updated_at' => '2020-04-20 20:36:05',
            ),
            27 => 
            array (
                'id' => 28,
                'chemin' => 'sabino4',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 20:56:41',
                'updated_at' => '2020-04-20 20:56:41',
            ),
            28 => 
            array (
                'id' => 29,
                'chemin' => 'tobiano6',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 21:06:04',
                'updated_at' => '2020-04-20 21:06:04',
            ),
            29 => 
            array (
                'id' => 30,
                'chemin' => 'sabino6',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-21 16:40:49',
                'updated_at' => '2020-04-21 16:40:49',
            ),
            30 => 
            array (
                'id' => 31,
                'chemin' => 'pseudoperlino',
                'extension' => 'png',
                'z_index' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'chemin' => 'pseudocremello',
                'extension' => 'png',
                'z_index' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'chemin' => 'pseudosmoky',
                'extension' => 'png',
                'z_index' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'chemin' => 'noirperle',
                'extension' => 'png',
                'z_index' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'chemin' => 'abricot',
                'extension' => 'png',
                'z_index' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}