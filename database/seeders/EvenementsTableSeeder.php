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
                'distance' => 200,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-12',
                'nom' => 'Modèle et Allures Poney Saint-Lô',
                'distance' => 150,
            ),
            2 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-24',
                'nom' => 'Grand Régional FPPL au Lion d\'Angers',
                'distance' => 100,
            ),
            3 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-25',
                'nom' => 'Minature Western Show Yssingeaux',
                'distance' => 760,
            ),
            4 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-07',
                'nom' => 'Modèle et Allures Poney Haras du Pin',
                'distance' => 200,
            ),
            5 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-06-01',
                'nom' => 'Régional Welsh du Lion d\'Angers',
                'distance' => 100,
            ),
            6 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-12-27',
                'nom' => 'Salon du cheval',
                'distance' => 350,
            ),
            7 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-25',
                'nom' => 'Royal Welsh Show à Llanelwedd',
                'distance' => 700,
            ),
            8 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-14',
                'nom' => 'National Connemara de Pompadour',
                'distance' => 540,
            ),
            9 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-24',
                'nom' => 'Connemara Pony Show of Clifden',
                'distance' => 1320,
            ),
            10 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-10-01',
                'nom' => 'National Welsh Saumur',
                'distance' => 200,
            ),
            11 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-18',
                'nom' => 'Sologn\' Pony',
                'distance' => 380,
            ),
            12 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-28',
                'nom' => 'National Shetland de Lignières-en-Berry',
                'distance' => 450,
            ),
            13 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-12',
                'nom' => 'Championnat de France Arabe de Vichy',
                'distance' => 575,
            ),
            14 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-08-06',
                'nom' => 'Championnat du cheval miniature Français Vichy',
                'distance' => 575,
            ),
            15 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-16',
                'nom' => 'Régional Shetland Landivisiau Plougourvest',
                'distance' => 210,
            ),
            16 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-14',
                'nom' => 'Régional Arabes et DSA Landivisiau',
                'distance' => 210,
            ),
            17 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-09-09',
                'nom' => 'Régional Connemara Lamballe',
                'distance' => 90,
            ),
            18 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-03-18',
                'nom' => 'Concours des mâles Pottok Ascain et Hélette',
                'distance' => 680,
            ),
            19 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-29',
                'nom' => 'Régional Français de Selle à Lamballe',
                'distance' => 90,
            ),
            20 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2000-07-21',
                'nom' => 'Concours des juments et pouliches Pottok à Sare',
                'distance' => 680,
            ),
            21 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-03-05',
                'nom' => 'Concours Amateur et Poney Epiniac',
                'distance' => 55,
            ),
            22 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-05-08',
                'nom' => 'Dressage Poneys Amateur et Pro Mur-de-Bretagne Guerlédan',
                'distance' => 110,
            ),
            23 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-06-11',
                'nom' => 'Dressage Championnat Ille-et-Vilaine Amateur et Poney à Montfort-sur-Meu',
                'distance' => 30,
            ),
            24 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-04-30',
                'nom' => 'Concours Amateur Etrier de Plerguer',
                'distance' => 60,
            ),
            25 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-07-15',
                'nom' => 'Championnat Dressage Bretagne Amateur Poney et  Pro Hennebont Kermat',
                'distance' => 145,
            ),
            26 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-08-12',
                'nom' => 'Dressage Amateur Poney Etrier de Plerguer',
                'distance' => 60,
            ),
            27 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-29',
                'nom' => 'Dressage National Le Mans Boulerie Poney Amateur Pro',
                'distance' => 140,
            ),
            28 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-01',
                'nom' => 'Dressage Amateur Thorigné-Fouillard',
                'distance' => 15,
            ),
            29 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-02-20',
                'nom' => 'Concours Dressage Poneys Petite Hublais Betton',
                'distance' => 15,
            ),
            30 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-04-23',
                'nom' => 'Concours Dressage Poneys Plouisy Argoat Equitation',
                'distance' => 140,
            ),
            31 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-01-02',
                'nom' => 'Concours Dressage Poneys Plabennec',
                'distance' => 240,
            ),
            32 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-08',
                'nom' => 'Dressage Amateur Pro Poney de Mur-de-Bretagne Guerlédan',
                'distance' => 110,
            ),
            33 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-10-22',
                'nom' => 'Dressage Poney Cardroc La Foucheraie',
                'distance' => 30,
            ),
            34 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-11-12',
                'nom' => 'Dressage Poney Carhaix',
                'distance' => 160,
            ),
            35 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-04-15',
                'nom' => 'Dressage International Poney Amateur Pro Le Mans Boulerie',
                'distance' => 140,
            ),
            36 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-03-12',
                'nom' => 'Dressage National Pro Amateur La Roche sur Yon',
                'distance' => 190,
            ),
            37 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-06-21',
                'nom' => 'Dressage National de Cholet',
                'distance' => 170,
            ),
            38 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-07-25',
                'nom' => 'International Shetland Pony Show de Saint Lô',
                'distance' => 150,
            ),
            39 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-09-15',
                'nom' => 'La Grande Semaine de Pompadour International AA',
                'distance' => 540,
            ),
            40 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-07-26',
                'nom' => 'Modèle et Allures SF et AA Saint Lô',
                'distance' => 150,
            ),
            41 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-12-05',
                'nom' => 'Championnat mâles SF Saint Lô',
                'distance' => 150,
            ),
            42 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-08-29',
                'nom' => 'Grande semaine de Fontainebleau',
                'distance' => 370,
            ),
            43 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-07-25',
                'nom' => 'Concours qualificatif femelles SF Lamballe',
                'distance' => 90,
            ),
            44 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'date' => '2001-11-17',
                'nom' => 'Concours qualifcatif mâles SF Lamballe',
                'distance' => 90,
            ),
        ));
        
        
    }
}