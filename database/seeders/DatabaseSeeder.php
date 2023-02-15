<?php
namespace Database\Seeders;

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
        $this->call(ImagesTableSeeder::class);
        $this->call(AnimauxTableSeeder::class);
        $this->call(LociTableSeeder::class);
        $this->call(AllelesTableSeeder::class);
        $this->call(GenotypesTableSeeder::class);
        $this->call(CouleursTableSeeder::class);
        $this->call(PathologiesTableSeeder::class);
        $this->call(PhenotypesTableSeeder::class);
        $this->call(NiveauxTableSeeder::class);
        $this->call(CompetitionsTableSeeder::class);

        $this->call(AssoCouleursTableSeeder::class);
        $this->call(AssoRaceTableSeeder::class);
        $this->call(CouleurImageTableSeeder::class);

        $this->call(CategoriesTableSeeder::class);
        $this->call(EvenementsTableSeeder::class);
        $this->call(CategorieCompetitionTableSeeder::class);
        $this->call(CompetitionRaceTableSeeder::class);
        $this->call(CompetitionEvenementTableSeeder::class);
        $this->call(RendementsTableSeeder::class);
    }
}
