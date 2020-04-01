<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;
use App\Elevage;
use App\Genome;

class ReproductionController extends Controller
 /**
 * launch reproduction process
*/
{
   static function croisement($elevage, $etalon, $jument)
   {
    $statut = Animal::Find($jument)->Statut;
    
    if (! isset($statut))
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
            $animal->Affixe = $dam->Affixe;
          }
          else {
            $elv = Elevage::Find($elevage);
              if (isset($elv->Affixe))
              {
                $animal->affixe_id = $elv->affixe_id;
              }
          }
          $animal->elevage_id = $elevage;
          $sexe = rand(1,2);
          $animal->sexe = $sexe==1? 'jeune mâle' : 'jeune femelle';
          $etalon = Animal::Find($etalon);
          $jument = Animal::Find($jument);
                if ($etalon->race_id == $jument->race_id)
                {
                    $animal->race_id = $etalon->race_id;
                }
                else{
                    $animal->race_id = 1;
                }
        $animal->taille_cm = ($etalon->taille_cm + $jument->taille_cm) /2 ;
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
