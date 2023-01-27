<?php

use Illuminate\Database\Seeder;

class EvenementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('evenements')->delete();
        
        \DB::table('evenements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-04-28',
                'nom' => 'Printemps du Welsh',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-05-14',
                'nom' => 'Shetland en Folie',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-04-02',
                'nom' => 'Connemara',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-03-02',
                'nom' => 'Français de selle',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-05-07',
                'nom' => 'Pottokak',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-04-07',
                'nom' => 'Great Mini Show',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-06-02',
                'nom' => 'Poneys de Sport',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-10-06',
                'nom' => 'Welsh Rare Bits',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-12',
                'nom' => 'Shetland',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-22',
                'nom' => 'Connemara',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-11-17',
                'nom' => 'Arabes et demi-sangs',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-12-14',
                'nom' => 'Minatures',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-23',
                'nom' => 'Pottokak',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-10-30',
                'nom' => 'Français de Selle',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-12-16',
                'nom' => 'Poneys de Sport',
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-04-26',
                'nom' => 'entrainement Shet',
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-06-27',
                'nom' => 'Régional Welsh',
            ),
        ));
        
        
    }
}