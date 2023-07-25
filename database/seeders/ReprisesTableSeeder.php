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
                'age_min_administratif' => 5,
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
                'age_min_administratif' => 5,
                'niveau_num_global' => 3,
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
                'age_min_administratif' => 5,
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
                'age_min_administratif' => 5,
                'niveau_num_global' => 3,
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
                'age_min_administratif' => 5,
                'niveau_num_global' => 4,
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
                'age_min_administratif' => 5,
                'niveau_num_global' => 4,
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
                'age_min_administratif' => 5,
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
                'age_min_administratif' => 5,
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
                'age_min_administratif' => 6,
                'niveau_num_global' => 6,
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
                'age_min_administratif' => 6,
                'niveau_num_global' => 6,
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
                'age_min_administratif' => 5,
                'niveau_num_global' => 5,
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
                'age_min_administratif' => 5,
                'niveau_num_global' => 5,
            ),
            15 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney Elite préliminaire',
                'categorie' => 'As Poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 6,
                'niveau_num_global' => 7,
            ),
            16 => 
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
            17 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney Elite libre',
                'categorie' => 'As Poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 6,
                'niveau_num_global' => 8,
            ),
            18 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney Elite Grand Prix',
                'categorie' => 'As Poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 6,
                'niveau_num_global' => 8,
            ),
            19 => 
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
            20 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E Elite libre',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 5,
                'niveau_num_global' => 5,
            ),
            21 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E Elite Grand Prix',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 5,
                'niveau_num_global' => 5,
            ),
            22 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 préliminaire',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 4,
            ),
            23 => 
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
            24 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 Libre',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 5,
            ),
            25 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 Grand Prix',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 5,
            ),
            26 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 B',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 2,
            ),
            27 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 3 A',
                'categorie' => 'amateur',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 3,
            ),
            28 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E entrainement',
                'categorie' => 'poney',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            29 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney A élite équipe',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 5,
                'niveau_num_global' => 2,
            ),
            30 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 2 B',
                'categorie' => 'amateur',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 6,
            ),
            31 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 2 A',
                'categorie' => 'amateur',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 7,
            ),
            32 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 2 libre',
                'categorie' => 'amateur',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 9,
            ),
            33 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 2 GP',
                'categorie' => 'amateur',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 5,
                'niveau_num_global' => 9,
            ),
            34 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 1 B',
                'categorie' => 'amateur',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 6,
                'niveau_num_global' => 10,
            ),
            35 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur 1 A',
                'categorie' => 'amateur',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 6,
                'niveau_num_global' => 11,
            ),
            36 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 3 préliminaire',
                'categorie' => 'pro',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 12,
            ),
            37 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur élite A',
                'categorie' => 'amateur',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 12,
            ),
            38 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur Saint-Georges',
                'categorie' => 'amateur',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 13,
            ),
            39 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Amateur élite Grand Prix',
                'categorie' => 'amateur',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 13,
            ),
            40 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 3 Grand Prix',
                'categorie' => 'pro',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 13,
            ),
            41 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 2 préliminaire',
                'categorie' => 'pro',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 14,
            ),
            42 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 2 libre',
                'categorie' => 'pro',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 15,
            ),
            43 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 2 Grand Prix',
                'categorie' => 'pro',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 7,
                'niveau_num_global' => 15,
            ),
            44 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 1 préliminaire',
                'categorie' => 'pro',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 8,
                'niveau_num_global' => 16,
            ),
            45 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 1 A',
                'categorie' => 'pro',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 8,
                'niveau_num_global' => 17,
            ),
            46 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro 1 Grand Prix',
                'categorie' => 'pro',
                'niveau' => '1',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 8,
                'niveau_num_global' => 18,
            ),
            47 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro élite libre',
                'categorie' => 'pro',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 8,
                'niveau_num_global' => 19,
            ),
            48 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro élite Grand Prix',
                'categorie' => 'pro',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 8,
                'niveau_num_global' => 19,
            ),
            49 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pro élite Grand Prix spécial',
                'categorie' => 'pro',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 215,
                'age_min_administratif' => 8,
                'niveau_num_global' => 20,
            ),
        ));
        
        
    }
}