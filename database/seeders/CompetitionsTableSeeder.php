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
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 15,
                'prix_premier' => 75,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 30,
                'prix_premier' => 200,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 15,
                'prix_premier' => 100,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Poneys',
                'type' => 'Modèle et Allures',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            14 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            15 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 15,
                'prix_premier' => 100,
            ),
            16 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            17 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 50,
                'prix_premier' => 300,
            ),
            18 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            19 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            20 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 15,
                'prix_premier' => 150,
            ),
            21 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            22 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            23 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            24 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            25 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 150,
            ),
            26 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 25,
                'prix_premier' => 200,
            ),
            27 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours poneys ',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 25,
                'prix_premier' => 200,
            ),
            28 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 30,
                'prix_premier' => 300,
            ),
            29 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 30,
                'prix_premier' => 300,
            ),
            30 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 30,
                'prix_premier' => 300,
            ),
            31 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 400,
            ),
            32 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Mountain',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            33 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            34 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            35 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 50,
                'prix_premier' => 1000,
            ),
            36 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 25,
                'prix_premier' => 250,
            ),
            37 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 400,
            ),
            38 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 600,
            ),
            39 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Riding Pony Breeds',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 50,
                'prix_premier' => 1000,
            ),
            40 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 20,
                'prix_premier' => 400,
            ),
            41 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 20,
                'prix_premier' => 400,
            ),
            42 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 400,
            ),
            43 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 50,
                'prix_premier' => 700,
            ),
            44 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 300,
            ),
            45 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            46 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 300,
            ),
            47 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            48 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            49 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 1000,
            ),
            50 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 300,
            ),
            51 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'type' => 'Modèle et Allures',
                'niveau_id' => 4,
                'prix_inscription' => 40,
                'prix_premier' => 600,
            ),
            52 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'concours Dressage Poney',
                'type' => 'Dressage',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 0,
            ),
            53 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'concours Dressage Poney E',
                'type' => 'Dressage',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 0,
            ),
            54 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Dressage Poney',
                'type' => 'Dressage',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 0,
            ),
            55 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Dressage Poney E',
                'type' => 'Dressage',
                'niveau_id' => 2,
                'prix_inscription' => 25,
                'prix_premier' => 0,
            ),
            56 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours dressage Amateur',
                'type' => 'Dressage',
                'niveau_id' => 1,
                'prix_inscription' => 15,
                'prix_premier' => 100,
            ),
            57 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours dressage Amateur',
                'type' => 'Dressage',
                'niveau_id' => 2,
                'prix_inscription' => 25,
                'prix_premier' => 250,
            ),
            58 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours dressage Amateur',
                'type' => 'Dressage',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            59 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Dressage Pro',
                'type' => 'Dressage',
                'niveau_id' => 3,
                'prix_inscription' => 50,
                'prix_premier' => 1000,
            ),
            60 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Dressage Poney ',
                'type' => 'Dressage',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 0,
            ),
            61 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Dressage Poney E',
                'type' => 'Dressage',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 0,
            ),
            62 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Pottok B',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 20,
                'prix_premier' => 400,
            ),
            63 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours 2 et 3 ans AA',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            64 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures AA',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 25,
                'prix_premier' => 200,
            ),
            65 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Selle Français',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 25,
                'prix_premier' => 200,
            ),
            66 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours mâles 2 et 3 ans SF',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            67 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'concours femelles SF',
                'type' => 'Modèle et Allures',
                'niveau_id' => 3,
                'prix_inscription' => 40,
                'prix_premier' => 500,
            ),
            68 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Qualificatf mâles SF 2 et 3 ans ',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            69 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Qualificatif femelles 2 et 3 ans SF',
                'type' => 'Modèle et Allures',
                'niveau_id' => 2,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
        ));
        
        
    }
}