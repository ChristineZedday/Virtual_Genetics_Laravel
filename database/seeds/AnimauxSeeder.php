<?php

use Illuminate\Database\Seeder;

class AnimauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animaux')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date_achat' => '1970-01-01',
                'nom' => "Prem's",
                'race' =>"Shetland",
                'elevage'=>1

            
            )));
    }
}
