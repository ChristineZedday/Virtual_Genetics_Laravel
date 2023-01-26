<?php

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
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 50,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'niveau_id' => 1,
                'prix_inscription' => 50,
                'prix_premier' => 500,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 50,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok A',
                'niveau_id' => 1,
                'prix_inscription' => 5,
                'prix_premier' => 100,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Pony Type Cob',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Cob',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Welsh Part-Breed',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Pottok B',
                'niveau_id' => 1,
                'prix_inscription' => 10,
                'prix_premier' => 100,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Demi-sang Arabe',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Poneys de Sport',
                'niveau_id' => 1,
                'prix_inscription' => 20,
                'prix_premier' => 200,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Entrainement Shetland',
                'niveau_id' => 5,
                'prix_inscription' => 1,
                'prix_premier' => 10,
            ),
        ));
        
        
    }
}