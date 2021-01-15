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
                'affixe_id' => 23,
                'created_at' => '2020-02-10 12:16:01',
                'updated_at' => '2021-01-13 17:15:52',
                'nom_elevage' => 'Ranch des Petits Poilus',
                'nom_eleveur' => 'Maggie Shettie',
                'budget' => 47480,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'affixe_id' => NULL,
                'created_at' => '2020-02-10 20:32:30',
                'updated_at' => '2021-01-13 14:01:57',
                'nom_elevage' => 'Prairies Célestes',
                'nom_eleveur' => 'An Ankou',
                'budget' => 20140,
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
                'affixe_id' => 24,
                'created_at' => '2020-02-11 20:11:51',
                'updated_at' => '2021-01-14 10:31:48',
                'nom_elevage' => 'Haras des Noës Blanches',
                'nom_eleveur' => 'Gwendoline Welsh',
                'budget' => 43100,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'affixe_id' => NULL,
                'created_at' => '2020-04-01 18:02:34',
                'updated_at' => '2021-01-13 21:40:44',
                'nom_elevage' => 'Small is Beautiful',
                'nom_eleveur' => 'Minnie Small',
                'budget' => 48800,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'affixe_id' => 25,
                'created_at' => '2020-04-06 18:43:04',
                'updated_at' => '2021-01-13 17:34:58',
                'nom_elevage' => 'Les Bisounours',
                'nom_eleveur' => 'Corinne Titoune',
                'budget' => 37000,
                'role' => 'Joueur',
                'user_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'affixe_id' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-01-13 17:36:06',
                'nom_elevage' => 'Firaoun Arabians',
                'nom_eleveur' => 'Medhi Déjan',
                'budget' => 62500,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'affixe_id' => 47,
                'created_at' => '2020-05-13 20:36:35',
                'updated_at' => '2021-01-13 17:34:58',
                'nom_elevage' => 'Couleur Ti\'arab',
                'nom_eleveur' => 'Nadia Berberian',
                'budget' => 37000,
                'role' => 'Joueur',
                'user_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'affixe_id' => 48,
                'created_at' => '2020-05-31 15:38:47',
                'updated_at' => '2021-01-14 10:40:26',
                'nom_elevage' => 'Must of Mushroom',
                'nom_eleveur' => 'Christine Gallo',
                'budget' => 1430,
                'role' => 'Joueur',
                'user_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'affixe_id' => 49,
                'created_at' => '2020-06-12 12:33:27',
                'updated_at' => '2021-01-13 17:37:12',
                'nom_elevage' => 'Misty Mountains',
                'nom_eleveur' => 'Gwladys Davies',
                'budget' => 39200,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'affixe_id' => 50,
                'created_at' => '2020-06-12 12:35:09',
                'updated_at' => '2021-01-13 17:38:44',
                'nom_elevage' => 'Cob Cottage',
                'nom_eleveur' => 'Mary Cobbler',
                'budget' => 34340,
                'role' => 'Vendeur',
                'user_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'affixe_id' => 70,
                'created_at' => '2021-01-14 20:01:29',
                'updated_at' => '2021-01-14 20:01:29',
                'nom_elevage' => 'Tuatha dé Danann',
                'nom_eleveur' => 'Fidelma O\'Hara',
                'budget' => 19500,
                'role' => 'Joueur',
                'user_id' => 1,
            ),
        ));
        
        
    }
}