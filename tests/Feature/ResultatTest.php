<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Resultat;
use App\Animal;
use App\Elevage;
use App\Categorie;


class ResultatTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testAnimal()
    // {
    //     $res = factory(Resultat::class)->create();
      
     
    //     $this->assertEquals('mâle', $res->Animal->sexe);
    //     $this->assertEquals('bai', $res->Animal->couleur);
        
    // }
    // public function testInscrits()
    // {
    //     $categorie = factory(Categorie::class)->create();
    //     $ponettes = factory(Animal::class,3)->states('femelle')->create();
    //     foreach ($ponettes as $ponette)
    //     {
            
    //         $res = factory(Resultat::class)->create();
         
    //         $res->Animal = $ponette;
    //     }
    //     dd(Resultat::inscrits(1));
    // }

}
