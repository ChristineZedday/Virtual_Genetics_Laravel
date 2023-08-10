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
                'date' => '2000-05-11',
                'nom' => 'Concours de Printemps Welsh à Saumur',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-12',
                'nom' => 'Local Shetland Saint-Lô',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-02-22',
                'nom' => 'Connemara',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-02-02',
                'nom' => 'Arabe et demi-sang arabe',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-03-02',
                'nom' => 'Français de selle',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-05-07',
                'nom' => 'Pottokak',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-04-07',
                'nom' => 'Great Mini Show',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-02',
                'nom' => 'Pony Super Show',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-10-06',
                'nom' => 'Welsh Rare Bits',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-12',
                'nom' => 'Shetland',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-22',
                'nom' => 'Connemara',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-11-17',
                'nom' => 'Arabes et demi-sangs',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-12-14',
                'nom' => 'Minatures',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-23',
                'nom' => 'Pottokak',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-11-30',
                'nom' => 'Français de Selle',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-12-16',
                'nom' => 'Concours Poneys Toutes Races',
            ),
            16 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-01',
                'nom' => 'Régional Welsh du Lion d\'Angers',
            ),
            17 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-12-27',
                'nom' => 'Salon du cheval',
            ),
            18 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-25',
                'nom' => 'Royal Welsh Show',
            ),
            19 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            20 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            21 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-10-01',
                'nom' => 'National Welsh Saumur',
            ),
            22 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            23 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-28',
                'nom' => 'National Shetland de Lignières-en-Berry',
            ),
            24 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            25 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            26 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-02',
                'nom' => 'Championnat du monde de Fort Worth Texas',
            ),
            27 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-16',
                'nom' => 'Régional Shetland Landivisiau Plougourvest',
            ),
            28 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-12',
                'nom' => 'Arabesques',
            ),
            29 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-09',
                'nom' => 'Régional Connemara Lamballe',
            ),
            30 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-08',
                'nom' => 'Grand Branle-Bas dans Landerneau',
            ),
            31 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-30',
                'nom' => 'Régional Pottokak',
            ),
            32 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-20',
                'nom' => 'Régional Français de Selle',
            ),
            33 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-07',
                'nom' => 'National Pottok',
            ),
            34 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-03-14',
                'nom' => 'Dressage ',
            ),
            35 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-05-21',
                'nom' => 'Dressage Poneys',
            ),
            36 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-25',
                'nom' => 'Dressage',
            ),
            37 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-04-19',
                'nom' => 'Dressage Régional',
            ),
            38 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-18',
                'nom' => 'Dressage Régional',
            ),
            39 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-11-22',
                'nom' => 'Dressage Régional',
            ),
            40 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-22',
                'nom' => 'Dressage National',
            ),
            41 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-15',
                'nom' => 'Dressage National',
            ),
            42 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-02-20',
                'nom' => 'Dressage Poneys',
            ),
            43 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-04-20',
                'nom' => 'Dressage Poneys',
            ),
            44 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-01-02',
                'nom' => 'Concours Dressage Poneys Plabennec',
            ),
            45 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-02-20',
                'nom' => 'Concours Dressage Poneys Petite Hublais Betton',
            ),
            46 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-03-05',
                'nom' => 'Concours Amateur Epiniac',
            ),
        ));
        
        
    }
}