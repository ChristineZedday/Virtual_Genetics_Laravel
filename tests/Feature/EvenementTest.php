<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categorie;
use App\Animal;
use App\Evenement;
use App\Resultat;

class EvenementTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInscription() 
    {
        $animal = factory(Animal::class)->create();
        $animal->sexe = "femelle";
        $animal->save();

        $evenement = factory(Evenement::class)->create();
        $categorie = factory(Categorie::class)->create();

       $resultat = new Resultat;
        $resultat->fill(['animal_id'=>$animal->id, 'categorie_id' =>$categorie->id]);
        $resultat->evenement_id = $evenement->id;
        $this->assertTrue($resultat->categorie->verification($resultat->animal, $resultat->evenement));
    }
}
