<?php

use Illuminate\Database\Seeder;

class CouleursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('couleurs')->delete();
        
        \DB::table('couleurs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'bai',
                'image_id' => 2,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'noir',
                'image_id' => 3,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'alezan',
                'image_id' => 4,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'noirbai',
                'image_id' => 2,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'alezanbai',
                'image_id' => NULL,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'alezannoir',
                'image_id' => 3,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'creme',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'doublecreme',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'isabelle',
                'image_id' => 5,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nom' => 'palomino',
                'image_id' => 7,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nom' => 'cremello',
                'image_id' => 8,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nom' => 'perlino',
                'image_id' => 6,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nom' => 'smoky cream',
                'image_id' => 9,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nom' => 'abricot',
                'image_id' => 10,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nom' => 'bai perle',
                'image_id' => 11,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nom' => 'doublepearl',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nom' => 'tobiano',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nom' => 'sabino',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nom' => 'W20',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nom' => 'Blanc',
                'image_id' => 13,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nom' => 'tobianosabino',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'nom' => 'tobianoW20',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'nom' => 'sabinoW20',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'nom' => 'noir perle',
                'image_id' => 34,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'nom' => 'cremeperle',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'nom' => 'pseudocremello',
                'image_id' => 32,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'nom' => 'pseudoperlino',
                'image_id' => 31,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'nom' => 'pseudosmoky',
                'image_id' => 33,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'nom' => 'dun',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'nom' => 'bai dun',
                'image_id' => 37,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'nom' => 'alezan dun',
                'image_id' => 36,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'nom' => 'souris',
                'image_id' => 38,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'nom' => 'silver',
                'image_id' => 54,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'nom' => 'baisilver',
                'image_id' => 44,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'nom' => 'noirsilver',
                'image_id' => 45,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'nom' => 'mushroom',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'nom' => 'mushroom',
                'image_id' => 39,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'nom' => 'champagne',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'nom' => 'champagneor',
                'image_id' => 41,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nom' => 'champagneambre',
                'image_id' => 42,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'nom' => 'champagneclassique',
                'image_id' => 43,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'nom' => 'gris',
                'image_id' => 47,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'nom' => 'rouan',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'nom' => 'crins lavés',
                'image_id' => NULL,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'nom' => 'alezan crins lavés',
                'image_id' => 49,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'nom' => 'pangaré',
                'image_id' => 62,
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'nom' => 'alezan aa',
                'image_id' => 4,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'nom' => 'alezan agouti',
                'image_id' => 4,
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'nom' => 'splash',
                'image_id' => 63,
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}