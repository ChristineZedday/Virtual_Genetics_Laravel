<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'chemin' => 'fond',
                'extension' => 'png',
                'z_index' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'chemin' => 'bai',
                'extension' => 'png',
                'z_index' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'chemin' => 'noir',
                'extension' => 'png',
                'z_index' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'chemin' => 'alezan',
                'extension' => 'png',
                'z_index' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'chemin' => 'isabelle',
                'extension' => 'png',
                'z_index' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'chemin' => 'perlino',
                'extension' => 'png',
                'z_index' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'chemin' => 'palomino',
                'extension' => 'png',
                'z_index' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'chemin' => 'cremello',
                'extension' => 'png',
                'z_index' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'chemin' => 'smokycream',
                'extension' => 'png',
                'z_index' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'chemin' => 'abricot',
                'extension' => 'png',
                'z_index' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'chemin' => 'baiperle',
                'extension' => 'png',
                'z_index' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'chemin' => 'blanc',
                'extension' => 'png',
                'z_index' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'chemin' => 'sabinoW200',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'chemin' => 'tobiano0',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => '2020-04-18 15:31:40',
                'updated_at' => '2020-04-18 15:31:40',
            ),
            14 => 
            array (
                'id' => 20,
                'chemin' => 'tobiano4',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => '2020-04-18 15:35:47',
                'updated_at' => '2020-04-18 15:35:47',
            ),
            15 => 
            array (
                'id' => 21,
                'chemin' => 'tobiano2',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => '2020-04-18 15:36:04',
                'updated_at' => '2020-04-18 15:36:04',
            ),
            16 => 
            array (
                'id' => 22,
                'chemin' => 'W201',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-18 15:36:04',
                'updated_at' => '2020-04-18 15:36:04',
            ),
            17 => 
            array (
                'id' => 23,
                'chemin' => 'sabino2',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 17:33:35',
                'updated_at' => '2020-04-20 17:33:35',
            ),
            18 => 
            array (
                'id' => 24,
                'chemin' => 'W203',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 17:34:03',
                'updated_at' => '2020-04-20 17:34:03',
            ),
            19 => 
            array (
                'id' => 26,
                'chemin' => 'sabinoW204',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 18:37:50',
                'updated_at' => '2020-04-20 18:37:50',
            ),
            20 => 
            array (
                'id' => 27,
                'chemin' => 'sabino0',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 20:36:05',
                'updated_at' => '2020-04-20 20:36:05',
            ),
            21 => 
            array (
                'id' => 28,
                'chemin' => 'sabino4',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-20 20:56:41',
                'updated_at' => '2020-04-20 20:56:41',
            ),
            22 => 
            array (
                'id' => 29,
                'chemin' => 'tobiano6',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => '2020-04-20 21:06:04',
                'updated_at' => '2020-04-20 21:06:04',
            ),
            23 => 
            array (
                'id' => 30,
                'chemin' => 'sabino6',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-04-21 16:40:49',
                'updated_at' => '2020-04-21 16:40:49',
            ),
            24 => 
            array (
                'id' => 31,
                'chemin' => 'pseudoperlino',
                'extension' => 'png',
                'z_index' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 32,
                'chemin' => 'pseudocremello',
                'extension' => 'png',
                'z_index' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 33,
                'chemin' => 'pseudosmoky',
                'extension' => 'png',
                'z_index' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 34,
                'chemin' => 'noirperle',
                'extension' => 'png',
                'z_index' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 35,
                'chemin' => 'abricot',
                'extension' => 'png',
                'z_index' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 36,
                'chemin' => 'alezandun',
                'extension' => 'png',
                'z_index' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 37,
                'chemin' => 'baidun',
                'extension' => 'png',
                'z_index' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 38,
                'chemin' => 'souris',
                'extension' => 'png',
                'z_index' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 39,
                'chemin' => 'mushroom',
                'extension' => 'png',
                'z_index' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 40,
                'chemin' => 'tobiano7',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 41,
                'chemin' => 'champagneor',
                'extension' => 'png',
                'z_index' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 42,
                'chemin' => 'champagneambre',
                'extension' => 'png',
                'z_index' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 43,
                'chemin' => 'champagneclassique',
                'extension' => 'png',
                'z_index' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 44,
                'chemin' => 'baisilver',
                'extension' => 'png',
                'z_index' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 45,
                'chemin' => 'noirsilver',
                'extension' => 'png',
                'z_index' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 46,
                'chemin' => 'W202',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-14 13:51:57',
                'updated_at' => '2020-05-14 13:51:57',
            ),
            40 => 
            array (
                'id' => 47,
                'chemin' => 'gris',
                'extension' => 'png',
                'z_index' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 48,
                'chemin' => 'W200',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-22 20:52:39',
                'updated_at' => '2020-05-22 20:52:39',
            ),
            42 => 
            array (
                'id' => 49,
                'chemin' => 'flaxen',
                'extension' => 'png',
                'z_index' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 50,
                'chemin' => 'sabinoW206',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-23 15:21:28',
                'updated_at' => '2020-05-23 15:21:28',
            ),
            44 => 
            array (
                'id' => 51,
                'chemin' => 'rouan1',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => '2020-05-23 15:24:13',
                'updated_at' => '2020-05-23 15:24:13',
            ),
            45 => 
            array (
                'id' => 52,
                'chemin' => 'sabino8',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-23 15:24:13',
                'updated_at' => '2020-05-23 15:24:13',
            ),
            46 => 
            array (
                'id' => 53,
                'chemin' => 'W204',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-23 15:24:26',
                'updated_at' => '2020-05-23 15:24:26',
            ),
            47 => 
            array (
                'id' => 54,
                'chemin' => 'silver',
                'extension' => 'png',
                'z_index' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 55,
                'chemin' => 'rouan3',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => '2020-05-23 17:04:12',
                'updated_at' => '2020-05-23 17:04:12',
            ),
            49 => 
            array (
                'id' => 56,
                'chemin' => 'rouan5',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => '2020-05-23 17:07:29',
                'updated_at' => '2020-05-23 17:07:29',
            ),
            50 => 
            array (
                'id' => 57,
                'chemin' => 'W206',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-23 17:07:40',
                'updated_at' => '2020-05-23 17:07:40',
            ),
            51 => 
            array (
                'id' => 60,
                'chemin' => 'sabinoW202',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-23 17:11:50',
                'updated_at' => '2020-05-23 17:11:50',
            ),
            52 => 
            array (
                'id' => 61,
                'chemin' => 'W205',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => '2020-05-23 17:23:52',
                'updated_at' => '2020-05-23 17:23:52',
            ),
            53 => 
            array (
                'id' => 62,
                'chemin' => 'pangare',
                'extension' => 'png',
                'z_index' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 63,
                'chemin' => 'splash0',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 64,
                'chemin' => 'Lpsabots',
                'extension' => 'png',
                'z_index' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 65,
                'chemin' => 'LpPeau',
                'extension' => 'png',
                'z_index' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 66,
                'chemin' => 'LpPATN0',
                'extension' => 'png',
                'z_index' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 67,
                'chemin' => 'LpLpPATN0',
                'extension' => 'png',
                'z_index' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 68,
                'chemin' => 'rouan0',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 69,
                'chemin' => 'rouan6',
                'extension' => 'p,g',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 70,
                'chemin' => 'rouan7',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 71,
                'chemin' => 'rouan8',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 72,
                'chemin' => 'rouan9',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 73,
                'chemin' => 'sabinoW201',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 74,
                'chemin' => 'sabinoW203',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 75,
                'chemin' => 'sabinoW205',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 76,
                'chemin' => 'sabinoW207',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 77,
                'chemin' => 'sabinoW209',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 78,
                'chemin' => 'W207',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 79,
                'chemin' => 'sabinoW208',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 80,
                'chemin' => 'rouan2',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 81,
                'chemin' => 'rouan4',
                'extension' => 'png',
                'z_index' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 82,
                'chemin' => 'sabino1',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 83,
                'chemin' => 'sabino3',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 84,
                'chemin' => 'sabino5',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 85,
                'chemin' => 'sabino7',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 86,
                'chemin' => 'tobiano1',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 87,
                'chemin' => 'tobiano3',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 88,
                'chemin' => 'tobiano5',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 89,
                'chemin' => 'tobiano8',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 90,
                'chemin' => 'tobiano9',
                'extension' => 'png',
                'z_index' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 91,
                'chemin' => 'splash1',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 92,
                'chemin' => 'splash2',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 93,
                'chemin' => 'splash3',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 94,
                'chemin' => 'splash4',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 95,
                'chemin' => 'splash5',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 96,
                'chemin' => 'splash6',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 97,
                'chemin' => 'splash7',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 98,
                'chemin' => 'splash8',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 99,
                'chemin' => 'splash9',
                'extension' => 'png',
                'z_index' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 100,
                'chemin' => 'rmalezan',
                'extension' => 'png',
                'z_index' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 101,
                'chemin' => 'rmnoir',
                'extension' => 'png',
                'z_index' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 102,
                'chemin' => 'crinsblancs',
                'extension' => 'png',
                'z_index' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 103,
                'chemin' => 'frameovero',
                'extension' => 'png',
                'z_index' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}