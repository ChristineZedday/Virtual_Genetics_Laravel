<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AffixesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('affixes')->delete();
        
        \DB::table('affixes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'of Marshwood',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'of Burland',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'Fairy',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'Ceulan',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'Coed Coch',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'libelle' => 'Downland',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'libelle' => 'Anglesey',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'libelle' => 'Mathrafal',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'libelle' => 'of Hools',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'libelle' => 'of Houlland',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'libelle' => 'Bowdler',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'libelle' => 'Twyford',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'libelle' => 'Gue',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'libelle' => 'of Mousa',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'libelle' => 'Fenwick',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'libelle' => 'Halstock',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'libelle' => 'de Bois Guilbert',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'libelle' => 'of Annandale',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'libelle' => 'Robin\'s Brae',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'libelle' => 'Kirkbride',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'libelle' => 'of Shergold',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'libelle' => 'of Maitland',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'libelle' => 'de Poil',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'libelle' => 'des Noës',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'libelle' => 'de Bise',
                'affixe_pre' => 0,
                'created_at' => '2020-04-06 18:43:04',
                'updated_at' => '2020-04-06 18:43:04',
            ),
            25 => 
            array (
                'id' => 26,
                'libelle' => 'Epona',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'libelle' => 'Weston',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'libelle' => 'Kirby Cane',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'libelle' => 'Afan',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'libelle' => 'Menai',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'libelle' => 'Criban',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'libelle' => 'Elvey',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'libelle' => 'Tylwyth',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'libelle' => 'Abercriban',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'libelle' => 'Brierdene',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'libelle' => 'Broheulog',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'libelle' => 'Abercrychan',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'libelle' => 'Glyncoch',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'libelle' => 'Hilin',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'libelle' => 'Cadlanvalley',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'libelle' => 'Llanalyn',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'libelle' => 'Llanarth',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'libelle' => 'Nerwyn',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'libelle' => 'Rhyd-Y-Felin',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'libelle' => 'Llanfrechfa',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'libelle' => 'de Ti\'arab',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'libelle' => 'de Champignac',
                'affixe_pre' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'libelle' => 'Misty',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'libelle' => 'Cottage',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'libelle' => 'Maesmynach',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'libelle' => 'Abbeyvale',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'libelle' => 'Derwen',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'libelle' => 'Henfynyw',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'libelle' => 'Cwrtycadno',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 56,
                'libelle' => 'Leam',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 57,
                'libelle' => 'Carna',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 58,
                'libelle' => 'Tulira',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 59,
                'libelle' => 'Clifden',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 60,
                'libelle' => 'Errislannon',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 61,
                'libelle' => 'Knockadreen',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 62,
                'libelle' => 'Kilmore',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 63,
                'libelle' => 'Kilfenora',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'libelle' => 'Ballintemple',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'libelle' => 'Cloonisle',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'libelle' => 'Bennekerry',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'libelle' => 'Ballyerk',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'libelle' => 'Ballysheil',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 69,
                'libelle' => 'Killeenfarna',
                'affixe_pre' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 70,
                'libelle' => 'Dannan',
                'affixe_pre' => 1,
                'created_at' => '2021-01-14 20:01:29',
                'updated_at' => '2021-01-14 20:01:29',
            ),
            69 => 
            array (
                'id' => 71,
                'libelle' => 'Landelle',
                'affixe_pre' => 0,
                'created_at' => '2023-01-10 18:19:52',
                'updated_at' => '2023-01-10 18:19:52',
            ),
        ));
        
        
    }
}