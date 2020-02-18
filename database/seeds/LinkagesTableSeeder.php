<?php

use Illuminate\Database\Seeder;

class LinkagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('linkages')->delete();
        
        \DB::table('linkages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'locus_1_id' => 2,
                'locus_2_id' => 3,
                'taux' => 0.07,
            ),
        ));
        
        
    }
}