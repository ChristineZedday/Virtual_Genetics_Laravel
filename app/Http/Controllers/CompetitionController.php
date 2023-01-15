<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Competition;
use App\Evenement;
use App\Animal;
use App\Categorie;
use App\Resultat;
use App\Gamedata;
use App\Race;

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
        
        $date = Gamedata::date();
        $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
        $evenements = Evenement::with('competitions.races')->where('date', '>=', $date)->get();
    
       return view('competitions',['evenements' =>$evenements, 'elevage' =>$elevage]);
       
    }

    public function inscrire($elevage, $evenement, $competition)
    {
        $elevage = Elevage::Find($elevage);
       $evenement = Evenement::Find($evenement);
        $competition = Competition::Find($competition);
        $categories = $competition->Categories;
      
       
     
        $animaux = Animal::Where('elevage_id', $elevage->id)->where('foetus',0)->get();
   
    
       return view('inscription', ['elevage' => $elevage, 'evenement' => $evenement, 'competition' => $competition,'categories'=> $categories, 'animaux' => $animaux]);
       
    }

    public function inscription(Request $request, $evenement,$competition)
    {
        $validated =  $request->validate([
             
            'animal_id' =>'integer|required',   
            'categorie_id' =>'integer|required',
            
            
            ]);
      
        $resultat = new Resultat;
        $resultat->fill($validated);
        $resultat->evenement_id = $evenement;
        $resultat->competition_id = $competition;
    

        $animal = Animal::Find($resultat->animal_id);
        $elevage= Elevage::Find($animal->elevage_id);
       
        $animaux= $elevage->Animaux()->get();
        $evenement = Evenement::Find($resultat->evenement_id);
        $competition = Competition::Find($competition);
        $categorie = Categorie::Find($resultat->categorie_id);

        
        if ($categorie->verification($animal, $evenement, $competition->id) && $competition->verification($animal->race->id))  { //and $competition->verification($animal->race->id)
            
           
                if ($resultat->save()) {
                 
                $elevage->budget -= $competition->prix_inscription;
                $elevage->save();
                $request->session()->flash('status');
                $request->session()->flash('alert-class',"alert-sucess");
               
                return redirect()->route('competitions',[ $elevage, $evenement->id])->with('status',"votre animal a été inscrit dans sa catégorie");
            }
            
          }
        
        else {
            
            $categories = $competition->Categories;
            $request->session()->flash('status',"Pas la bonne catégorie, ou déjà inscrit quelque part à cette date!");
            $request->session()->flash('alert-class',"alert-danger");
            return view('inscription', ['elevage' => $elevage, 'evenement' => $evenement, 'competition' => $competition, 'categories'=> $categories, 'animaux' => $animaux])->with('status');
            
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
       
        
        $elevage =Elevage::Find($elevage);
        //dd($elevage);
        $resultats = Resultat::resultats($elevage->id);
        //dd($resultats);
        return view('resultats', ['elevage' => $elevage, 'resultats' => $resultats]);
        
        
    }

    public function tousResultats($elevage )
    {
       
        
        $elevage =Elevage::Find($elevage);
        $resultats = Resultat::tousResultats();
        //dd($resultats);
        return view('tous_resultats',['elevage'=>$elevage, 'resultats' =>$resultats]);
        
        
    }

    public function desinscrire($resultat)
    {
        
       $resultat = Resultat::Find($resultat);
       
      
            if ($resultat->delete()) {
       
       
        return redirect()->back()->with('status',"votre animal a été désinscrit");
    }
    else {
        return redirect()->back()->with('status',"Trop tard, la compétition a eu lieu");
    }

       
    }

  

}
