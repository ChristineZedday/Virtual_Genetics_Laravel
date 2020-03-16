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
                'abbrev' => 'A+',
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
                'abbrev' => 'E+',
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
        ));
        
        
    }
}