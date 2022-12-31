<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categorie;
use App\Animal;
use App\Evenement;

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
        
        
        $event = factory(Evenement::class)->create();

        $this->assertTrue($categorie->verification($animal, $event));

        $categorie->sexe =1;
        
        $this->assertFalse($categorie->verification($animal, $event));

        $categorie->sexe =2;
        $categorie->age_min = 3;
        $categorie->age_max = 3;
        $this->assertFalse($categorie->verification($animal, $event));

        $categorie->age_min = 2;
        $categorie->age_max = 2;
        
        $this->assertFalse($categorie->verification($animal, $event));
    }

   
}
