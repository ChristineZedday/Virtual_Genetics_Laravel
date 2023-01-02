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
                'nom' => 'Concours Modèles et Allures Welsh ',
                'niveau' => 'départemental',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Shetland',
                'niveau' => 'départemental',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Connemara',
                'niveau' => 'départemental',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle et Allures Pur-sang Arabe',
                'niveau' => 'départemental',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèle Et Allures Miniature',
                'niveau' => 'départemental',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Modèles et Allures Français de Selle',
                'niveau' => 'départemental',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Concours Poneys et Chevaux de sport',
                'niveau' => 'départemental',
            ),
        ));
        
        
    }
}