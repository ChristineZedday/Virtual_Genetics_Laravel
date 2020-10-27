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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
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
                'commentaire' => 'DSA 50% min',
                'approbation' => 0,
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
                'commentaire' => 'DSA 50% min',
                'approbation' => 0,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
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
                'commentaire' => 'WPB 50% ',
                'approbation' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
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
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            35 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            36 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 3,
                'race_mere_id' => NULL,
                'race_produit_id' => 3,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'miniature',
                'approbation' => 0,
            ),
            37 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => NULL,
                'race_mere_id' => 3,
                'race_produit_id' => 3,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'miniature',
                'approbation' => 0,
            ),
            38 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 8,
                'race_mere_id' => 9,
                'race_produit_id' => 9,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'DSA > 50%',
                'approbation' => 0,
            ),
            39 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 9,
                'race_mere_id' => 8,
                'race_produit_id' => 9,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'DSA > 50%',
                'approbation' => 0,
            ),
            40 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 4,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            41 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 5,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            42 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 6,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            43 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 7,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            44 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            45 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            46 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            47 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 10,
                'race_produit_id' => 10,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'WPB > 50%',
                'approbation' => 0,
            ),
            48 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 6,
                'race_produit_id' => 7,
                'taille_conditions' => 1,
                'automatique' => 1,
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
            ),
            49 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 7,
                'race_produit_id' => 7,
                'taille_conditions' => 1,
                'automatique' => 1,
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
            ),
            50 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 6,
                'race_produit_id' => 6,
                'taille_conditions' => 1,
                'automatique' => 1,
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
            ),
            51 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 7,
                'race_produit_id' => 6,
                'taille_conditions' => 1,
                'automatique' => 1,
                'commentaire' => 'Welsh toutes sections',
                'approbation' => 0,
            ),
            52 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 8,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            53 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 11,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            54 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 11,
                'race_produit_id' => 11,
                'taille_conditions' => 0,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            55 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            56 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            57 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
            58 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 10,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'commentaire' => 'FS',
                'approbation' => 1,
            ),
        ));
        
        
    }
}