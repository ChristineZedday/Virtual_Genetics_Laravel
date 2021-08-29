<?php

use Illuminate\Database\Seeder;

class ModeleAlluresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modele_allures')->delete();
        
        \DB::table('modele_allures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'foal',
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'poulain 1 an',
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'pouliche 1 an',
                'prix_inscription' => 10,
                'prix_premier' => 50,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'étalon 2 ans',
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'pouliche 2 ans',
                'prix_inscription' => 20,
                'prix_premier' => 100,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'étalon 3 ans',
                'prix_inscription' => 25,
                'prix_premier' => 150,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'pouliche 3 ans',
                'prix_inscription' => 25,
                'prix_premier' => 150,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'étalon 4 ans et plus',
                'prix_inscription' => 30,
                'prix_premier' => 300,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'categorie' => 'jument suitée',
                'prix_inscription' => 30,
                'prix_premier' => 300,
            ),
        ));
        
        
    }
}