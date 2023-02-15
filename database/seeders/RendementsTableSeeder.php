<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RendementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rendements')->delete();
        
        \DB::table('rendements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mois' => '1',
                'ha_par_UGB' => 4.0,
                'foin_tMS_ha' => 0.0,
            ),
            1 => 
            array (
                'id' => 2,
                'mois' => '2',
                'ha_par_UGB' => 3.0,
                'foin_tMS_ha' => 0.0,
            ),
            2 => 
            array (
                'id' => 3,
                'mois' => '3',
                'ha_par_UGB' => 0.45,
                'foin_tMS_ha' => 0.0,
            ),
            3 => 
            array (
                'id' => 4,
                'mois' => '4',
                'ha_par_UGB' => 0.3,
                'foin_tMS_ha' => 0.0,
            ),
            4 => 
            array (
                'id' => 5,
                'mois' => '5',
                'ha_par_UGB' => 0.25,
                'foin_tMS_ha' => 3.0,
            ),
            5 => 
            array (
                'id' => 6,
                'mois' => '6',
                'ha_par_UGB' => 0.35,
                'foin_tMS_ha' => 1.5,
            ),
            6 => 
            array (
                'id' => 7,
                'mois' => '7',
                'ha_par_UGB' => 0.45,
                'foin_tMS_ha' => 1.0,
            ),
            7 => 
            array (
                'id' => 8,
                'mois' => '8',
                'ha_par_UGB' => 0.6,
                'foin_tMS_ha' => 0.5,
            ),
            8 => 
            array (
                'id' => 9,
                'mois' => '9',
                'ha_par_UGB' => 0.6,
                'foin_tMS_ha' => 1.0,
            ),
            9 => 
            array (
                'id' => 10,
                'mois' => '10',
                'ha_par_UGB' => 0.5,
                'foin_tMS_ha' => 1.5,
            ),
            10 => 
            array (
                'id' => 11,
                'mois' => '11',
                'ha_par_UGB' => 0.8,
                'foin_tMS_ha' => 0.0,
            ),
            11 => 
            array (
                'id' => 12,
                'mois' => '12',
                'ha_par_UGB' => 3.0,
                'foin_tMS_ha' => 0.0,
            ),
        ));
        
        
    }
}