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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
              
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
                 'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
               
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
                 'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
              
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
                 'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
              
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
                 'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
               
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
                 'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
               
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
              
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
                 'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
                
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
              
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
               
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
               
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
               
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
                'approbation' => 0,
                'commentaire' => 'DSA 50% min',
               
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
                'approbation' => 0,
                'commentaire' => 'DSA 50% min',
               
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
                'approbation' => 1,
                'commentaire' => 'FS',
               
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
                'approbation' => 1,
                'commentaire' => 'FS',
               
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
                'approbation' => 1,
                'commentaire' => 'FS',
              
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
              
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 0,
                'commentaire' => 'WPB 50% ',
               
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
                'approbation' => 1,
                'commentaire' => 'FS',
               
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
               
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 0,
                'commentaire' => 'miniature',
                
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
                'approbation' => 0,
                'commentaire' => 'miniature',
                
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
                'approbation' => 0,
                'commentaire' => 'DSA > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'DSA > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'WPB > 50%',
                
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
                
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
                
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
                
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
                'approbation' => 0,
                'commentaire' => 'Welsh toutes sections',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
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
                'approbation' => 1,
                'commentaire' => 'FS',
                
            ),
            59 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 4,
                'race_mere_id' => 8,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'approbation' => 1,
                'commentaire' => 'FS',
                
            ),
            60 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 5,
                'race_mere_id' => 8,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'approbation' => 1,
                'commentaire' => 'FS',
                
            ),
            61 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 6,
                'race_mere_id' => 8,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'approbation' => 1,
                'commentaire' => 'FS',
                
            ),
            62 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 7,
                'race_mere_id' => 8,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'approbation' => 1,
                'commentaire' => 'FS',
                
            ),
            63 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'race_pere_id' => 10,
                'race_mere_id' => 8,
                'race_produit_id' => 11,
                'taille_conditions' => 1,
                'automatique' => 0,
                'approbation' => 1,
                'commentaire' => 'FS',
                
            ),
        ));
        
        
    }
}