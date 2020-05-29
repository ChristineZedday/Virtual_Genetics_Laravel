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
          
            16 => 
            array (
                'id' => 22,
                'couleur_res_id' => 26,
                'couleur1_id' => 3,
                'couleur2_id' => 25,
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
            22 => 
            array (
                'id' => 28,
                'couleur_res_id' => 37,
                'couleur1_id' => 3,
                'couleur2_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 29,
                'couleur_res_id' => 34,
                'couleur1_id' => 1,
                'couleur2_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 31,
                'couleur_res_id' => 41,
                'couleur1_id' => 3,
                'couleur2_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 32,
                'couleur_res_id' => 40,
                'couleur1_id' => 1,
                'couleur2_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 33,
                'couleur_res_id' => 41,
                'couleur1_id' => 2,
                'couleur2_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 34,
                'couleur_res_id' => 1,
                'couleur1_id' => 1,
                'couleur2_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 35,
                'couleur_res_id' => 2,
                'couleur1_id' => 2,
                'couleur2_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 36,
                'couleur_res_id' => 35,
                'couleur1_id' => 2,
                'couleur2_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 37,
                'couleur_res_id' => 3,
                'couleur1_id' => 3,
                'couleur2_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 38,
                'couleur_res_id' => 45,
                'couleur1_id' => 3,
                'couleur2_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 39,
                'couleur_res_id' => 20,
                'couleur1_id' => 20,
                'couleur2_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 40,
                'couleur_res_id' => 47,
                'couleur1_id' => 47,
                'couleur2_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 41,
                'couleur_res_id' => 48,
                'couleur1_id' => 48,
                'couleur2_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 42,
                'couleur_res_id' => 10,
                'couleur1_id' => 47,
                'couleur2_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 43,
                'couleur_res_id' => 10,
                'couleur1_id' => 48,
                'couleur2_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 44,
                'couleur_res_id' => 11,
                'couleur1_id' => 47,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 45,
                'couleur_res_id' => 11,
                'couleur1_id' => 48,
                'couleur2_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 46,
                'couleur_res_id' => 14,
                'couleur1_id' => 47,
                'couleur2_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 47,
                'couleur_res_id' => 14,
                'couleur1_id' => 48,
                'couleur2_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 48,
                'couleur_res_id' => 26,
                'couleur1_id' => 47,
                'couleur2_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 49,
                'couleur_res_id' => 26,
                'couleur1_id' => 48,
                'couleur2_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 50,
                'couleur_res_id' => 31,
                'couleur1_id' => 47,
                'couleur2_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 51,
                'couleur_res_id' => 31,
                'couleur1_id' => 48,
                'couleur2_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 52,
                'couleur_res_id' => 37,
                'couleur1_id' => 47,
                'couleur2_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 53,
                'couleur_res_id' => 37,
                'couleur1_id' => 48,
                'couleur2_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 54,
                'couleur_res_id' => 41,
                'couleur1_id' => 47,
                'couleur2_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 55,
                'couleur_res_id' => 41,
                'couleur1_id' => 48,
                'couleur2_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 56,
                'couleur_res_id' => 45,
                'couleur1_id' => 47,
                'couleur2_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 57,
                'couleur_res_id' => 45,
                'couleur1_id' => 48,
                'couleur2_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}