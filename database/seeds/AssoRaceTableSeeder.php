<?php

use Illuminate\Database\Seeder;

class AssoRaceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asso_race')->delete();
        
        \DB::table('asso_race')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 5,
                'race_produit_id' => 5,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 4,
                'race_produit_id' => 5,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 6,
                'race_produit_id' => 6,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 7,
                'race_produit_id' => 6,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 4,
                'race_produit_id' => 6,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 4,
                'race_produit_id' => 6,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 6,
                'race_produit_id' => 6,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 5,
                'race_produit_id' => 6,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 7,
                'race_produit_id' => 6,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 5,
                'race_produit_id' => 6,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 7,
                'race_produit_id' => 7,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 5,
                'race_produit_id' => 7,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => NULL,
                'race_produit_id' => 9,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 8,
                'race_produit_id' => 9,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 4,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 5,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 6,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 7,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => NULL,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 4,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => NULL,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 5,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => NULL,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 6,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => NULL,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 7,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 4,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 5,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 6,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 7,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 9,
                'race_produit_id' => 12,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 3,
                'race_mere_id' => NULL,
                'race_produit_id' => 3,
                'taille_conditions' => 1,
                'automatique' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 3,
                'race_produit_id' => 3,
                'taille_conditions' => 1,
                'automatique' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 9,
                'race_produit_id' => 9,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 9,
                'race_mere_id' => 8,
                'race_produit_id' => 9,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 4,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 5,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 6,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 7,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 6,
                'race_produit_id' => 7,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 7,
                'race_produit_id' => 7,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 6,
                'race_produit_id' => 6,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 7,
                'race_produit_id' => 6,
                'taille_conditions' => 1,
                'automatique' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 1,
                'race_produit_id' => 12,
                'taille_conditions' => 1,
                'automatique' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 8,
                'race_produit_id' => 12,
                'taille_conditions' => 1,
                'automatique' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 9,
                'race_mere_id' => 11,
                'race_produit_id' => 12,
                'taille_conditions' => 1,
                'automatique' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 11,
                'race_produit_id' => 12,
                'taille_conditions' => 0,
                'automatique' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 12,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 12,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 12,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 12,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 12,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 12,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 1,
            ),
        ));
        
        
    }
}