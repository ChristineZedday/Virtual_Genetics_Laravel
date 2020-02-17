<?php

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
                'date_courante' => '1970-03-01',
            ),
        ));
        
        
    }
}