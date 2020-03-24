<?php

use Illuminate\Database\Seeder;

class StatutsfemellesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statutsfemelles')->delete();
        
        \DB::table('statutsfemelles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2020-03-24 22:09:03',
                'updated_at' => '2020-03-24 22:20:48',
                'animal_id' => 2,
                'pres_pleine' => 0,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 1,
                'etalon_id' => NULL,
                'terme' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2020-03-24 22:09:04',
                'updated_at' => '2020-03-24 22:20:48',
                'animal_id' => 2,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 1,
                'etalon_id' => 8,
                'terme' => '1972-02-01',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2020-03-24 22:09:04',
                'updated_at' => '2020-03-24 22:20:48',
                'animal_id' => 10,
                'pres_pleine' => 0,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 1,
                'etalon_id' => NULL,
                'terme' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2020-03-24 22:10:30',
                'updated_at' => '2020-03-24 22:23:32',
                'animal_id' => 4,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 1,
                'etalon_id' => 11,
                'terme' => '1972-05-01',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2020-03-24 22:14:32',
                'updated_at' => '2020-03-24 22:27:43',
                'animal_id' => 5,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 8,
                'terme' => '1972-09-01',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2020-03-24 22:22:54',
                'updated_at' => '2020-03-24 22:22:54',
                'animal_id' => 7,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 9,
                'terme' => '1972-04-01',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2020-03-24 22:22:54',
                'updated_at' => '2020-03-24 22:23:32',
                'animal_id' => 7,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 9,
                'terme' => '1972-05-01',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2020-03-24 22:22:54',
                'updated_at' => '2020-03-24 22:22:54',
                'animal_id' => 13,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 6,
                'terme' => '1972-04-01',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2020-03-24 22:23:32',
                'updated_at' => '2020-03-24 22:23:32',
                'animal_id' => 17,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 3,
                'terme' => '1972-05-01',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2020-03-24 22:23:32',
                'updated_at' => '2020-03-24 22:23:32',
                'animal_id' => 13,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 6,
                'terme' => '1972-05-01',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2020-03-24 22:27:43',
                'updated_at' => '2020-03-24 22:27:43',
                'animal_id' => 18,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 3,
                'terme' => '1972-09-01',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => '2020-03-24 22:28:19',
                'updated_at' => '2020-03-24 22:28:19',
                'animal_id' => 18,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 8,
                'terme' => '1972-10-01',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => '2020-03-24 22:28:36',
                'updated_at' => '2020-03-24 22:28:36',
                'animal_id' => 13,
                'pres_pleine' => 1,
                'conf_pleine' => 0,
                'vide' => 1,
                'conf_vide' => 0,
                'etalon_id' => 6,
                'terme' => '1972-11-01',
            ),
        ));
        
        
    }
}