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
                'affixe_id' => NULL,
                'created_at' => '2020-02-10 12:16:01',
                'updated_at' => '2020-04-01 18:25:43',
                'nom_elevage' => 'Ranch des Petits Poilus',
                'nom_eleveur' => 'Maggie Shettie',
                'budget' => 21000,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'affixe_id' => NULL,
                'created_at' => '2020-02-10 20:32:30',
                'updated_at' => '2020-02-10 20:32:30',
                'nom_elevage' => 'Prairies Célestes',
                'nom_eleveur' => 'An Ankou',
                'budget' => 20000,
                'role' => 'Mort',
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'affixe_id' => NULL,
                'created_at' => '2020-02-10 20:39:02',
                'updated_at' => '2020-02-10 20:39:02',
                'nom_elevage' => 'Achète pas cher',
                'nom_eleveur' => 'Harpagon McKignon',
                'budget' => 20000,
                'role' => 'Acheteur',
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'affixe_id' => NULL,
                'created_at' => '2020-02-11 20:11:51',
                'updated_at' => '2020-02-11 20:11:51',
                'nom_elevage' => 'Haras des Noës Blanches',
                'nom_eleveur' => 'Gwendoline Welsh',
                'budget' => 20000,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'affixe_id' => NULL,
                'created_at' => '2020-04-01 18:02:34',
                'updated_at' => '2020-04-01 18:25:43',
                'nom_elevage' => 'Small is Beautiful',
                'nom_eleveur' => 'Minnie Small',
                'budget' => 19000,
                'role' => 'Joueur',
                'user_id' => 1,
            ),
        ));
        
        
    }
}