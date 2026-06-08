<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GamedatasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gamedatas')->delete();
        
        \DB::table('gamedatas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-02-16 18:25:51',
                'budget' => 20000,
                'date_courante' => '1999-12-01',
                'date_debut' => '1999-12-01',
                'lettre' => 'L',
                'terres' => 0,
            ),
        ));
        
        
    }
}