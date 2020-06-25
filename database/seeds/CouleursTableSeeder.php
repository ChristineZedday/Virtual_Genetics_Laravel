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
                'id' => 23,
                'nom' => 'sabinoW20',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'nom' => 'noir perle',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'nom' => 'cremeperle',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'nom' => 'pseudocremello',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'nom' => 'pseudoperlino',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'nom' => 'pseudosmoky',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'nom' => 'dun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'nom' => 'bai dun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'nom' => 'alezan dun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 32,
                'nom' => 'souris',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 33,
                'nom' => 'silver',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 34,
                'nom' => 'baisilver',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'nom' => 'noirsilver',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 36,
                'nom' => 'mushroom',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 37,
                'nom' => 'mushroom',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 38,
                'nom' => 'champagne',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'nom' => 'champagneor',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'nom' => 'champagneambre',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'nom' => 'champagneclassique',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'nom' => 'gris',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'nom' => 'rouan',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'nom' => 'crins lavés',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 45,
                'nom' => 'alezan crins lavés',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 46,
                'nom' => 'pangaré',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 47,
                'nom' => 'alezan aa',
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 48,
                'nom' => 'alezan agouti',
                'base_couleur' => 1,
                'est_motif' => 0,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 49,
                'nom' => 'splash',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 51,
                'nom' => 'marmoré',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 52,
                'nom' => 'couverture blanche',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 53,
                'nom' => 'couverture tachetée',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 54,
                'nom' => 'doubleLP',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 55,
                'nom' => 'couverture',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 56,
                'nom' => 'W200',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 57,
                'nom' => 'W201',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 60,
                'nom' => 'W202',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 61,
                'nom' => 'W203',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 62,
                'nom' => 'W204',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 63,
                'nom' => 'W205',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 64,
                'nom' => 'W206',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 65,
                'nom' => 'W207',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 66,
                'nom' => 'W208',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 67,
                'nom' => 'W209',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 68,
                'nom' => 'sabinoW200',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 69,
                'nom' => 'sabinoW201',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 70,
                'nom' => 'sabinoW202',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 71,
                'nom' => 'sabinoW203',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 72,
                'nom' => 'sabinoW204',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 73,
                'nom' => 'sabinoW205',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 74,
                'nom' => 'sabinoW206',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 75,
                'nom' => 'sabinoW207',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 76,
                'nom' => 'sabinoW208',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 77,
                'nom' => 'sabinoW209',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 88,
                'nom' => 'sabino0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 89,
                'nom' => 'sabino1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 90,
                'nom' => 'sabino2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 91,
                'nom' => 'sabino3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 92,
                'nom' => 'sabino4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 93,
                'nom' => 'sabino5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 94,
                'nom' => 'sabino6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 95,
                'nom' => 'sabino7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 96,
                'nom' => 'sabino8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 97,
                'nom' => 'sabino9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 98,
                'nom' => 'tobiano0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 99,
                'nom' => 'tobiano1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 100,
                'nom' => 'tobiano2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 101,
                'nom' => 'tobiano3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 102,
                'nom' => 'tobiano4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 103,
                'nom' => 'tobiano5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 104,
                'nom' => 'tobiano6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 105,
                'nom' => 'tobiano7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 106,
                'nom' => 'tobiano8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 107,
                'nom' => 'tobiano9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 108,
                'nom' => 'splash0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 109,
                'nom' => 'splash1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 110,
                'nom' => 'splash2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 111,
                'nom' => 'splash3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 112,
                'nom' => 'splash4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 113,
                'nom' => 'splash5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 114,
                'nom' => 'splash6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 115,
                'nom' => 'splash7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 116,
                'nom' => 'splash8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 117,
                'nom' => 'splash9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 118,
                'nom' => 'rouan0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 119,
                'nom' => 'rouan1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 120,
                'nom' => 'rouan2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 121,
                'nom' => 'rouan3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 122,
                'nom' => 'rouan4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 123,
                'nom' => 'rouan5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 124,
                'nom' => 'rouan6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 125,
                'nom' => 'rouan7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 126,
                'nom' => 'rouan8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 127,
                'nom' => 'rouan9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 128,
                'nom' => 'frameovero',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 129,
                'nom' => 'frameovero0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 130,
                'nom' => 'frameovero1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 131,
                'nom' => 'frameovero2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 132,
                'nom' => 'frameovero3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 133,
                'nom' => 'frameovero4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 134,
                'nom' => 'frameovero5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 135,
                'nom' => 'frameovero6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 136,
                'nom' => 'frameovero7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 137,
                'nom' => 'frameovero8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 138,
                'nom' => 'frameovero9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 139,
                'nom' => 'alezannondun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 140,
                'nom' => 'bainondun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 141,
                'nom' => 'noirnondun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 142,
                'nom' => 'nondun',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 143,
                'nom' => 'couverture blanche0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 144,
                'nom' => 'couverture blanche1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 145,
                'nom' => 'couverture blanche2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 146,
                'nom' => 'couverture blanche3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 147,
                'nom' => 'couverture blanche4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 149,
                'nom' => 'couverture blanche5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 150,
                'nom' => 'couverture blanche6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 151,
                'nom' => 'couverture blanche7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 152,
                'nom' => 'couverture blanche8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 153,
                'nom' => 'couverture blanche9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 154,
                'nom' => 'couverture tachetée1',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 155,
                'nom' => 'couverture tachetée2',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 156,
                'nom' => 'couverture tachetée3',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 157,
                'nom' => 'couverture tachetée0',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 158,
                'nom' => 'couverture tachetée4',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 159,
                'nom' => 'couverture tachetée5',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 160,
                'nom' => 'couverture tachetée6',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 161,
                'nom' => 'couverture tachetée7',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 162,
                'nom' => 'couverture tachetée8',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 163,
                'nom' => 'couverture tachetée9',
                'base_couleur' => 0,
                'est_motif' => 1,
                'est_dilution' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 164,
                'nom' => 'baimushroom',
                'base_couleur' => 0,
                'est_motif' => 0,
                'est_dilution' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}