<?php

use Illuminate\Database\Seeder;

class ElevagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('elevages')->delete();
        
        \DB::table('elevages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2020-02-10 12:16:01',
                'updated_at' => '2020-02-10 12:16:01',
                'nom_elevage' => 'Ranch des Petits Poilus',
                'affixe' => NULL,
                'affixe_pre' => 0,
                'nom_eleveur' => 'Maggie Shettie',
                'budget' => 20000,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2020-02-10 20:32:30',
                'updated_at' => '2020-02-10 20:32:30',
                'nom_elevage' => 'Prairies Célestes',
                'affixe' => NULL,
                'affixe_pre' => 0,
                'nom_eleveur' => 'An Ankou',
                'budget' => 20000,
                'role' => 'Mort',
                'user_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2020-02-10 20:39:02',
                'updated_at' => '2020-02-10 20:39:02',
                'nom_elevage' => 'Achète pas cher',
                'affixe' => NULL,
                'affixe_pre' => 0,
                'nom_eleveur' => 'Harpagon McKignon',
                'budget' => 20000,
                'role' => 'Acheteur',
                'user_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2020-02-11 20:11:51',
                'updated_at' => '2020-02-11 20:11:51',
                'nom_elevage' => 'Haras des Noës Blanches',
                'affixe' => NULL,
                'affixe_pre' => 0,
                'nom_eleveur' => 'Gwendoline Welsh',
                'budget' => 20000,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
        ));
        
        
    }
}