<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categorie;
use App\Animal;
use App\Race;

class CategorieTest extends TestCase
{
   use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testVerification()
    {
        $animal = New Animal();
        $animal->date_naissance ="04-06-1970";
        $animal->sexe ="jeune pouliche";
        $animal->race = factory(Race::class)->create();

        $categorie = New Categorie();
        $categorie->sexe ="femelle";
        $categorie->age_min = 2;
        $categorie->age_max = 2;
        $categorie->race = $animal->race;

        $this->assertTrue($categorie->verification($animal, '03-03-1972'));
    }
}
