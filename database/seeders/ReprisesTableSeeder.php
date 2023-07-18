<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReprisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reprises')->delete();
        
        \DB::table('reprises')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney 3',
                'categorie' => 'poney',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            1 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney 2 libre',
                'categorie' => 'poney',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            2 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney 2 Grand Prix',
                'categorie' => 'poney',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            3 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney 1 libre',
                'categorie' => 'poney',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 3,
            ),
            4 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney E2 libre',
                'categorie' => 'poney',
                'niveau' => '2',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            5 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney 1 Grand Prix',
                'categorie' => 'poney',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 3,
            ),
            6 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney E2 Grand Prix',
                'categorie' => 'poney',
                'niveau' => '2',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            7 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E1 libre',
                'categorie' => 'poney',
                'niveau' => '1',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            8 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E1 Grand Prix',
                'categorie' => 'poney',
                'niveau' => '4',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            9 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney Elite libre',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 4,
            ),
            10 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney Elite Grand Prix',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 4,
            ),
            11 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney 1 libre',
                'categorie' => 'As Poney',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 7,
            ),
            12 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney 1 Grand Prix',
                'categorie' => 'As Poney',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 7,
            ),
            13 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney 2 libre',
                'categorie' => 'As Poney',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 6,
            ),
            14 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney 2 Grand Prix',
                'categorie' => 'As Poney',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 6,
            ),
            15 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E Elite préliminaire',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 3,
            ),
            16 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney Elite préliminaire',
                'categorie' => 'As Poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 8,
            ),
            17 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney 2 préliminaire',
                'categorie' => 'As Poney',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 5,
            ),
            18 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney A Carrousel',
                'categorie' => 'poney',
                'niveau' => '4',
                'taille_min_cm' => 80,
                'taille_max_cm' => 107,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            19 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney Elite libre',
                'categorie' => 'As Poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 9,
            ),
            20 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney Elite Grand Prix',
                'categorie' => 'As Poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 9,
            ),
            21 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney 4 Carrousel',
                'categorie' => 'poney',
                'niveau' => '4',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            22 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E Elite libre',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 3,
            ),
            23 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E Elite Grand Prix',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 4,
            ),
            24 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 préliminaire',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            25 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 4',
                'categorie' => 'amateur',
                'niveau' => '4',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            26 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 Libre',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 4,
                'niveau_num_global' => 4,
            ),
            27 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 Grand Prix',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 4,
                'niveau_num_global' => 3,
            ),
            28 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 B',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            29 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 A',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 4,
                'niveau_num_global' => 3,
            ),
        ));
        
        
    }
}