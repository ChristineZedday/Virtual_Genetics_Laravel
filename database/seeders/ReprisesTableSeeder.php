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
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 4',
                'categorie' => 'club',
                'niveau' => '4',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 1,
            ),
            1 => 
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
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 3 préliminaire',
                'categorie' => 'club',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 3 libre',
                'categorie' => 'club',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 2,
            ),
            4 => 
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
            5 => 
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
                'niveau_num_global' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 3 Grand Prix',
                'categorie' => 'club',
                'niveau' => '3',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 2 préliminaire',
                'categorie' => 'club',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 5,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 2 libre',
                'categorie' => 'club',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 6,
            ),
            9 => 
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
                'niveau_num_global' => 6,
            ),
            10 => 
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
                'niveau_num_global' => 6,
            ),
            11 => 
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
                'niveau_num_global' => 7,
            ),
            12 => 
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
                'niveau_num_global' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'club 2 Grand Prix',
                'categorie' => 'club',
                'niveau' => '2',
                'taille_min_cm' => 108,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 7,
            ),
            14 => 
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
                'niveau_num_global' => 8,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E1 Grand Prix',
                'categorie' => 'club',
                'niveau' => '4',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 9,
            ),
            16 => 
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
                'niveau_num_global' => 8,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'poney Elite Grand Prix',
                'categorie' => 'club',
                'niveau' => 'elite',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 9,
            ),
            18 => 
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
                'niveau_num_global' => 12,
            ),
            19 => 
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
                'niveau_num_global' => 13,
            ),
            20 => 
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
                'niveau_num_global' => 10,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'As Poney 2 Grand Prix',
                'categorie' => 'club',
                'niveau' => '4',
                'taille_min_cm' => 108,
                'taille_max_cm' => 149,
                'age_min_administratif' => 4,
                'niveau_num_global' => 11,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poney E Elite',
                'categorie' => 'poney',
                'niveau' => 'elite',
                'taille_min_cm' => 149,
                'taille_max_cm' => 165,
                'age_min_administratif' => 4,
                'niveau_num_global' => 10,
            ),
        ));
        
        
    }
}