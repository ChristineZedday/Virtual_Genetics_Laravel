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
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-06-27',
                'nom' => 'Régional Welsh',
            ),
            17 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1972-12-27',
                'nom' => 'Salon du cheval',
            ),
            18 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-07-25',
                'nom' => 'Royal Welsh Show',
            ),
            19 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            20 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            21 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-06-26',
                'nom' => 'National Welsh Saumur',
            ),
            22 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            23 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-09-28',
                'nom' => 'National Shetland de Lamotte-Beuvron',
            ),
            24 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            25 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            26 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1973-09-02',
                'nom' => 'Championnat du monde de Fort Worth Texas',
            ),
            27 => 
            array (
                'id' => 29,
                'created_at' => '2023-01-28 12:23:17',
                'updated_at' => '2023-01-28 12:23:17',
                'date' => '1972-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            28 => 
            array (
                'id' => 30,
                'created_at' => '2023-01-28 12:25:27',
                'updated_at' => '2023-01-28 12:25:27',
                'date' => '1972-03-02',
                'nom' => 'Français de selle',
            ),
            29 => 
            array (
                'id' => 31,
                'created_at' => '2023-01-28 12:26:06',
                'updated_at' => '2023-01-28 12:26:06',
                'date' => '1972-04-28',
                'nom' => 'Printemps du Welsh',
            ),
            30 => 
            array (
                'id' => 32,
                'created_at' => '2023-01-28 12:26:07',
                'updated_at' => '2023-01-28 12:26:07',
                'date' => '1972-04-02',
                'nom' => 'Connemara',
            ),
            31 => 
            array (
                'id' => 33,
                'created_at' => '2023-01-28 12:26:08',
                'updated_at' => '2023-01-28 12:26:08',
                'date' => '1972-04-07',
                'nom' => 'Great Mini Show',
            ),
            32 => 
            array (
                'id' => 34,
                'created_at' => '2023-01-28 12:26:08',
                'updated_at' => '2023-01-28 12:26:08',
                'date' => '1972-04-26',
                'nom' => 'entrainement Shet',
            ),
            33 => 
            array (
                'id' => 35,
                'created_at' => '2023-01-28 20:17:23',
                'updated_at' => '2023-01-28 20:17:23',
                'date' => '1972-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            34 => 
            array (
                'id' => 36,
                'created_at' => '2023-01-28 20:18:25',
                'updated_at' => '2023-01-28 20:18:25',
                'date' => '1972-03-02',
                'nom' => 'Français de selle',
            ),
            35 => 
            array (
                'id' => 37,
                'created_at' => '2023-01-28 20:19:10',
                'updated_at' => '2023-01-28 20:19:10',
                'date' => '1972-04-28',
                'nom' => 'Printemps du Welsh',
            ),
            36 => 
            array (
                'id' => 38,
                'created_at' => '2023-01-28 20:19:10',
                'updated_at' => '2023-01-28 20:19:10',
                'date' => '1972-04-02',
                'nom' => 'Connemara',
            ),
            37 => 
            array (
                'id' => 39,
                'created_at' => '2023-01-28 20:19:11',
                'updated_at' => '2023-01-28 20:19:11',
                'date' => '1972-04-07',
                'nom' => 'Great Mini Show',
            ),
            38 => 
            array (
                'id' => 40,
                'created_at' => '2023-01-28 20:19:11',
                'updated_at' => '2023-01-28 20:19:11',
                'date' => '1972-04-26',
                'nom' => 'entrainement Shet',
            ),
            39 => 
            array (
                'id' => 41,
                'created_at' => '2023-01-28 20:19:44',
                'updated_at' => '2023-01-28 20:19:44',
                'date' => '1972-05-14',
                'nom' => 'Shetland en Folie',
            ),
            40 => 
            array (
                'id' => 42,
                'created_at' => '2023-01-28 20:19:44',
                'updated_at' => '2023-01-28 20:19:44',
                'date' => '1972-05-07',
                'nom' => 'Pottokak',
            ),
            41 => 
            array (
                'id' => 43,
                'created_at' => '2023-01-28 20:20:41',
                'updated_at' => '2023-01-28 20:20:41',
                'date' => '1972-06-02',
                'nom' => 'Poneys de Sport',
            ),
            42 => 
            array (
                'id' => 44,
                'created_at' => '2023-01-28 20:20:41',
                'updated_at' => '2023-01-28 20:20:41',
                'date' => '1972-06-27',
                'nom' => 'Régional Welsh',
            ),
            43 => 
            array (
                'id' => 45,
                'created_at' => '2023-01-28 20:24:27',
                'updated_at' => '2023-01-28 20:24:27',
                'date' => '1972-09-12',
                'nom' => 'Shetland',
            ),
            44 => 
            array (
                'id' => 46,
                'created_at' => '2023-01-28 20:24:27',
                'updated_at' => '2023-01-28 20:24:27',
                'date' => '1972-09-22',
                'nom' => 'Connemara',
            ),
            45 => 
            array (
                'id' => 47,
                'created_at' => '2023-01-28 20:24:28',
                'updated_at' => '2023-01-28 20:24:28',
                'date' => '1972-09-23',
                'nom' => 'Pottokak',
            ),
            46 => 
            array (
                'id' => 48,
                'created_at' => '2023-01-28 20:24:35',
                'updated_at' => '2023-01-28 20:24:35',
                'date' => '1972-10-06',
                'nom' => 'Welsh Rare Bits',
            ),
            47 => 
            array (
                'id' => 49,
                'created_at' => '2023-01-28 20:24:35',
                'updated_at' => '2023-01-28 20:24:35',
                'date' => '1972-10-30',
                'nom' => 'Français de Selle',
            ),
            48 => 
            array (
                'id' => 50,
                'created_at' => '2023-01-28 20:26:59',
                'updated_at' => '2023-01-28 20:26:59',
                'date' => '1972-11-17',
                'nom' => 'Arabes et demi-sangs',
            ),
            49 => 
            array (
                'id' => 51,
                'created_at' => '2023-01-28 20:27:07',
                'updated_at' => '2023-01-28 20:27:07',
                'date' => '1972-12-14',
                'nom' => 'Minatures',
            ),
            50 => 
            array (
                'id' => 52,
                'created_at' => '2023-01-28 20:27:08',
                'updated_at' => '2023-01-28 20:27:08',
                'date' => '1972-12-16',
                'nom' => 'Poneys de Sport',
            ),
        ));
        
        
    }
}