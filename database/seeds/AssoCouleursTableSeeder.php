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
        ));
        
        
    }
}