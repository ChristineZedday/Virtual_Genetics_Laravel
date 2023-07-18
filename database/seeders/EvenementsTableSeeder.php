<?php

namespace Database\Seeders;

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
                'date' => '1971-03-28',
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
                'date' => '1971-02-22',
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
                'nom' => 'Pony Super Show',
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
                'date' => '1971-11-30',
                'nom' => 'Français de Selle',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-12-16',
                'nom' => 'Concours Poneys Toutes Races',
            ),
            16 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-05-27',
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
                'date' => '1971-07-25',
                'nom' => 'Royal Welsh Show',
            ),
            19 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            20 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            21 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-06-26',
                'nom' => 'National Welsh Saumur',
            ),
            22 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            23 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-28',
                'nom' => 'National Shetland de Lamotte-Beuvron',
            ),
            24 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            25 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            26 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-02',
                'nom' => 'Championnat du monde de Fort Worth Texas',
            ),
            27 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-07-24',
                'nom' => 'Tout Rennes Shet',
            ),
            28 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-06-12',
                'nom' => 'Arabesques',
            ),
            29 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            30 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-07-08',
                'nom' => 'Grand Branle-Bas dans Landerneau',
            ),
            31 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-07-30',
                'nom' => 'Régional Pottokak',
            ),
            32 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-07-20',
                'nom' => 'Régional Français de Selle',
            ),
            33 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-07',
                'nom' => 'National Pottok',
            ),
            34 => 
            array (
                'id' => 37,
                'created_at' => '2023-07-17 19:52:33',
                'updated_at' => '2023-07-17 19:52:33',
                'date' => '1972-02-22',
                'nom' => 'Connemara',
            ),
            35 => 
            array (
                'id' => 38,
                'created_at' => '2023-07-17 19:52:34',
                'updated_at' => '2023-07-17 19:52:34',
                'date' => '1972-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            36 => 
            array (
                'id' => 39,
                'created_at' => '2023-07-17 19:52:38',
                'updated_at' => '2023-07-17 19:52:38',
                'date' => '1972-04-07',
                'nom' => 'Great Mini Show',
            ),
            37 => 
            array (
                'id' => 40,
                'created_at' => '2023-07-17 19:52:38',
                'updated_at' => '2023-07-17 19:52:38',
                'date' => '1972-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            38 => 
            array (
                'id' => 41,
                'created_at' => '2023-07-17 19:52:38',
                'updated_at' => '2023-07-17 19:52:38',
                'date' => '1972-04-07',
                'nom' => 'Great Mini Show',
            ),
            39 => 
            array (
                'id' => 42,
                'created_at' => '2023-07-17 19:52:38',
                'updated_at' => '2023-07-17 19:52:38',
                'date' => '1972-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            40 => 
            array (
                'id' => 43,
                'created_at' => '2023-07-17 19:55:03',
                'updated_at' => '2023-07-17 19:55:03',
                'date' => '1972-05-14',
                'nom' => 'Shetland en Folie',
            ),
            41 => 
            array (
                'id' => 44,
                'created_at' => '2023-07-17 19:55:04',
                'updated_at' => '2023-07-17 19:55:04',
                'date' => '1972-05-07',
                'nom' => 'Pottokak',
            ),
            42 => 
            array (
                'id' => 45,
                'created_at' => '2023-07-17 19:55:04',
                'updated_at' => '2023-07-17 19:55:04',
                'date' => '1972-05-27',
                'nom' => 'Régional Welsh',
            ),
            43 => 
            array (
                'id' => 46,
                'created_at' => '2023-07-17 19:55:26',
                'updated_at' => '2023-07-17 19:55:26',
                'date' => '1972-06-02',
                'nom' => 'Pony Super Show',
            ),
            44 => 
            array (
                'id' => 47,
                'created_at' => '2023-07-17 19:55:26',
                'updated_at' => '2023-07-17 19:55:26',
                'date' => '1972-06-26',
                'nom' => 'National Welsh Saumur',
            ),
            45 => 
            array (
                'id' => 48,
                'created_at' => '2023-07-17 19:55:27',
                'updated_at' => '2023-07-17 19:55:27',
                'date' => '1972-06-12',
                'nom' => 'Arabesques',
            ),
            46 => 
            array (
                'id' => 49,
                'created_at' => '2023-07-17 19:55:38',
                'updated_at' => '2023-07-17 19:55:38',
                'date' => '1972-07-25',
                'nom' => 'Royal Welsh Show',
            ),
            47 => 
            array (
                'id' => 50,
                'created_at' => '2023-07-17 19:55:38',
                'updated_at' => '2023-07-17 19:55:38',
                'date' => '1972-07-24',
                'nom' => 'Tout Rennes Shet',
            ),
            48 => 
            array (
                'id' => 51,
                'created_at' => '2023-07-17 19:55:38',
                'updated_at' => '2023-07-17 19:55:38',
                'date' => '1972-07-08',
                'nom' => 'Grand Branle-Bas dans Landerneau',
            ),
            49 => 
            array (
                'id' => 52,
                'created_at' => '2023-07-17 19:55:38',
                'updated_at' => '2023-07-17 19:55:38',
                'date' => '1972-07-30',
                'nom' => 'Régional Pottokak',
            ),
            50 => 
            array (
                'id' => 53,
                'created_at' => '2023-07-17 19:55:39',
                'updated_at' => '2023-07-17 19:55:39',
                'date' => '1972-07-20',
                'nom' => 'Régional Français de Selle',
            ),
            51 => 
            array (
                'id' => 54,
                'created_at' => '2023-07-17 19:56:00',
                'updated_at' => '2023-07-17 19:56:00',
                'date' => '1972-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            52 => 
            array (
                'id' => 55,
                'created_at' => '2023-07-17 19:56:00',
                'updated_at' => '2023-07-17 19:56:00',
                'date' => '1972-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            53 => 
            array (
                'id' => 56,
                'created_at' => '2023-07-17 19:56:00',
                'updated_at' => '2023-07-17 19:56:00',
                'date' => '1972-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            54 => 
            array (
                'id' => 57,
                'created_at' => '2023-07-17 19:56:00',
                'updated_at' => '2023-07-17 19:56:00',
                'date' => '1972-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            55 => 
            array (
                'id' => 58,
                'created_at' => '2023-07-17 19:56:01',
                'updated_at' => '2023-07-17 19:56:01',
                'date' => '1972-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            56 => 
            array (
                'id' => 59,
                'created_at' => '2023-07-17 19:56:14',
                'updated_at' => '2023-07-17 19:56:14',
                'date' => '1972-09-12',
                'nom' => 'Shetland',
            ),
            57 => 
            array (
                'id' => 60,
                'created_at' => '2023-07-17 19:56:15',
                'updated_at' => '2023-07-17 19:56:15',
                'date' => '1972-09-22',
                'nom' => 'Connemara',
            ),
            58 => 
            array (
                'id' => 61,
                'created_at' => '2023-07-17 19:56:15',
                'updated_at' => '2023-07-17 19:56:15',
                'date' => '1972-09-23',
                'nom' => 'Pottokak',
            ),
            59 => 
            array (
                'id' => 62,
                'created_at' => '2023-07-17 19:56:15',
                'updated_at' => '2023-07-17 19:56:15',
                'date' => '1972-09-28',
                'nom' => 'National Shetland de Lamotte-Beuvron',
            ),
            60 => 
            array (
                'id' => 63,
                'created_at' => '2023-07-17 19:56:15',
                'updated_at' => '2023-07-17 19:56:15',
                'date' => '1972-09-02',
                'nom' => 'Championnat du monde de Fort Worth Texas',
            ),
            61 => 
            array (
                'id' => 64,
                'created_at' => '2023-07-17 19:56:15',
                'updated_at' => '2023-07-17 19:56:15',
                'date' => '1972-09-07',
                'nom' => 'National Pottok',
            ),
            62 => 
            array (
                'id' => 65,
                'created_at' => '2023-07-17 19:58:02',
                'updated_at' => '2023-07-17 19:58:02',
                'date' => '1972-10-06',
                'nom' => 'Welsh Rare Bits',
            ),
            63 => 
            array (
                'id' => 66,
                'created_at' => '2023-07-17 19:58:04',
                'updated_at' => '2023-07-17 19:58:04',
                'date' => '1972-11-17',
                'nom' => 'Arabes et demi-sangs',
            ),
            64 => 
            array (
                'id' => 67,
                'created_at' => '2023-07-17 19:58:05',
                'updated_at' => '2023-07-17 19:58:05',
                'date' => '1972-11-30',
                'nom' => 'Français de Selle',
            ),
            65 => 
            array (
                'id' => 68,
                'created_at' => '2023-07-17 19:58:07',
                'updated_at' => '2023-07-17 19:58:07',
                'date' => '1972-12-14',
                'nom' => 'Minatures',
            ),
            66 => 
            array (
                'id' => 69,
                'created_at' => '2023-07-17 19:58:08',
                'updated_at' => '2023-07-17 19:58:08',
                'date' => '1972-12-16',
                'nom' => 'Concours Poneys Toutes Races',
            ),
            67 => 
            array (
                'id' => 70,
                'created_at' => '2023-07-17 19:58:29',
                'updated_at' => '2023-07-17 19:58:29',
                'date' => '1973-02-22',
                'nom' => 'Connemara',
            ),
            68 => 
            array (
                'id' => 71,
                'created_at' => '2023-07-17 19:58:30',
                'updated_at' => '2023-07-17 19:58:30',
                'date' => '1973-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            69 => 
            array (
                'id' => 72,
                'created_at' => '2023-07-17 19:59:21',
                'updated_at' => '2023-07-17 19:59:21',
                'date' => '1973-04-07',
                'nom' => 'Great Mini Show',
            ),
            70 => 
            array (
                'id' => 73,
                'created_at' => '2023-07-17 19:59:21',
                'updated_at' => '2023-07-17 19:59:21',
                'date' => '1973-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            71 => 
            array (
                'id' => 74,
                'created_at' => '2023-07-17 19:59:21',
                'updated_at' => '2023-07-17 19:59:21',
                'date' => '1973-04-07',
                'nom' => 'Great Mini Show',
            ),
            72 => 
            array (
                'id' => 75,
                'created_at' => '2023-07-17 19:59:21',
                'updated_at' => '2023-07-17 19:59:21',
                'date' => '1973-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            73 => 
            array (
                'id' => 76,
                'created_at' => '2023-07-17 19:59:29',
                'updated_at' => '2023-07-17 19:59:29',
                'date' => '1973-05-14',
                'nom' => 'Shetland en Folie',
            ),
            74 => 
            array (
                'id' => 77,
                'created_at' => '2023-07-17 19:59:30',
                'updated_at' => '2023-07-17 19:59:30',
                'date' => '1973-05-07',
                'nom' => 'Pottokak',
            ),
            75 => 
            array (
                'id' => 78,
                'created_at' => '2023-07-17 19:59:31',
                'updated_at' => '2023-07-17 19:59:31',
                'date' => '1973-05-27',
                'nom' => 'Régional Welsh',
            ),
            76 => 
            array (
                'id' => 79,
                'created_at' => '2023-07-17 19:59:54',
                'updated_at' => '2023-07-17 19:59:54',
                'date' => '1973-06-02',
                'nom' => 'Pony Super Show',
            ),
            77 => 
            array (
                'id' => 80,
                'created_at' => '2023-07-17 19:59:54',
                'updated_at' => '2023-07-17 19:59:54',
                'date' => '1973-06-26',
                'nom' => 'National Welsh Saumur',
            ),
            78 => 
            array (
                'id' => 81,
                'created_at' => '2023-07-17 19:59:55',
                'updated_at' => '2023-07-17 19:59:55',
                'date' => '1973-06-12',
                'nom' => 'Arabesques',
            ),
            79 => 
            array (
                'id' => 82,
                'created_at' => '2023-07-17 20:00:05',
                'updated_at' => '2023-07-17 20:00:05',
                'date' => '1973-07-25',
                'nom' => 'Royal Welsh Show',
            ),
            80 => 
            array (
                'id' => 83,
                'created_at' => '2023-07-17 20:00:06',
                'updated_at' => '2023-07-17 20:00:06',
                'date' => '1973-07-24',
                'nom' => 'Tout Rennes Shet',
            ),
            81 => 
            array (
                'id' => 84,
                'created_at' => '2023-07-17 20:00:06',
                'updated_at' => '2023-07-17 20:00:06',
                'date' => '1973-07-08',
                'nom' => 'Grand Branle-Bas dans Landerneau',
            ),
            82 => 
            array (
                'id' => 85,
                'created_at' => '2023-07-17 20:00:06',
                'updated_at' => '2023-07-17 20:00:06',
                'date' => '1973-07-30',
                'nom' => 'Régional Pottokak',
            ),
            83 => 
            array (
                'id' => 86,
                'created_at' => '2023-07-17 20:00:06',
                'updated_at' => '2023-07-17 20:00:06',
                'date' => '1973-07-20',
                'nom' => 'Régional Français de Selle',
            ),
            84 => 
            array (
                'id' => 87,
                'created_at' => '2023-07-17 20:00:11',
                'updated_at' => '2023-07-17 20:00:11',
                'date' => '1973-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            85 => 
            array (
                'id' => 88,
                'created_at' => '2023-07-17 20:00:11',
                'updated_at' => '2023-07-17 20:00:11',
                'date' => '1973-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            86 => 
            array (
                'id' => 89,
                'created_at' => '2023-07-17 20:00:11',
                'updated_at' => '2023-07-17 20:00:11',
                'date' => '1973-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            87 => 
            array (
                'id' => 90,
                'created_at' => '2023-07-17 20:00:11',
                'updated_at' => '2023-07-17 20:00:11',
                'date' => '1973-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            88 => 
            array (
                'id' => 91,
                'created_at' => '2023-07-17 20:00:12',
                'updated_at' => '2023-07-17 20:00:12',
                'date' => '1973-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            89 => 
            array (
                'id' => 92,
                'created_at' => '2023-07-17 20:00:16',
                'updated_at' => '2023-07-17 20:00:16',
                'date' => '1973-09-12',
                'nom' => 'Shetland',
            ),
            90 => 
            array (
                'id' => 93,
                'created_at' => '2023-07-17 20:00:16',
                'updated_at' => '2023-07-17 20:00:16',
                'date' => '1973-09-22',
                'nom' => 'Connemara',
            ),
            91 => 
            array (
                'id' => 94,
                'created_at' => '2023-07-17 20:00:16',
                'updated_at' => '2023-07-17 20:00:16',
                'date' => '1973-09-23',
                'nom' => 'Pottokak',
            ),
            92 => 
            array (
                'id' => 95,
                'created_at' => '2023-07-17 20:00:17',
                'updated_at' => '2023-07-17 20:00:17',
                'date' => '1973-09-28',
                'nom' => 'National Shetland de Lamotte-Beuvron',
            ),
            93 => 
            array (
                'id' => 96,
                'created_at' => '2023-07-17 20:00:17',
                'updated_at' => '2023-07-17 20:00:17',
                'date' => '1973-09-02',
                'nom' => 'Championnat du monde de Fort Worth Texas',
            ),
            94 => 
            array (
                'id' => 97,
                'created_at' => '2023-07-17 20:00:18',
                'updated_at' => '2023-07-17 20:00:18',
                'date' => '1973-09-07',
                'nom' => 'National Pottok',
            ),
            95 => 
            array (
                'id' => 98,
                'created_at' => '2023-07-17 20:02:42',
                'updated_at' => '2023-07-17 20:02:42',
                'date' => '1973-10-06',
                'nom' => 'Welsh Rare Bits',
            ),
            96 => 
            array (
                'id' => 99,
                'created_at' => '2023-07-17 20:04:25',
                'updated_at' => '2023-07-17 20:04:25',
                'date' => '1973-11-17',
                'nom' => 'Arabes et demi-sangs',
            ),
            97 => 
            array (
                'id' => 100,
                'created_at' => '2023-07-17 20:04:25',
                'updated_at' => '2023-07-17 20:04:25',
                'date' => '1973-11-30',
                'nom' => 'Français de Selle',
            ),
            98 => 
            array (
                'id' => 101,
                'created_at' => '2023-07-17 20:04:49',
                'updated_at' => '2023-07-17 20:04:49',
                'date' => '1973-12-27',
                'nom' => 'Salon du cheval',
            ),
            99 => 
            array (
                'id' => 102,
                'created_at' => '2023-07-17 20:04:49',
                'updated_at' => '2023-07-17 20:04:49',
                'date' => '1973-12-14',
                'nom' => 'Minatures',
            ),
            100 => 
            array (
                'id' => 103,
                'created_at' => '2023-07-17 20:04:50',
                'updated_at' => '2023-07-17 20:04:50',
                'date' => '1973-12-16',
                'nom' => 'Concours Poneys Toutes Races',
            ),
            101 => 
            array (
                'id' => 104,
                'created_at' => '2023-07-17 20:07:59',
                'updated_at' => '2023-07-17 20:07:59',
                'date' => '1974-02-22',
                'nom' => 'Connemara',
            ),
            102 => 
            array (
                'id' => 105,
                'created_at' => '2023-07-17 20:07:59',
                'updated_at' => '2023-07-17 20:07:59',
                'date' => '1974-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            103 => 
            array (
                'id' => 106,
                'created_at' => '2023-07-17 20:08:06',
                'updated_at' => '2023-07-17 20:08:06',
                'date' => '1974-04-07',
                'nom' => 'Great Mini Show',
            ),
            104 => 
            array (
                'id' => 107,
                'created_at' => '2023-07-17 20:08:07',
                'updated_at' => '2023-07-17 20:08:07',
                'date' => '1974-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            105 => 
            array (
                'id' => 108,
                'created_at' => '2023-07-17 20:08:07',
                'updated_at' => '2023-07-17 20:08:07',
                'date' => '1974-04-07',
                'nom' => 'Great Mini Show',
            ),
            106 => 
            array (
                'id' => 109,
                'created_at' => '2023-07-17 20:08:07',
                'updated_at' => '2023-07-17 20:08:07',
                'date' => '1974-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            107 => 
            array (
                'id' => 110,
                'created_at' => '2023-07-17 20:08:07',
                'updated_at' => '2023-07-17 20:08:07',
                'date' => '1974-04-07',
                'nom' => 'Great Mini Show',
            ),
            108 => 
            array (
                'id' => 111,
                'created_at' => '2023-07-17 20:08:08',
                'updated_at' => '2023-07-17 20:08:08',
                'date' => '1974-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            109 => 
            array (
                'id' => 112,
                'created_at' => '2023-07-17 20:08:08',
                'updated_at' => '2023-07-17 20:08:08',
                'date' => '1974-04-07',
                'nom' => 'Great Mini Show',
            ),
            110 => 
            array (
                'id' => 113,
                'created_at' => '2023-07-17 20:08:08',
                'updated_at' => '2023-07-17 20:08:08',
                'date' => '1974-04-25',
                'nom' => 'Foire de Rennes spécial Connemara',
            ),
            111 => 
            array (
                'id' => 114,
                'created_at' => '2023-07-17 20:08:13',
                'updated_at' => '2023-07-17 20:08:13',
                'date' => '1974-05-14',
                'nom' => 'Shetland en Folie',
            ),
            112 => 
            array (
                'id' => 115,
                'created_at' => '2023-07-17 20:08:14',
                'updated_at' => '2023-07-17 20:08:14',
                'date' => '1974-05-07',
                'nom' => 'Pottokak',
            ),
            113 => 
            array (
                'id' => 116,
                'created_at' => '2023-07-17 20:08:15',
                'updated_at' => '2023-07-17 20:08:15',
                'date' => '1974-05-27',
                'nom' => 'Régional Welsh',
            ),
            114 => 
            array (
                'id' => 117,
                'created_at' => '2023-07-17 20:09:29',
                'updated_at' => '2023-07-17 20:09:29',
                'date' => '1974-06-02',
                'nom' => 'Pony Super Show',
            ),
            115 => 
            array (
                'id' => 118,
                'created_at' => '2023-07-17 20:09:31',
                'updated_at' => '2023-07-17 20:09:31',
                'date' => '1974-06-26',
                'nom' => 'National Welsh Saumur',
            ),
            116 => 
            array (
                'id' => 119,
                'created_at' => '2023-07-17 20:09:31',
                'updated_at' => '2023-07-17 20:09:31',
                'date' => '1974-06-12',
                'nom' => 'Arabesques',
            ),
            117 => 
            array (
                'id' => 120,
                'created_at' => '2023-07-17 20:10:18',
                'updated_at' => '2023-07-17 20:10:18',
                'date' => '1974-07-25',
                'nom' => 'Royal Welsh Show',
            ),
            118 => 
            array (
                'id' => 121,
                'created_at' => '2023-07-17 20:10:19',
                'updated_at' => '2023-07-17 20:10:19',
                'date' => '1974-07-24',
                'nom' => 'Tout Rennes Shet',
            ),
            119 => 
            array (
                'id' => 122,
                'created_at' => '2023-07-17 20:10:19',
                'updated_at' => '2023-07-17 20:10:19',
                'date' => '1974-07-08',
                'nom' => 'Grand Branle-Bas dans Landerneau',
            ),
            120 => 
            array (
                'id' => 123,
                'created_at' => '2023-07-17 20:10:19',
                'updated_at' => '2023-07-17 20:10:19',
                'date' => '1974-07-30',
                'nom' => 'Régional Pottokak',
            ),
            121 => 
            array (
                'id' => 124,
                'created_at' => '2023-07-17 20:10:19',
                'updated_at' => '2023-07-17 20:10:19',
                'date' => '1974-07-20',
                'nom' => 'Régional Français de Selle',
            ),
            122 => 
            array (
                'id' => 125,
                'created_at' => '2023-07-17 20:11:00',
                'updated_at' => '2023-07-17 20:11:00',
                'date' => '1974-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            123 => 
            array (
                'id' => 126,
                'created_at' => '2023-07-17 20:11:00',
                'updated_at' => '2023-07-17 20:11:00',
                'date' => '1974-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            124 => 
            array (
                'id' => 127,
                'created_at' => '2023-07-17 20:11:00',
                'updated_at' => '2023-07-17 20:11:00',
                'date' => '1974-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            125 => 
            array (
                'id' => 128,
                'created_at' => '2023-07-17 20:11:00',
                'updated_at' => '2023-07-17 20:11:00',
                'date' => '1974-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            126 => 
            array (
                'id' => 129,
                'created_at' => '2023-07-17 20:11:01',
                'updated_at' => '2023-07-17 20:11:01',
                'date' => '1974-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            127 => 
            array (
                'id' => 130,
                'created_at' => '2023-07-17 20:11:14',
                'updated_at' => '2023-07-17 20:11:14',
                'date' => '1974-09-12',
                'nom' => 'Shetland',
            ),
            128 => 
            array (
                'id' => 131,
                'created_at' => '2023-07-17 20:11:14',
                'updated_at' => '2023-07-17 20:11:14',
                'date' => '1974-09-22',
                'nom' => 'Connemara',
            ),
            129 => 
            array (
                'id' => 132,
                'created_at' => '2023-07-17 20:11:14',
                'updated_at' => '2023-07-17 20:11:14',
                'date' => '1974-09-23',
                'nom' => 'Pottokak',
            ),
            130 => 
            array (
                'id' => 133,
                'created_at' => '2023-07-17 20:11:14',
                'updated_at' => '2023-07-17 20:11:14',
                'date' => '1974-09-28',
                'nom' => 'National Shetland de Lamotte-Beuvron',
            ),
            131 => 
            array (
                'id' => 134,
                'created_at' => '2023-07-17 20:11:15',
                'updated_at' => '2023-07-17 20:11:15',
                'date' => '1974-09-02',
                'nom' => 'Championnat du monde de Fort Worth Texas',
            ),
            132 => 
            array (
                'id' => 135,
                'created_at' => '2023-07-17 20:11:15',
                'updated_at' => '2023-07-17 20:11:15',
                'date' => '1974-09-07',
                'nom' => 'National Pottok',
            ),
            133 => 
            array (
                'id' => 136,
                'created_at' => '2023-07-17 20:11:44',
                'updated_at' => '2023-07-17 20:11:44',
                'date' => '1974-10-06',
                'nom' => 'Welsh Rare Bits',
            ),
            134 => 
            array (
                'id' => 137,
                'created_at' => '2023-07-17 20:12:20',
                'updated_at' => '2023-07-17 20:12:20',
                'date' => '1974-11-17',
                'nom' => 'Arabes et demi-sangs',
            ),
            135 => 
            array (
                'id' => 138,
                'created_at' => '2023-07-17 20:12:20',
                'updated_at' => '2023-07-17 20:12:20',
                'date' => '1974-11-30',
                'nom' => 'Français de Selle',
            ),
            136 => 
            array (
                'id' => 139,
                'created_at' => '2023-07-17 20:12:24',
                'updated_at' => '2023-07-17 20:12:24',
                'date' => '1974-12-27',
                'nom' => 'Salon du cheval',
            ),
            137 => 
            array (
                'id' => 140,
                'created_at' => '2023-07-17 20:12:24',
                'updated_at' => '2023-07-17 20:12:24',
                'date' => '1974-12-14',
                'nom' => 'Minatures',
            ),
            138 => 
            array (
                'id' => 141,
                'created_at' => '2023-07-17 20:12:25',
                'updated_at' => '2023-07-17 20:12:25',
                'date' => '1974-12-16',
                'nom' => 'Concours Poneys Toutes Races',
            ),
            139 => 
            array (
                'id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-03-14',
                'nom' => 'Dressage ',
            ),
            140 => 
            array (
                'id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-05-21',
                'nom' => 'Dressage Poneys',
            ),
            141 => 
            array (
                'id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-06-25',
                'nom' => 'Dressage',
            ),
            142 => 
            array (
                'id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-04-19',
                'nom' => 'Dressage Régional',
            ),
            143 => 
            array (
                'id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '1971-09-18',
                'nom' => 'Dressage Régional',
            ),
        ));
        
        
    }
}