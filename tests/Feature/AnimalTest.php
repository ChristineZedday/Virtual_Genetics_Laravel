<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Animal;
use App\Gamedata;
use App\Affixe;

class AnimalTest extends TestCase
{
    use RefreshDatabase;
    

    /**
     * A basic feature test example.
     *
     * @return void
     */

     static function createGameData() 
     {
        $gamedata = New GameData;
        $gamedata->date_debut = "1970-02-01";
        $gamedata->date_courante = "1970-05-10";
        $gamedata->budget = 20000;
        $gamedata->save();
     }

     public function testAgeMonthsAdulte () 
     {
        AnimalTest::createGameData();
        $animal = New Animal;
        $animal->date_naissance = "1966-05-10";
        

        $this->assertEquals(48, $animal->ageMonths());
     }

    // public function testTailleAdulte()
    // {
    //     AnimalTest::createGameData();
    //     $animal = New Animal;
    //     $animal->date_naissance = strtotime("10 may 1965");
        

    //     $this->assertEquals(140, $animal->taille());

    // }
    public function testTailleNewborn()
    {
        AnimalTest::createGameData();
        $animal = New Animal;
        $animal->taille_cm = 140;
        $animal->date_naissance = strtotime("10 may 1970");
        

        $this->assertEquals(98, $animal->taille());

    }

    public function testNomComplet()
    {
        $affixe = new Affixe;
        $affixe->libelle ="de Chez Moi";
        $affixe->affixe_pre = false;
        $affixe->save();
        $animal = new Animal;
        $animal->nom = "Toto";
        $animal->affixe_id = 1;
        $this->assertEquals("Toto de Chez Moi", $animal->NomComplet());
    }
}
