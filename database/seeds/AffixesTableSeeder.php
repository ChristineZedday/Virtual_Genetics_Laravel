<?php

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
        ));
        
        
    }
}