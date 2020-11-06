<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Animal;
use App\Gamedata;
use App\Http\Controllers\TempsController;
use App\statutsFemelle;
use App\AssoRace;
use App\Race;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display one choosen animal of current stud.
     *
     * @param  int  $elevage: elevage_id, $animal: animal_id
     * @return \Illuminate\Http\Response
     */
    public function show($elevage, $animal)
    {
        $elevage = Elevage::Find($elevage);
        $animal = Animal::Find($animal);
        return view('animal',['elevage'=>$elevage,'animal'=>$animal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Putting animal for sale: display form.
     *
     * @param  int  $elevage->id, $animal->id
     * @return \Illuminate\Http\Response
     */
    public function vendre($elevage, $animal)
    {
        $elevage = Elevage::Find($elevage);
        $animal = Animal::Find($animal);

        if ($animal->elevage_id == $elevage->id) //on ne vend que ce qui nous appartient!
        {
            return view('vendreAnimal',['elevage'=>$elevage,'animal'=>$animal]);
        }
    }

     /**
     * Putting animal for sale: database saving.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function vente(Request $request)
    {
        $validated =  $request->validate([ 'prix'=>'integer|required']); 
       
        $id = $request->input('id');
        
        $animal = Animal::Find($id);
        $animal->prix = $validated['prix'];
        $animal->a_vendre = true;

        if ($animal->save())
        {
            $request->session()->flash('status',"animal mis en vente");
            $request->session()->flash('alert-class',"alert-success");
            return redirect()->route('animaux',[$animal->elevage_id, 'vente']);
        }
    }

     /**
     * remove from sale.
     *
     * @param  int  $elevage->id, $animal->id
     * @return \Illuminate\Http\Response
     */
    public function pasVendre($animal)
    {
        $animal = Animal::Find($animal);
      
       $animal->a_vendre = false;
       if ($animal->save())
       {
        
           return redirect()->route('animaux',[$animal->elevage_id,'tous']);
       }
    }

     /**
     * Buy animal.
     *
     * @param  int  $elevage->id, $animal->id
     * @return \Illuminate\Http\Response
     */
    public function acheter($elevage, $animal)
    {
        $animal = Animal::Find($animal);
        $elevage = Elevage::Find($elevage);
       
        $date =  Gamedata::date();
       
        $vendeur = $animal->elevage_id;
        $vendeur = Elevage::Find($vendeur);

        if ($elevage->budget >= $animal->prix)
            {
            $vendeur->budget = $vendeur->budget + $animal->prix;
            $vendeur->save();
            $elevage->budget = $elevage->budget - $animal->prix;
            $elevage->save();
            $animal->a_vendre = false;
            $animal->date_achat = $date;
            $animal->elevage_id = $elevage->id;
            $statut = statutsFemelle::where('animal_id', $animal->id)->first();
            if (isset($statut) )
            {
               if ($statut->vide == false)
                {
                    $produit = Animal::where('foetus', true)->where('dam_id',$animal->id)->first(); //à changer quand on aura introduit la gemellité possible version 2
                    $produit->elevage_id = $elevage->id;
                    $produit->affixe_id = $elevage->Affixe->id;
                    $produit->save();
                }
               if ($statut->suitee)
               {
                $produit = Animal::where('dam_id',$animal->id)->where( function ($query) {$query->where('sexe', 'jeune poulain')->orWhere('sexe', 'jeune pouliche');})->first(); 
                $produit->elevage_id = $elevage->id; 
                $produit->save();
               }
            }
            
            if ($animal->save())
            {
                return redirect()->back();
            }
        }
        else {
            return redirect()->back()->with('alert', $elevage->budget);
        }

        
    }

      /**
     * Confirm male choice for the selected mare.
     *
     * @param  int  $elevage->id, $etalon->id, jument_id
     * @return \Illuminate\Http\Response
     */
    public function confirmeEtalon($elevage, $etalon, $jument)
    {
        $etalon = Animal::Find($etalon);
        $elevage = Elevage::Find($elevage);
        $jument = Animal::Find($jument);
       
        return view('reproducteurs', ['elevage'=>$elevage, 'etalon'=>$etalon, 'jument'=>$jument]);
    }

    public function steriliser($elevage, $animal)
    {
        $animal = Animal::Find($animal);
        $elevage = Elevage::Find($elevage);
        $prixF = 300;
        $prixM = 100;
        switch ($animal->sexe)
            {
                case 'mâle':
                    $animal->sexe = 'mâle stérilisé';
                    $animal->save();
                    $animal->StatutMale->delete();
                    $elevage->budget -= $prixM;
                    $elevage->save();
                break;

                case 'vieux mâle':
                    $animal->sexe = 'vieux mâle stérilisé';
                    $animal->save();
                    $animal->StatutMale->delete();
                    $elevage->budget -= $prixM;
                    $elevage->save();
                break;

                case 'femelle':
                    $animal->sexe = 'femelle stérilisée';
                    $animal->save();
                    $animal->Statut->delete();
                    $elevage->budget -= $prixF;
                    $elevage->save();
                break;

                case 'vieille femelle':
                    $animal->sexe = 'vieille femelle stérilisée';
                    $animal->save();
                    $animal->Statut->delete();
                    $elevage->budget -= $prixF;
                    $elevage->save();
                break;

                default:
                dd('comment suis-je arrivée là?');
            

            }
            return redirect()->back();
    }

    
      /**
     * Registration of name/color
     *
     * @param  int  $animal->id, 
     * @return \Illuminate\Http\Response
     */
    public function enregistrer($animal)
    {
        $animal = Animal::Find($animal);
      
        if ($animal->Race->nom == 'OC')
        {
            $rDam = $animal->Dam->Race->id;
            $rSire = $animal->Sire->Race->id;
            $taille = $animal->taille_cm;
            $races = AssoRace::where(function ($query) use ($rSire,$rDam) {
                $query->where(function ($qp) use ($rSire) {
                    $qp->where('race_pere_id', $rSire)->orWhere('race_pere_id', null);
                }
                )->where(function ($qm) use ($rDam) {
                    $qm->where('race_mere_id',$rDam)->orWhere('race_mere_id',null);
                }
            )
            ;}
            )->join('races','races.id', 'asso_race.race_produit_id')->where(function ($qu) use ($taille) {$qu->where('taille_min', '<=', $taille)->where('taille_max', '>=', $taille);})->get();
         
            return view('formEnregistrement', ['elevage'=>$animal->Elevage, 'animal' =>$animal, 'races' =>$races]);
        }
        else
        {
            return view('formEnregistrement', ['elevage'=>$animal->Elevage, 'animal' =>$animal]);
        }
       
       
    }    

    public function registration(Request $request, $animal)
    {
        $animal = Animal::Find($animal);
        
        $validated = $request->validate([ 'nom'=>'string','couleur'=>'string','race'=>'integer']); 

        $animal->nom = $validated['nom'];
        if (Animal::checkNom($animal->id, $animal->nom, $animal->affixe_id)===false)
        {
            $request->session()->flash('status',"nom déjà pris pour cet affixe");
            $request->session()->flash('alert-class',"alert-danger");
            return redirect()->back();
             } //ne pas enregistrer 2 animaux m^me nom+affixe
        $animal->couleur = $validated['couleur'];
        if (($animal->race_id == 1) && ($validated['race']!==null))
        {
            $animal->race_id = $validated['race'];
            if ($animal->race !==1)
            {
                $elevage = Elevage::Find($animal->elevage_id);
                $race = Race::Find($animal->race_id);
                $elevage->budget -= $race->frais_enregistrement;
                $elevage->save();
            }
        }

        if ($animal->save())
        {
            {
                $request->session()->flash('status',"animal enregistré avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->route('animal',[$animal->elevage->id, $animal->id]);
               
            }
        }
      
       
    }    
    
}
