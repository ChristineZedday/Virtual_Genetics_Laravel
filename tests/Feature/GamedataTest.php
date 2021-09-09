<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Gamedata;

class GamedataTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckLettre()
    {
        {
            $date = "1984-07-01";
            $this->assertEquals('S', GameData::checkLettre($date));
         }
    }

    public function testSaisonFertile()
    {
        $date = GamedataTest::CreateGamedata();
        $this->assertEquals(true, GameData::saison());
    }

    public function testSaisonNonFertile()
    {
        $date = GamedataTest::CreateGamedata('1975-01-01');
        $this->assertEquals(false, GameData::saison());
    }

    public function testElevenMonths() 
    {
        $date = GamedataTest::CreateGamedata('1975-04-01');
        $this->assertEquals('1976-03-01', Gamedata::ElevenMonths($date));
    }

    public function testHowManyMonthsSameYear() 
    {
        GamedataTest::CreateGamedata('1975-04-01');
        $futur = '1975-08-08';
        $this->assertEquals(4, Gamedata::HowManyMonths($futur));
    }

    public function testHowManyMonthsOtherYear() 
    {
        GamedataTest::CreateGamedata('1975-04-01');
        $futur = '1976-07-29';
        $this->assertEquals(15, Gamedata::HowManyMonths($futur));
    }

    static function createGameData($date = '1970-05-10') 
    {
       $gamedata = New GameData;
       $gamedata->date_debut = "1970-02-01";
       $gamedata->date_courante = $date;
       $gamedata->budget = 20000;
       $gamedata->save();
    }
}
