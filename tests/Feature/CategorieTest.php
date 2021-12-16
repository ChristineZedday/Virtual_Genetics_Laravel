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
        $animal->date_naissance ="1968-06-04";
        $animal->sexe ="femelle";
        $animal->save();
      

        $categorie = New Categorie();
        $categorie->type ="Modèle et Allures Race";
        $categorie->sexe ="femelle";
        $categorie->age_min = 2;
        $categorie->age_max = 2;
        

        $event = factory(Evenement::class)->create();;

        $this->assertTrue($categorie->verification($animal, $event));

        $categorie->sexe ="mâle";
        
        $this->assertFalse($categorie->verification($animal->id, $event));

        $categorie->sexe ="femelle";
        $categorie->age_min = 3;
        $categorie->age_max = 3;
        $this->assertFalse($categorie->verification($animal->id, $event));

        $categorie->age_min = 2;
        $categorie->age_max = 2;
        
        $this->assertFalse($categorie->verification($animal->id, $event));
    }
}
