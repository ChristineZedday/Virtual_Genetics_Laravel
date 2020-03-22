<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;
use App\Genome;

class ReproductionController extends Controller
 /**
 * launch reproduction process
*/
{
   public function croisement($elevage, $etalon, $jument)
   {
    
    $statut = Animal::Find($jument)->Statut;
    
    if (! $statut) 
    {$statut = new StatutsFemelle();}
    
    $statut->animal_id = $jument;
    $statut->pres_pleine = true; 
    $statut->etalon_id = $etalon;
    $date = TempsController::ElevenMonths();
    $statut->terme = $date;
       $success = rand(1,2);
       if ($success == 1)
       {
          $statut->vide = false; 
        
          $animal = new Animal;
          $animal->foetus = true;
          $animal->fondateur = false;
          $animal->date_naissance = $date;
          $animal->sire_id = $etalon;
          $animal->dam_id = $jument;
          $dam = Animal::Find($animal->dam_id);
          if ($dam->fondateur) {
            $animal->affixe = $dam->affixe;
            $animal->affixe_pre = $dam->affixe_pre;
          }
          else {
              if (isset($elevage->affixe))
              {
                $animal->affixe = $elevage->affixe;
                $animal->affixe_pre = $elevage->affixe_pre;
              }
          }
          $animal->elevage_id = $elevage;
          $sexe = rand(1,2);
          $animal->sexe = $sexe==1? 'jeune mâle' : 'jeune femelle';
          $etalon = Animal::Find($etalon);
          $jument = Animal::Find($jument);
                if ($etalon->race == $jument->race)
                {
                    $animal->race = $etalon->race;
                }
                else{
                    $animal->race = 'OC';
                }
         $animal->save();
         Genome::mixGenes($etalon->id, $jument->id, $animal->id);

       
         
       }
       else{
           $statut->vide = true;
       }
    $statut->save();
    return redirect()->route('animaux',[$elevage]);
   }
  
}
