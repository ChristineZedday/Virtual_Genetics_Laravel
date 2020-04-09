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
       
        $this->call(UsersTableSeeder::class);
        $this->call(AffixesTableSeeder::class);
        $this->call(ElevagesTableSeeder::class);
        $this->call(GamedatasTableSeeder::class);
        $this->call(RacesTableSeeder::class);
        $this->call(AnimauxTableSeeder::class);
        $this->call(LociTableSeeder::class);
        $this->call(AllelesTableSeeder::class);
        $this->call(GenotypesTableSeeder::class);
       
        $this->call(PathologiesTableSeeder::class);
        $this->call(PhenotypesTableSeeder::class);
        $this->call(AnimalPathologieTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
