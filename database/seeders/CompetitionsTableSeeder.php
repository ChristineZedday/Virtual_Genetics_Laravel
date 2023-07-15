<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompetitionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('competitions')->delete();
        
        \DB::table('competitions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 50,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 50,
                'prix_premier' => 500,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 50,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 100,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Poneys',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            14 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            15 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            16 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            17 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 100,
                'prix_premier' => 1000,
            ),
            18 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            19 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 50,
                'prix_premier' => 500,
            ),
            20 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 10,
                'prix_premier' => 200,
            ),
            21 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            22 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            23 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 35,
                'prix_premier' => 400,
            ),
            24 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            25 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            26 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 35,
                'prix_premier' => 400,
            ),
            27 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours poneys ',
                'type' => 'Modèle et Allures', 'niveau_id' => 2,
                'prix_inscription' => 35,
                'prix_premier' => 400,
            ),
            28 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 4000,
            ),
            29 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 3000,
            ),
            30 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 5000,
            ),
            31 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 200,
                'prix_premier' => 7000,
            ),
            32 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 100,
                'prix_premier' => 10000,
            ),
            33 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 100,
                'prix_premier' => 10000,
            ),
            34 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 200,
                'prix_premier' => 20000,
            ),
            35 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 500,
                'prix_premier' => 50000,
            ),
            36 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 4000,
            ),
            37 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 200,
                'prix_premier' => 10000,
            ),
            38 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 6000,
            ),
            39 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Riding Pony Breeds',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 150,
                'prix_premier' => 12000,
            ),
            40 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 10000,
            ),
            41 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 10000,
            ),
            42 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 150,
                'prix_premier' => 7000,
            ),
            43 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 300,
                'prix_premier' => 15000,
            ),
            44 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 5000,
            ),
            45 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 100,
                'prix_premier' => 10000,
            ),
            46 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 5000,
            ),
            47 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 100,
                'prix_premier' => 10000,
            ),
            48 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 7000,
            ),
            49 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 150,
                'prix_premier' => 15000,
            ),
            50 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures', 'niveau_id' => 3,
                'prix_inscription' => 100,
                'prix_premier' => 3000,
            ),
            51 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures', 'niveau_id' => 4,
                'prix_inscription' => 150,
                'prix_premier' => 10000,
            ),
            52 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'concours Dressage Poney',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 50,
            ),
            53 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'concours Dressage Poney E',
                'type' => 'Modèle et Allures', 'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
        ));
        
        
    }
}