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
                'nom' => 'Modèle et Allures Poney Saint-Lô',
            ),
            2 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-24',
                'nom' => 'Grand Régional FPPL au Lion d\'Angers',
            ),
            3 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-25',
                'nom' => 'Minature Western Show Yssingeaux',
            ),
            4 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-07',
                'nom' => 'Modèle et Allures Poney Haras du Pin',
            ),
            5 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-01',
                'nom' => 'Régional Welsh du Lion d\'Angers',
            ),
            6 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-12-27',
                'nom' => 'Salon du cheval',
            ),
            7 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-25',
                'nom' => 'Royal Welsh Show à Llanelwedd',
            ),
            8 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-14',
                'nom' => 'National Connemara de Pompadour',
            ),
            9 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
            ),
            10 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-10-01',
                'nom' => 'National Welsh Saumur',
            ),
            11 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-18',
                'nom' => 'Sologn\' Pony',
            ),
            12 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-28',
                'nom' => 'National Shetland de Lignières-en-Berry',
            ),
            13 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
            ),
            14 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
            ),
            15 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-16',
                'nom' => 'Régional Shetland Landivisiau Plougourvest',
            ),
            16 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-14',
                'nom' => 'Régional Arabes et DSA Landivisiau',
            ),
            17 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-09',
                'nom' => 'Régional Connemara Lamballe',
            ),
            18 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-03-18',
                'nom' => 'Concours des mâles Pottok Ascain et Hélette',
            ),
            19 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-20',
                'nom' => 'Régional Français de Selle',
            ),
            20 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-21',
                'nom' => 'Concours des juments et pouliches Pottok à Sare',
            ),
            21 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-03-05',
                'nom' => 'Concours Amateur et Poney Epiniac',
            ),
            22 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-05-08',
                'nom' => 'Dressage Poneys Amateur et Pro Mur-de-Bretagne Guerlédan',
            ),
            23 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-06-11',
                'nom' => 'Dressage Championnat Ille-et-Vilaine Amateur et Poney à Montfort-sur-Meu',
            ),
            24 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-04-30',
                'nom' => 'Concours Amateur Etrier de Plerguer',
            ),
            25 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-07-15',
                'nom' => 'Championnat Dressage Bretagne Amateur Poney et  Pro Hennebont Kermat',
            ),
            26 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-08-12',
                'nom' => 'Dressage Amateur Poney Etrier de Plerguer',
            ),
            27 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-29',
                'nom' => 'Dressage National Le Mans Boulerie Poney Amateur Pro',
            ),
            28 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-01',
                'nom' => 'Dressage Amateur Thorigné-Fouillard',
            ),
            29 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-02-20',
                'nom' => 'Concours Dressage Poneys Petite Hublais Betton',
            ),
            30 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-04-23',
                'nom' => 'Concours Dressage Poneys Plouisy Argoat Equitation',
            ),
            31 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-01-02',
                'nom' => 'Concours Dressage Poneys Plabennec',
            ),
            32 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-08',
                'nom' => 'Dressage Amateur Pro Poney de Mur-de-Bretagne Guerlédan',
            ),
            33 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-22',
                'nom' => 'Dressage Poney Cardroc La Foucheraie',
            ),
            34 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-11-12',
                'nom' => 'Dressage Poney Carhaix',
            ),
            35 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-04-15',
                'nom' => 'Dressage International Poney Amateur Pro Le Mans Boulerie',
            ),
            36 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-03-12',
                'nom' => 'Dressage National Pro Amateur La Roche sur Yon',
            ),
            37 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-06-21',
                'nom' => 'Dressage National de Cholet',
            ),
            38 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-07-25',
                'nom' => 'International Shetland Pony Show de Saint Lô',
            ),
        ));
        
        
    }
}