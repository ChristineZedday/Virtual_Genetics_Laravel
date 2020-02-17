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
                'abbr' => 'A+',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 1,
                'nom' => 'noir',
                'abbr' => 'a',
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
                'abbr' => 'E+',
                'is_default' => 0,
                'is_dominant' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_id' => 2,
                'nom' => 'alezan testable',
                'abbr' => 'e',
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
                'abbr' => 'ea',
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
                'abbr' => 'Sb',
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
                'abbr' => 'n',
                'is_default' => 1,
                'is_dominant' => 0,
            ),
           
        ));
        
        
    }
}