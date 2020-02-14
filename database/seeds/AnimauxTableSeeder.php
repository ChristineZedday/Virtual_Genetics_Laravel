<?php

use Illuminate\Database\Seeder;

class AnimauxTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('animaux')->delete();
        
        \DB::table('animaux')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Mignonne',
                'couleur' => 'bai',
                'taille_cm' => 99,
                'race' => 'Shetland',
                'sexe' => 'Femelle',
                'date_achat' => '1970-01-11',
                'date_naissance' => '1966-05-13',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Popeye',
                'couleur' => 'alezan crins lavés',
                'taille_cm' => 102,
                'race' => 'Shetland',
                'sexe' => 'Mâle',
                'date_achat' => '1970-02-11',
                'date_naissance' => '1964-04-15',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
            ),
        ));
        
        
    }
}