<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Competition;
use App\Evenement;
use App\Animal;
use App\Categorie;

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
        $evenements = Evenement::all();
   
    
       return view('competitions', ['elevage' => $elevage, 'evenements'=>$evenements]);
       
    }

    public function inscrire($elevage, $evenement)
    {
        $elevage = Elevage::Find($elevage);
       $evenement = Evenement::Find($evenement);
        $epreuves = $evenement->Competition->Categories;
        $animaux = Animal::Where('elevage_id', $elevage->id);
   
    
       return view('inscription', ['elevage' => $elevage, 'epreuves'=>$epreuves, 'animaux' =>$animaux]);
       
    }

    public function inscription($elevage, $epreuve, $animal)
    {
       
       
    }

}
