<?php

use Illuminate\Database\Seeder;

class GamedatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gamedatas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date_courante' => '1970-01-01',
                'budget' => 20000
            
            )));
          
    }
}
