<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Competition;
use App\Evenement;
use App\Animal;
use App\Categorie;
use App\Resultat;

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
    //    dd($evenement->Competition)=OK
        $categories = $evenement->Competition->Categories()->get(); //ok
      
       
     
        $animaux = Animal::Where('elevage_id', $elevage->id)->get();
   
    
       return view('inscription', ['elevage' => $elevage, 'evenement' => $evenement, 'categories'=> $categories, 'animaux' => $animaux]);
       
    }

    public function inscription(Request $request, $evenement)
    {
        $validated =  $request->validate([
             
            'animal_id' =>'integer|required',   
            'categorie_id' =>'integer|required',
            
            ]);
      
        $resultat = new Resultat;
        $resultat->fill($validated);
        $resultat->evenement_id = $evenement;

        $animal = Animal::Find($resultat->animal_id);
        $elevage= Elevage::Find($animal->elevage_id);
       
        $animaux= $elevage->Animaux()->get();
        $evenement = Evenement::Find($evenement);
        
        $categorie = Categorie::Find($resultat->categorie_id);
        if ($categorie->verification($resultat->animal_id, $evenement->date)) {
            if ($resultat->save()) {
                $request->session()->flash('status');
                $request->session()->flash('alert-class',"alert-sucess");
                
               
                return redirect()->route('competitions',[ $elevage, $evenement->id])->with('status',"votre animal a été inscrit dans sa catégorie");
            }
        }
        else {
           
            $request->session()->flash('status',"Pas la bonne catégorie");
            $request->session()->flash('alert-class',"alert-danger");
            return view('inscription', ['elevage' => $elevage, 'evenement' => $evenement, 'categories'=> $evenement->Categories(), 'animaux' => $animaux])->with('status',"Pas la bonne catégorie!");
            
        }
    }

    public function inscrits( $elevage)
    {
       $inscrits = Resultat::inscrits($elevage);
       $elevage =Elevage::Find($elevage);
       return view('inscrits', ['elevage' => $elevage, 'inscrits' => $inscrits]);

        
        
    }

    public function resultats( $elevage)
    {
       
        Resultat::resultats($elevage);
        
        
    }

}
