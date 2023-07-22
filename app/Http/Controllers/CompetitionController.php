<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Competition;
use App\Evenement;
use App\Animal;
use App\Categorie;
use App\Resultat;
use App\Dressage;
use App\Gamedata;
use App\Race;
use App\Reprise;


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

    public function aVenir($elevage, $type)
    {
        $elevage = Elevage::Find($elevage);
        $date = Gamedata::date();
        $date= date('Y-m-d',strtotime('+1 month',strtotime($date))); 
        if ($type == 'toutes') {
            $evenements = Evenement::with('competitions.races')->where('date', '>=', $date)->orderBy('date')->get();
        }
        else {
            $evenements = Evenement::where('date', '>=', $date)->whereHas('competitions', function ($query) use($type) { $query->Where('type',$type);})->orderBy('date')->get(); 
        }
       
       return view('competitions',['evenements' =>$evenements, 'elevage' =>$elevage]);
       
    }

    public function inscrire($elevage, $evenement, $competition)
    {
        $elevage = Elevage::Find($elevage);
       $evenement = Evenement::Find($evenement);
        $competition = Competition::Find($competition);
      //  $categories = $competition->Categories;
     
        $animaux = Animal::Where('elevage_id', $elevage->id)->where('foetus',0)->get();

       return view('inscription', ['elevage' => $elevage, 'evenement' => $evenement, 'competition' => $competition, 'animaux' => $animaux]);
       
    }

    public function inscription(Request $request, $evenement,$competition)
    {
        $validated =  $request->validate([
             
            'animal_id' =>'integer|required',   
            'categorie_id' =>'integer|required',
            'reprise_id' =>'integer',
            
            
            ]);
       $competition = Competition::Find($competition);   
    
     
        $resultat = new Resultat;
     
        $resultat->fill($validated);
        
        
        $resultat->evenement_id = $evenement;
        $resultat->competition_id = $competition->id;
       

        $animal = Animal::Find($resultat->animal_id);
        $elevage= Elevage::Find($animal->elevage_id);
        $reprise = Reprise::Find($resultat->reprise_id);
        $animaux= $elevage->Animaux()->get();
        $evenement = Evenement::Find($resultat->evenement_id);
        
       $categorie = Categorie::Find($resultat->categorie_id);


        
        if ($categorie->verification($animal, $evenement, $competition->id) ) { 
            if ($reprise == NULL || $reprise->niveau_num_global == $animal->Performance->niveau_dressage ) {
           
                if ($resultat->save()) {
                 
                $elevage->budget -= $competition->prix_inscription;
                $elevage->save();
                $request->session()->flash('status');
                $request->session()->flash('alert-class',"alert-sucess");
               
                return redirect()->route('competitions',[ $elevage, $competition->type] )->with('status',"votre animal a été inscrit dans sa catégorie");
            }
            
          }
        }
        
        else {
            
            $categories = $competition->Categories;
            $request->session()->flash('status',"Pas la bonne catégorie, ou déjà inscrit quelque part à cette date!");
            $request->session()->flash('alert-class',"alert-danger");
            return view('inscription', ['elevage' => $elevage, 'evenement' => $evenement, 'competition' => $competition, 'animaux' => $animaux])->with('status');
            
        }
    }

    public function inscrits( $elevage)
    {
       $inscrits = Resultat::inscrits($elevage);
      
       $elevage =Elevage::Find($elevage);
       
     
       return view('inscrits', ['elevage' => $elevage, 'inscrits' => $inscrits]);

        
        
    }

    public function resultats( $elevage, $type)
    {
       
        
        $elevage =Elevage::Find($elevage);
        
        $resultats  = Resultat::resultats($elevage->id, $type);


        //dd($resultats);
        return view('resultats', ['elevage' => $elevage, 'resultats' => $resultats]);
        
        
    }

    public function tousResultats($elevage ,$type)
    {
       
        
        $elevage =Elevage::Find($elevage);
        $resultats = Resultat::tousResultats($type);
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
