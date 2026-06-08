<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categorie;
use App\Competition;
use App\Animal;
use App\Evenement;
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
        $animal = factory(Animal::class)->create();
        $animal->sexe = "femelle";
        $animal->save();
      
   
        $categorie = factory(Categorie::class)->create();
        $race = factory(Race::class)->create();
        
        $event = factory(Evenement::class)->create();
        $comp = factory(Competition::class)->create();
        $comp->Races()->attach($race->id);

        $this->assertTrue($categorie->verification($animal, $event,$comp));

        $categorie->sexe =1;
        
        $this->assertFalse($categorie->verification($animal, $event,$comp));

        $categorie->sexe =2;
        $categorie->age_min = 3;
        $categorie->age_max = 3;
        $this->assertFalse($categorie->verification($animal, $event,$comp));

        $categorie->age_min = 2;
        $categorie->age_max = 2;
        
        $this->assertFalse($categorie->verification($animal, $event,$comp));
    }

   
}
