<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;

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
