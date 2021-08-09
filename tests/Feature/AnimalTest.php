<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Animal;
use App\Gamedata;

class AnimalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTailleAdulte()
    {
        $animal = New Animal;
        $animal->taille_cm = 140;
        $animal->date_naissance = strtotime("10 may 1965");
        

        $this->assertEquals(140, $animal->taille());

    }
    public function testTailleNewborn()
    {
        $animal = New Animal;
        $animal->taille_cm = 140;
        $animal->date_naissance = Gamedata::date();
       

        $this->assertEquals(98, $animal->taille());

    }
}
