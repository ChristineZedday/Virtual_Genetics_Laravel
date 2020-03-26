<?php

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
                'nom' => 'normal',
                'abbrev' => 'n',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 3,
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
                'nom' => 'normal',
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
                'nom' => 'normal',
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
                'nom' => 'normal',
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
                'nom' => 'normal',
                'abbrev' => 'sw',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 3,
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
                'nom' => 'Blanc dominant 20',
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
                'nom' => 'normal',
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
                'nom' => 'normal',
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
                'nom' => 'normal',
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
                'nom' => 'normal',
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
                'nom' => 'normal',
                'abbrev' => 'MU',
                'is_default' => 1,
                'is_dominant' => 1,
            ),
        ));
        
        
    }
}