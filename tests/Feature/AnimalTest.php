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
        $gamedata->date_debut = strtotime("1 may 1970");
        $gamedata->date_courante = strtotime("10 may 1970");
        $gamedata->budget = 20000;
        $gamedata->save();
     }

    public function testTailleAdulte()
    {
        AnimalTest::createGameData();
        $animal = New Animal;
        $animal->taille_cm = 140;
        $animal->date_naissance = strtotime("10 may 1965");
        dd($animal->ageMonths());
        

        $this->assertEquals(140, $animal->taille());

    }
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
