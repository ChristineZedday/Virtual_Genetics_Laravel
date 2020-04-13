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
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'noir',
                'image_id' => 3,
                'base_couleur' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'alezan',
                'image_id' => 4,
                'base_couleur' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'noirbai',
                'image_id' => 2,
                'base_couleur' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'alezanbai',
                'image_id' => NULL,
                'base_couleur' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'alezannoir',
                'image_id' => 3,
                'base_couleur' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'creme',
                'image_id' => NULL,
                'base_couleur' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'doublecreme',
                'image_id' => NULL,
                'base_couleur' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'isabelle',
                'image_id' => 5,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nom' => 'palomino',
                'image_id' => 7,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nom' => 'cremello',
                'image_id' => 8,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nom' => 'perlino',
                'image_id' => 6,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nom' => 'smoky cream',
                'image_id' => 9,
                'base_couleur' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nom' => 'abricot',
                'image_id' => 10,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nom' => 'isabelle perle',
                'image_id' => 11,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nom' => 'doublepearl',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nom' => 'tobiano',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nom' => 'sabino1',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nom' => 'W20',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nom' => 'Blanc',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nom' => 'tobianosabino',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'nom' => 'tobianoW20',
                'image_id' => NULL,
                'base_couleur' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}