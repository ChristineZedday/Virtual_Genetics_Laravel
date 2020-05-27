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
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'nom' => 'tobianorouan',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'nom' => 'marmoré',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'nom' => 'couverture blanche',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'nom' => 'couverture tachetée',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'nom' => 'doubleLP',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'nom' => 'couverture',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}