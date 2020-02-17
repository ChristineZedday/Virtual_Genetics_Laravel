<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Animal;
use App\Gamedata;
use App\Http\Controllers\TempsController;

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
     * Display the specified resource.
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
     * Put animal for sale.
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
     * Put animal for sale.
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
            return redirect()->route('animaux',[$animal->elevage_id]);
        }
    }

     /**
     * remove from sale.
     *
     * @param  int  $elevage->id, $animal->id
     * @return \Illuminate\Http\Response
     */
    public function pasVendre($elevage, $animal)
    {
        $animal = Animal::Find($animal);
        $elevage = Elevage::Find($elevage);
       $animal->a_vendre = false;
       if ($animal->save())
       {
           return redirect()->route('animaux',[$animal->elevage_id]);
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
        $date = TempsController::dateCourante();
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
                if ($animal->save())
                {
                    return redirect()->route('animaux',[$elevage->id]);
                }
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

    
      /**
     * Registration of name/color
     *
     * @param  int  $animal->id, 
     * @return \Illuminate\Http\Response
     */
    public function enregistrer($animal)
    {
        $animal = Animal::Find($animal);
      
       
        return view('formEnregistrement', ['elevage'=>$animal->Elevage, 'animal' =>$animal]);
    }    

    public function registration(Request $request, $animal)
    {
        $animal = Animal::Find($animal);
        
        $validated = $request->validate([ 'nom'=>'string','couleur'=>'string']); 

        $animal->nom = $validated['nom'];
        $animal->couleur = $validated['couleur'];

        if ($animal->save())
        {
            {
                $request->session()->flash('status',"animal enregistrée avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->route('animal',[$animal->elevage->id, $animal->id]);
               
            }
        }
      
       
    }    
    
}
