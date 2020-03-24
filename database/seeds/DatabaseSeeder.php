<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GamedatasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ElevagesTableSeeder::class);
        $this->call(AnimauxTableSeeder::class);
        $this->call(LociTableSeeder::class);
        $this->call(AllelesTableSeeder::class);
        $this->call(GenotypesTableSeeder::class);
       
        $this->call(StatutsfemellesTableSeeder::class);
    }
}
