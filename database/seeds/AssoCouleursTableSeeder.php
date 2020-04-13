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
            
        ));
        
        
    }
}