<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categorie;
use App\Animal;
use App\Evenement;
use App\Competition;
use App\Resultat;
use App\Race;
/*use Database\Seeders\UsersTableSedder;
use Database\Seeders\ElevagesTableSedder;
use Database\Seeders\AffixesTableSedder;
use Database\Seeders\AnimauxTableSedder;*/

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

        $race = factory(Race::class)->create();

        $evenement = factory(Evenement::class)->create();
        $competition = factory(Competition::class)->create()->each(function ($comp) use ($race) {$comp->Races()->sync($race->id);});
      //  $competition->Races()->saveMany(factory(Race::class, 1)->make());
        $categorie = factory(Categorie::class)->create();

       $resultat = new Resultat;
        $resultat->fill(['animal_id'=>$animal->id, 'categorie_id' =>$categorie->id, 'competition_id' =>$competition->id]);
        $resultat->evenement_id = $evenement->id;
        $this->assertTrue($resultat->categorie->verification($resultat->animal, $resultat->evenement, $resultat->competition));

        $evenement->date ="1966-01-05";
        $evenement->save();

       $this->assertFalse($resultat->categorie->verification($resultat->animal, $evenement));

        $animal->date_naissance = "1963-06-15";
        $animal->save();
        $this->assertTrue($resultat->categorie->verification($animal, $evenement));



    }
 /*  public function testInscriptionSeed() 
    {
        $this->seed('UsersTableSeederTest');
        $this->seed('AffixesTableSeederTest');
        $this->seed('ElevagesTableSeederTest');
        $this->seed('RacesTableSeederTest');
        $this->seed('AnimauxTableSeederTest');
        $animal = Animal::Find(2); //Migonne of Marshwood Shetland 2 ans
        $categorie = factory(Categorie::class)->create(); //ponettes
        $evenement = factory(Evenement::class)->create();//
        $competition = factory(Competition::class)->create();
        $race = factory(Race::class)->create();
        $competition->races()->attach($race->id, ['prix_inscription' > 5,'prix_premier'=> 50]);
        $competition->evenements()->attach($evenement_id);
       
        $resultat = new Resultat;
        $resultat->fill(['animal_id'=>$animal->id, 'categorie_id' =>$categorie->id]);
        $resultat->evenement_id = $evenement->id;
        $this->assertFalse($resultat->categorie->verification($resultat->animal, $evenement));//elle a pas 3 ans en 70
        $evenement->date = "1971-03-15"; //administrativement elle les aura
        $evenement->save();
        $this->assertTrue($resultat->categorie->verification($resultat->animal, $evenement));
        $elevage = $animal->elevage;
        $budget = $elevage->budget;
        if ($resultat->save()) {
            $elevage->budget -= $categorie->prix_inscription;
            $elevage->save(); }
        $this->assertTrue($elevage->budget == $budget - $categorie->prix_inscription);
       $inscrits = Resultat::inscrits($elevage->id);
      
    $this->assertTrue($inscrits->first()->animal_id==2);
        
    }*/
    
}
