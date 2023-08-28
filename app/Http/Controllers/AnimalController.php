<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;
use App\Animal;
use App\Gamedata;
use App\Http\Controllers\TempsController;
use App\StatutFemelle;
use App\AssoRace;
use App\Race;
use App\Affixe;
use App\Locus;
use App\Genotype;
use App\Allele;
use App\Genome;
use phpDocumentor\Reflection\Types\Nullable;

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
    public function create($elevage)
    {
        $affixes = Affixe::all();
        $races = Race::all();
        $elevage = Elevage::find($elevage);
        $loci = Locus::all();
        return view('formCreateAnimal', ['elevage'=>$elevage, 'races'=>$races, 'affixes' =>$affixes, 'loci' => $loci]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $elevage)
    {
        
        $validated =  $request->validate([
            'nom'=>'string|required', 
            'race_id' =>'integer',   
            'sexe' =>'string|required',
            'taille_additive' =>'integer|required',
            'couleur'=>'string|required'
            
            ]);
      
        $animal = new Animal;
        $animal->fill($validated);
        $affixe = $request->input('affixe_id');
        if ($affixe != 0)
        {
            $animal->affixe_id = $affixe;
        }
        else 
        {
            $animal->affixe_id = NULL;
        }
       
        if (!Animal::checkNom($animal, $animal->nom, $animal->affixe_id))
        {
            $request->session()->flash('status',"votre animal n'a pu être enregistré car le nom donné est déjà pris pour cet affixe");
            $request->session()->flash('alert-class',"alert-danger");
            return redirect()->back(); 
        }
        $animal->elevage_id = $elevage;
        $animal->Randomize();
        $animal->date_naissance = Gamedata::date();
        $animal->taille_cm = $animal->taille_additive;
        $animal->modele_allures = $animal->modele_allures_additifs;
        $animal->fondateur = true;
       
        if ($animal->save())
        {
           
            $loci = Locus::all();
            foreach ($loci as $locus)
           {
            $allp = 'p'.$locus->id;
            $allm = 'm'.$locus->id;
            if ($request->has($allp) or $request->has($allm))
                { 

                 $genotype = new Genotype;
                 $genotype->animal_id = $animal->id;
                 $genotype->locus_id = $locus->id;
               
                 $def = Allele::where('locus_id', $locus->id)->where('is_default',1)->first()->id;
                 if ($request->has($allp) && $request->has($allm) )
                    {
                    $genotype->allele_p_id = $request->input($allp);
                    $genotype->allele_m_id = $request->input($allm);
                     }
                 else if  ($request->has($allp))
                    {
                    $genotype->allele_p_id = $request->input($allp);
                    $genotype->allele_m_id = $def;
                    }
                else{
                    $genotype->allele_m_id = $request->input($allm);
                    $genotype->allele_p_id = $def;
                    }
                   $genotype->save();
                   
                }
              
           }
           if (Genome::readGenes($animal->id))
           {
               $request->session()->flash('status',"votre animal a été enregistré ainsi que ces gènes et leurs effets");
               $request->session()->flash('alert-class',"alert-sucess");
               return redirect()->route('animal',[$animal->elevage->id, $animal->id]);
           }
           else{
            $request->session()->flash('status',"le genôme n'a pu être enregistré");
            $request->session()->flash('alert-class',"alert-danger");
            return redirect()->back();
           }
        }
        else{
            $request->session()->flash('status',"votre animal n'a pu être enregistré");
            $request->session()->flash('alert-class',"alert-danger");
            return redirect()->back();
        }
     
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
       $animal = Animal::find($id);
       $affixes = Affixe::all();
       $races = Race::all();
       $elevage = $animal->elevage;
       $loci = Locus::all();


       return view('formEditAnimal', [
        'animal'=> $animal, 'affixes'=> $affixes, 'races' => $races, 'loci' => $loci, 'elevage'=>$elevage ]);
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
        $validated =  $request->validate([
            'nom'=>'string|required', 
            'race_id' =>'integer',   
            'sexe' =>'string|required',
            'taille_additive' =>'integer|required',
            'modele_allures_additifs' => 'integer|required',
            'couleur'=>'string|required'
            
            ]);

            $animal = Animal::find($id);
            $animal->fill($validated);

            if ($animal->save()) {
                $request->session()->flash('status',"animal modifiée avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->action('AnimalController@show' ,['elevage'=>$animal->elevage,'animal'=>$animal]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);
        $genotypes = $animal->Genotypes();
        foreach ($genotypes as $genotype)
        {
            $genotype->delete();
        }
        $images = $animal->Image();
        foreach ($images as $imagee)
        {
            //detach les imeges du poney
        }

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
       
        $vendeur = $animal->elevage_id;
        $vendeur = Elevage::Find($vendeur);

        if ($elevage->budget >= $animal->prix)
            {
            $vendeur->budget = $vendeur->budget + $animal->prix;
            $vendeur->save();
            $elevage->budget = $elevage->budget - $animal->prix;
            $elevage->save();
            $animal->acheter($elevage->id);
            // $animal->a_vendre = false;
            // $animal->date_achat = $date;
            // $animal->elevage_id = $elevage->id;
            // $statut = StatutFemelle::where('animal_id', $animal->id)->first();
            // if (isset($statut) )
            // {
            //    if ($statut->vide == false)
            //     {
            //         $produit = Animal::where('foetus', true)->where('dam_id',$animal->id)->first(); //à changer quand on aura introduit la gemellité possible version 2
            //         $produit->elevage_id = $elevage->id;
            //         $produit->affixe_id = $elevage->Affixe->id;
            //         $produit->save();
            //     }
            //    if ($statut->suitee)
            //    {
            //     $produit = Animal::where('dam_id',$animal->id)->where( function ($query) {$query->where('sexe', 'jeune poulain')->orWhere('sexe', 'jeune pouliche');})->first(); 
            //     $produit->elevage_id = $elevage->id; 
            //     $produit->save();
            //    }
            
            
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
                    $animal->StatutMale->fertilite = 0;
                    $animal->StatutMale->save();
                    $elevage->budget -= $prixM;
                    $elevage->save();
                break;

                case 'vieux mâle':
                    $animal->sexe = 'vieux mâle stérilisé';
                    $animal->save();
                    $animal->StatutMale->fertilite = 0;
                    $animal->StatutMale->save();
                    $elevage->budget -= $prixM;
                    $elevage->save();
                break;

                case 'femelle':
                    $animal->sexe = 'femelle stérilisée';
                    $animal->save();
                    $animal->StatutFemelle->delete();
                    $elevage->budget -= $prixF;
                    $elevage->save();
                break;

                case 'vieille femelle':
                    $animal->sexe = 'vieille femelle stérilisée';
                    $animal->save();
                    $animal->StatutFemelle->delete();
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
        $date = GameData::date();
        
        $animal = Animal::Find($animal);
        if ($animal->ageMonths() > 0) {
            $elevage = $animal->elevage;
            $elevage->budget -= 50;
            $elevage->save();
        }

        if ($animal->ageAdministratif($date) > 0) {
            $animal->race_id = 17;
            $animal->save();
            foreach ($animal->RacesPossibles()->get() as $possible) {
                $animal->RacesPossible()->detach($possible->id);
            }

        }
            
        
        if ($animal->Race->nom == 'OC')
        {
            $races = $animal->RacesPossibles()->get();
           // dd($races);
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
        
        $validated = $request->validate([ 'nom'=> ['string', 'required'],
        'couleur'=> ['string', 'required' ],
        'race'=>'integer']); 

        $animal->nom = $validated['nom'];
        if (Animal::checkNom($animal->id, $animal->nom, $animal->affixe_id)===false)
        {
            $request->session()->flash('status',"nom déjà pris pour cet affixe");
            $request->session()->flash('alert-class',"alert-danger");
            return redirect()->back();
        } //ne pas enregistrer 2 animaux m^me nom+affixe
             
             $affixe = Affixe::find($animal->affixe_id);
             if (isset($affixe))
            {            
                 $long =strlen($affixe->libelle);
                }
            else {  $long =0;}

            if ((strlen($animal->nom) + $long) > 25)

        {
            $request->session()->flash('status',"nom trop long  pour cet affixe");
            $request->session()->flash('alert-class',"alert-danger");
            return redirect()->back();
             }
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
        $animal->statut_administratif = 'enregistré';
        if ($animal->save())
        {
            {
                $request->session()->flash('status',"animal enregistré avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->route('animal',[$animal->elevage->id, $animal->id]);
               
            }
        }
      
       
    }   
    public function updateNotes(Request $request, $animal) 
    {
        $animal = Animal::Find($animal);

        $validated = $request->validate([ 'notes'=> ['string']]
       ); 
        $animal->notes = $validated['notes'];
        $animal->save();
        return redirect()->route('animal',[$animal->elevage->id, $animal->id]);
    }
    
}
