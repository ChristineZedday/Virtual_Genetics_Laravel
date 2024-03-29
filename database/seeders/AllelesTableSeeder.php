<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllelesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alleles')->delete();
        
        \DB::table('alleles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 1,
                'nom' => 'Agouti',
                'abbrev' => 'A',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 1,
                'nom' => 'noir',
                'abbrev' => 'a',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 2,
                'nom' => 'Extension',
                'abbrev' => 'E',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 2,
                'nom' => 'alezan testable',
                'abbrev' => 'e',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 2,
                'nom' => 'alezan non testable',
                'abbrev' => 'ea',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 3,
                'nom' => 'Sabino',
                'abbrev' => 'Sb',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 3,
                'nom' => 'kit normal',
                'abbrev' => 'n',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 26,
                'nom' => 'Tobiano',
                'abbrev' => 'TO',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 13,
                'nom' => 'Silver',
                'abbrev' => 'Z',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 13,
                'nom' => 'non silver',
                'abbrev' => 'z',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 15,
                'nom' => 'Champagne',
                'abbrev' => 'CH',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 15,
                'nom' => 'non champagne',
                'abbrev' => 'ch',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 10,
                'nom' => 'Frame ovéro',
                'abbrev' => 'OLWS',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 10,
                'nom' => 'non frame',
                'abbrev' => 'o',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 11,
                'nom' => 'Splashed white',
                'abbrev' => 'SW1',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 11,
                'nom' => 'non splsh',
                'abbrev' => 'sw',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 27,
                'nom' => 'Rouan',
                'abbrev' => 'RN',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 3,
                'nom' => 'Blanc dominant 1',
                'abbrev' => 'W1',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 3,
                'nom' => 'Blanc 20',
                'abbrev' => 'W20',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 17,
                'nom' => 'Pattern 1',
                'abbrev' => 'PATN1',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 17,
                'nom' => 'non pattern1',
                'abbrev' => 'patn',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 4,
                'nom' => 'Crème',
                'abbrev' => 'CR',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 4,
                'nom' => 'non crème',
                'abbrev' => 'C',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 4,
                'nom' => 'pearl',
                'abbrev' => 'prl',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 16,
                'nom' => 'Léopard',
                'abbrev' => 'LP',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 16,
                'nom' => 'non léopard',
                'abbrev' => 'lp',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 9,
                'nom' => 'Dun',
                'abbrev' => 'D',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 9,
                'nom' => 'non-dun 1',
                'abbrev' => 'nd1',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 9,
                'nom' => 'non-dun 2',
                'abbrev' => 'nd2',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 14,
                'nom' => 'Gris',
                'abbrev' => 'G',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 14,
                'nom' => 'non gris',
                'abbrev' => 'g',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 18,
                'nom' => 'Mushroom',
                'abbrev' => 'mu',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 18,
                'nom' => 'non mushroom',
                'abbrev' => 'MU',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 19,
                'nom' => 'Nanisme chondrodysplasia',
                'abbrev' => 'd2',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 19,
                'nom' => 'non nain',
                'abbrev' => 'N',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 22,
                'nom' => 'atavisme squelettal',
                'abbrev' => 'sa',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 22,
                'nom' => 'non atavisme sq',
                'abbrev' => 'SA',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 21,
                'nom' => 'HGMA2 grand',
                'abbrev' => 'HGB',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 21,
                'nom' => 'HGMA2 petit',
                'abbrev' => 'HGS',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 23,
                'nom' => 'Amplification blanc fort',
                'abbrev' => 'AB2',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 23,
                'nom' => 'Amplification blanc faible',
                'abbrev' => 'AB1',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 23,
                'nom' => 'non amplification blanc',
                'abbrev' => 'AB0',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 24,
                'nom' => 'Flaxen',
                'abbrev' => 'f',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 24,
                'nom' => 'non flaxen',
                'abbrev' => 'F',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 25,
                'nom' => 'Pangaré',
                'abbrev' => 'P',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 25,
                'nom' => 'non pangaré',
                'abbrev' => 'p',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 26,
                'nom' => 'non tobiano',
                'abbrev' => 'to',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 27,
                'nom' => 'non rouan',
                'abbrev' => 'rn',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 19,
                'nom' => 'Nanisme létal',
                'abbrev' => 'd1',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 19,
                'nom' => 'Nanisme',
                'abbrev' => 'd3',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 19,
                'nom' => 'Nanisme',
                'abbrev' => 'd4',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 4,
                'nom' => 'sunshine',
                'abbrev' => 'sun',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 4,
                'nom' => 'snowdrop',
                'abbrev' => 'sdro',
                'is_default' => 0,
                'is_dominant' => 0,
            ),
        ));
        
        
    }
}