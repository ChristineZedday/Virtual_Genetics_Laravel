<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;
use App\Elevage;

class TempsController extends Controller
{
   
    static function dateCourante()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
    }

    static function nextMonth()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
        $game->date_courante = $date;
        $game->save();

        checkFemellesTerme($date);
        checkNouveaux($date);
        checkPuberes();
        reproNPC($date);
        VenteJeunes();

        return redirect()->route('home');
    }

    static function ElevenMonths()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date= date('Y-m-d',strtotime('+11 month',strtotime($date)));
        
       return $date;
    }


    static function ageMonths($date_naissance)
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date = strToTime($date);
        $date_naissance = strToTime($date_naissance);
        $age = $date - $date_naissance;
       
        $age = $age/(24*60*60*30);

        
        return $age;


    }
}

function checkFemellesTerme($date)
{
    
    $statuts = statutsFemelle::where('terme',  $date)->get();
  
    
    if (!empty($statuts))
        {
            foreach ($statuts as $statut)
            {
                
                $statut->conf_pleine = false;
                $statut->pres_pleine = false;
                $statut->vide = true;
                $statut->conf_vide = true;
                $statut->etalon_id = null;    
                $statut->terme = null;
                $statut->save(); 
            }
    } 
}

function checkNouveaux($date)
{
    $animaux = Animal::where('date_naissance',  $date)->get();

    foreach ($animaux as $animal)
    {
        $animal->foetus = false;
        $animal->elevage_id = $animal->Dam->elevage_id;
        $animal->save();
            
    }
}

function checkPuberes()
{
    $animaux = Animal::where('sexe', 'jeune mâle')->get();
    foreach ($animaux as $animal)
    {
        if (TempsController::ageMonths($animal->date_naissance) >= 24)
       { $animal->sexe = 'mâle';
        $animal->save();}
            
    }

    $animaux = Animal::where('sexe', 'jeune femelle')->get();
    foreach ($animaux as $animal)
    {
        if (TempsController::ageMonths($animal->date_naissance) >= 24)
        { $animal->sexe = 'femelle';
         $animal->save();}
            
    }
}

function reproNPC($date)
{
    $saison = true; //ici vérifier mois
        if ($saison) {
            $vendeurs = Elevage::where('role','Vendeur')->get();
            foreach($vendeurs as $vendeur)
            {
                $juments = Animal::where('elevage_id', $vendeur->id)->where('sexe','femelle')->get();
                foreach ($juments as $jument)
                {
                    $statut = Animal::Find($jument->id)->Statut;
                    if ((isset($statut) && $statut->vide) || (!isset($statut)))
                    {
                        if(rand(1,2)==1)
                        {
                            $etalons = Animal::where('elevage_id',$vendeur->id)->where('sexe','mâle')->get();
                            $nb = sizeof($etalons);
                            if ($nb > 0) {
                                $choisi = rand(1,$nb) -1;
                                $etalon = $etalons[$choisi]->id;
                                ReproductionController::croisement($vendeur->id, $etalon, $jument->id);
                            }                    
                          
                        }
                    }
                }
            
            }    
        }
}

function VenteJeunes ()
{
    $animaux = Animal::where('sexe', 'jeune mâle')->orWhere('sexe', 'jeune femelle')->get();
    foreach ($animaux as $animal)
    {
        if (TempsController::ageMonths($animal->date_naissance) >= 7)
       { 
        $animal->a_vendre = true;
        $animal->prix = 500; //en attendant table de prix/race/sexe
        $animal->save();}
            
    }
}