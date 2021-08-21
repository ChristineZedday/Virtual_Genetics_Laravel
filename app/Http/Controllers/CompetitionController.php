<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Competition;
use App\Animal;

class CompetitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('checkElevage');
    
    }

    public function index($id)
    {
    $elevage = Elevage::Find($id);
       return view('competition', ['elevage'=>$elevage]);
    }

    public function aVenir($elevage)
    {
        $elevage = Elevage::Find($elevage);
        // switch ($filtre) {
           
        //     case 'MA':
        //         $competitions = Competition::All();
        //     break;
        //     default:
        //     $competitions = Competition::All();

        // }
        $competitions = Competition::All();
   
    
       return view('competitions', ['elevage' => $elevage, 'competitions'=>$competitions]);
       
    }

    public function inscrire($elevage, $competition)
    {
        $elevage = Elevage::Find($elevage);
        $competitions = Competition::Find($competition);
        $animaux = Animal::Where('elevage_id', $elevage->id);
   
    
       return view('inscription', ['elevage' => $elevage, 'competition'=>$competition, 'animaux' =>$animaux]);
       
    }

}
