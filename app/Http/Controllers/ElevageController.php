<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Middleware\checkElevage;
use Illuminate\Support\Facades\DB;
use App\Elevage;
use App\Animal;
use App\gameData;
use App\Affixe;


class ElevageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('checkElevage');
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index($id)
    {
    $elevage = Elevage::Find($id);
       return view('dashboard', ['elevage'=>$elevage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formCreateElevage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated =  $request->validate(['nom_elevage'=>'string|required', 'nom_eleveur'=>'string|required']);
        $elevage = new Elevage;
        $elevage->fill($validated);

        if (null !== $request->input('affixe')) {
            $affixe = Affixe::where('libelle', $request->input('affixe'))->first(); //faudra mettre un vérif en javascript
            if (!isset($affixe))
                {
                $affixe = new Affixe;
                $affixe->libelle =  $request->input('affixe');
                $affixe->affixe_pre = $request->input('affixe_pre');
                $affixe->save();
                $elevage->affixe_id=$affixe->id;
                }
            }
        
        $user = Auth::user();
        if (isset($user)) {
            $elevage ->user_id = $user->id;
        }

        $elevage->budget= gameData::budget();
       
        if (isset($elevage->affixe_id))
        {
            $elevage->budget = $elevage->budget - 500;
        }

        if ($elevage->save())
            {
                $request->session()->flash('status',"elevage enregistrée avec succès");
                $request->session()->flash('alert-class',"alert-success");
                return redirect()->action('HomeController@index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Show list of animals for this stud
     */
    public function listeAnimaux ($id, $filtre)
    {
      
        $elevage = Elevage::Find($id);
        switch ($filtre)
        {
            case 'reps':
                $animaux = Animal::where('elevage_id', $id)->whereIn('sexe',['mâle', 'vieux mâle', 'femelle', 'vieille femelle'])->get(); 
            break;

            case 'jeunes':
                $animaux = Animal::where('elevage_id', $id)->where('foetus', false)->whereIn('sexe',['jeune mâle', 'jeune femelle'])->get(); 
            break;

            case 'males':
                $animaux = Animal::where('elevage_id', $id)->whereIn('sexe',['mâle', 'vieux mâle'])->get(); 
            break;

            case 'femelles':
                $animaux = Animal::where('elevage_id', $id)->whereIn('sexe',['femelle', 'vieille femelle'])->get(); 
            break;

            case 'hongres':
                $animaux = Animal::where('elevage_id', $id)->whereIn('sexe',['mâle stérilisé', 'femelle stérilisée', 'vieux mâle stérilisé', 'vieille femelle stérilisée'])->get(); 
            break;

            case 'vente':
                $animaux = Animal::where('elevage_id', $id)->where('foetus', false)->where('a_vendre', true)->get(); 
            break;

            default:
            $animaux = Animal::all()->where('elevage_id', $id)->where('foetus', false);
        }
      
      return view('animaux', ['elevage'=>$elevage,'animaux'=>$animaux]);

    }

    /**
     * Show list of animals for sale in other studs
     * int $id: id élevage courant
     */
    public function animauxAVendre ($id, $race)
    {
        
        $animaux = Animal::where('elevage_id', '!=' , $id)->where('a_vendre',true)->where('race_id', $race)->get();
        $elevage = Elevage::Find($id);
      
     
      return view('animauxAVendre', ['elevage'=>$elevage,'animaux'=>$animaux]);

    }

    
    /**
     * Show list of available females
     * param: int elevage_id 
     */
    public function faireSaillir ($id)
    {
        
        $elevage = Elevage::Find($id);
        $date = TempsController::dateCourante();
        $juments = Animal::where('elevage_id', $id)->where(function ($query){$query->where('sexe', 'femelle')->orWhere('sexe', 'vieille femelle');})->whereHas('Statut', function($q) use ($date) { $q->where('vide', true)->where(function ($qu) use ($date) {$qu->where('date_saillie','<>', $date)->orWhere('date_saillie', null);});})->get();
       

      return view('femelles', ['elevage'=>$elevage, 'juments'=>$juments]);

    }

     /**
     * Show list of available males in elevage $id
     * param int $id current stud $jument female 
     */
    public function choixEtalon ($id,$jument)
    {
        $elevage = Elevage::Find($id);
        $budget = $elevage->budget;
        
        $jument =Animal::Find($jument);
        
        $etalons = Animal::where('elevage_id', $id)->where(function ($query){$query->where('sexe', 'mâle')->orwhere('sexe','vieux mâle');})->get();

        $exterieurs = Animal::whereHas('StatutMale', function ($query) use ($budget) {$query->where('disponible', 1)->where('prix', '<=', $budget);})->get();
       

      
      return view('etalons', ['elevage'=>$elevage, 'etalons'=>$etalons, 'exterieurs'=>$exterieurs, 'jument'=>$jument]);

    }


    /**
     * Show money
     */
    public function budget ($id)
    {
        $elevage = Elevage::Find($id);
        $budget = $elevage->budget;
        return redirect()->back()->with('alert', $budget);
    }
}
