<?php

use Illuminate\Database\Seeder;

class AssoCouleursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asso_couleurs')->delete();
        
        \DB::table('asso_couleurs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'couleur_res_id' => 1,
                'couleur1_id' => 4,
                'couleur2_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'couleur_res_id' => 2,
                'couleur1_id' => 4,
                'couleur2_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'couleur_res_id' => 10,
                'couleur1_id' => 3,
                'couleur2_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'couleur_res_id' => 11,
                'couleur1_id' => 3,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 10,
                'couleur_res_id' => 9,
                'couleur1_id' => 1,
                'couleur2_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 11,
                'couleur_res_id' => 12,
                'couleur1_id' => 1,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 12,
                'couleur_res_id' => 2,
                'couleur1_id' => 2,
                'couleur2_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 13,
                'couleur_res_id' => 13,
                'couleur1_id' => 2,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'couleur_res_id' => 14,
                'couleur1_id' => 3,
                'couleur2_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'couleur_res_id' => 15,
                'couleur1_id' => 1,
                'couleur2_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'couleur_res_id' => 2,
                'couleur1_id' => 2,
                'couleur2_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'couleur_res_id' => 20,
                'couleur1_id' => 20,
                'couleur2_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'couleur_res_id' => 20,
                'couleur1_id' => 20,
                'couleur2_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'couleur_res_id' => 20,
                'couleur1_id' => 20,
                'couleur2_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'couleur_res_id' => 21,
                'couleur1_id' => 17,
                'couleur2_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'couleur_res_id' => 22,
                'couleur1_id' => 17,
                'couleur2_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'couleur_res_id' => 26,
                'couleur1_id' => 3,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'couleur_res_id' => 27,
                'couleur1_id' => 1,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'couleur_res_id' => 28,
                'couleur1_id' => 2,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'couleur_res_id' => 30,
                'couleur1_id' => 1,
                'couleur2_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 26,
                'couleur_res_id' => 31,
                'couleur1_id' => 3,
                'couleur2_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 27,
                'couleur_res_id' => 32,
                'couleur1_id' => 2,
                'couleur2_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}