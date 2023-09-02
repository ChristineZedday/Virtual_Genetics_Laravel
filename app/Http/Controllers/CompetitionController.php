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
use Session;


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

    public function inscrireDressage($elevage, $evenement, $competition, $reprise)
    {
        $elevage = Elevage::Find($elevage);
       $evenement = Evenement::Find($evenement);
        $competition = Competition::Find($competition);
        $reprise = Reprise::Find($reprise);
      //  $categories = $competition->Categories;
     
        $animaux = Animal::Where('elevage_id', $elevage->id)->where('foetus',0)->get();

       return view('inscriptionDressage', ['elevage' => $elevage, 'evenement' => $evenement, 'competition' => $competition, 'reprise' => $reprise, 'animaux' => $animaux]);
       
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

        $message = $categorie->verification($animal, $evenement, $competition->id);
        if ($message == 'OK')  { 
           $message = $competition->verification($animal, $evenement->id, $reprise);
            if ($message== "OK")  {
          
                if ($resultat->save()) {
                 
                $elevage->Budget()->fraisEngagement($competition->prix_inscription);
                $request->session()->flash('message');
                $request->session()->flash('alert-class',"alert-sucess");
                if ($reprise == NULL) {
                return redirect()->route('inscrire', [$elevage->id,$evenement->id,$competition->id])->withInput()->with('message',"votre animal a été inscrit dans sa catégorie");
                }
                else {
                    return redirect()->route('inscrire_dressage', [$elevage->id,$evenement->id,$competition->id, $reprise->id])->withInput()->with('message',"votre animal a été inscrit dans sa catégorie");   
                }
                }
            }
            else {
                if ($reprise == NULL) {
                return redirect()->route('inscrire', [$elevage->id,$evenement->id,$competition->id])->withInput()->withErrors([$message]);
                }
                else {
                    return redirect()->route('inscrire_dressage', [$elevage->id,$evenement->id,$competition->id,$reprise->id])->withInput()->withErrors([$message]);     
                }
            }
        }

        else {
            if ($reprise != NULL) {  
                return redirect()->route('inscrire_dressage', [$elevage->id,$evenement->id,$competition->id,$reprise->id])->withInput()->withErrors([$message]);
            }
            else {
                return redirect()->route('inscrire', [$elevage->id,$evenement->id,$competition->id])->withInput()->withErrors([$message]);  
            }
            }
            }
            


    public function inscrits( $elevage, $type)
    {
        if ($type == 'tous') {
            $inscrits = Resultat::inscrits($elevage);
        }
        else {
            $inscrits = Resultat::inscrits($elevage, $type);
        }
       
      
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

  public function reprises($elevage) {
    $reprises = Reprise::liste();
    $elevage = Elevage::find($elevage);
    
    return view('ReprisesDressage',['elevage'=>$elevage, 'reprises' =>$reprises]);
  }

}
