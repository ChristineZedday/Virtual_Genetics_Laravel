<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;

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

        return redirect()->route('home');
    }

    static function ElevenMonths()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date= date('Y-m-d',strtotime('+11 month',strtotime($date)));
        
       return $date;
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