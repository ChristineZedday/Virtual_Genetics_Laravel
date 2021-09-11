<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Resultat;
use App\Animal;
use App\Elevage;
use Database\Factories\ElevageFactory;

class ResultatTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAnimal()
    {
        $res = New Resultat();
       
       

        $animal = factory(Animal::class)->create();
       $res->animal_id = $animal->id;
      
        $this->assertEquals('mâle', $res->Animal()->sexe);
        $this->assertEquals('bai', $res->Animal()->couleur);
        
    }
}
