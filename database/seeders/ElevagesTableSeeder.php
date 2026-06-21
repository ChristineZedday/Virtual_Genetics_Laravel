<?php

namespace Database\Seeders;

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
                'affixe_id' => 23,
                'created_at' => '2020-02-10 12:16:01',
                'foin' => 0.0,
                'id' => 1,
                'nom_elevage' => 'Ranch des Petits Poilus',
                'nom_eleveur' => 'Maggie Shettie',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-22 14:31:43',
                'user_id' => 1,
            ),
            1 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2020-02-10 20:32:30',
                'foin' => 0.0,
                'id' => 2,
                'nom_elevage' => 'Prairies Célestes',
                'nom_eleveur' => 'An Ankou',
                'role' => 'Mort',
                'surface' => 10.0,
                'updated_at' => '2021-01-13 14:01:57',
                'user_id' => 1,
            ),
            2 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2020-02-10 20:39:02',
                'foin' => 0.0,
                'id' => 3,
                'nom_elevage' => 'Achète pas cher',
                'nom_eleveur' => 'Harpagon McKignon',
                'role' => 'Acheteur',
                'surface' => 10.0,
                'updated_at' => '2020-02-10 20:39:02',
                'user_id' => 1,
            ),
            3 => 
            array (
                'affixe_id' => 24,
                'created_at' => '2020-02-11 20:11:51',
                'foin' => 0.0,
                'id' => 4,
                'nom_elevage' => 'Haras des Noës Blanches',
                'nom_eleveur' => 'Gwendoline Welsh',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-21 12:17:47',
                'user_id' => 1,
            ),
            4 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2020-04-01 18:02:34',
                'foin' => 0.0,
                'id' => 5,
                'nom_elevage' => 'Small is Beautiful',
                'nom_eleveur' => 'Minnie Small',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-22 13:42:17',
                'user_id' => 1,
            ),
            5 => 
            array (
                'affixe_id' => NULL,
                'created_at' => NULL,
                'foin' => 0.0,
                'id' => 7,
                'nom_elevage' => 'Firaoun Arabians',
                'nom_eleveur' => 'Medhi Déjan',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-13 17:36:06',
                'user_id' => 1,
            ),
            6 => 
            array (
                'affixe_id' => 49,
                'created_at' => '2020-06-12 12:33:27',
                'foin' => 0.0,
                'id' => 10,
                'nom_elevage' => 'Misty Mountains',
                'nom_eleveur' => 'Gwladys Davies',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-21 17:27:30',
                'user_id' => 1,
            ),
            7 => 
            array (
                'affixe_id' => 50,
                'created_at' => '2020-06-12 12:35:09',
                'foin' => 0.0,
                'id' => 11,
                'nom_elevage' => 'Cob Cottage',
                'nom_eleveur' => 'Mary Cobbler',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-13 17:38:44',
                'user_id' => 1,
            ),
            8 => 
            array (
                'affixe_id' => 70,
                'created_at' => '2021-01-14 20:01:29',
                'foin' => 0.0,
                'id' => 12,
                'nom_elevage' => 'Tuatha dé Danann',
                'nom_eleveur' => 'Fidelma O\'Hara',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-22 17:46:50',
                'user_id' => 1,
            ),
            9 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2021-01-14 20:01:29',
                'foin' => 0.0,
                'id' => 13,
                'nom_elevage' => 'Pottokak',
                'nom_eleveur' => 'Pierre Etcheverry',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2021-01-22 17:46:50',
                'user_id' => 1,
            ),
            10 => 
            array (
                'affixe_id' => 71,
                'created_at' => '2023-01-10 18:19:52',
                'foin' => 0.0,
                'id' => 14,
                'nom_elevage' => 'La Grée des Landelles',
                'nom_eleveur' => 'Christine Galo',
                'role' => 'Joueur',
                'surface' => 10.0,
                'updated_at' => '2023-01-10 18:25:26',
                'user_id' => 3,
            ),
            11 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2023-08-26 12:52:06',
                'foin' => 0.0,
                'id' => 15,
                'nom_elevage' => 'Les Galopins',
                'nom_eleveur' => 'Speedy Gonzalez',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2023-08-26 12:52:06',
                'user_id' => 1,
            ),
            12 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2023-08-28 19:54:10',
                'foin' => 0.0,
                'id' => 16,
                'nom_elevage' => 'Fox Trot',
                'nom_eleveur' => 'Aimé Sulky',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2023-08-28 19:54:10',
                'user_id' => 1,
            ),
            13 => 
            array (
                'affixe_id' => NULL,
                'created_at' => '2026-06-14 20:25:19',
                'foin' => 0.0,
                'id' => 17,
                'nom_elevage' => 'Yeguada La Pradera',
                'nom_eleveur' => 'Miguel Castano',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2026-06-14 20:25:19',
                'user_id' => 1,
            ),
            14 => 
            array (
                'affixe_id' => 72,
                'created_at' => '2026-06-14 20:36:29',
                'foin' => 0.0,
                'id' => 18,
                'nom_elevage' => 'Anglonormania',
                'nom_eleveur' => 'André Bouinou',
                'role' => 'Vendeur',
                'surface' => 10.0,
                'updated_at' => '2026-06-14 20:36:29',
                'user_id' => 1,
            ),
        ));
        
        
    }
}