<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Middleware\checkElevage;
use Illuminate\Support\Facades\DB;
use App\Elevage;
use App\Animal;
use App\gameData;


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
        
        $user = Auth::user();
        if (isset($user)) {
            $elevage ->user_id = $user->id;
        }

        $elevage->budget= gameData::budget();

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
    public function listeAnimaux ($id)
    {
        $date = TempsController::dateCourante();
        $elevage = Elevage::Find($id);
        $animaux = Animal::all()->where('elevage_id', $id)->where('date_naissance','>=', $date);
      
      return view('animaux', ['elevage'=>$elevage,'animaux'=>$animaux]);

    }

    /**
     * Show list of animals for sale in other studs
     * int $id: id élevage courant
     */
    public function animauxAVendre ($id)
    {
        
        
        $animaux = Animal::all()->where('elevage_id', '!=', '$id')->where('a_vendre',true);
        $elevage = Elevage::Find($id);
        
      
      return view('animauxAVendre', ['elevage'=>$elevage, 'animaux'=>$animaux]);

    }

    
    /**
     * Show list of available females
     * param: int elevage_id 
     */
    public function faireSaillir ($id)
    {
        
        $elevage = Elevage::Find($id);
        $juments = Animal::all()->where('elevage_id', $id)->where('sexe', 'femelle');
      
      return view('femelles', ['elevage'=>$elevage, 'juments'=>$juments]);

    }

     /**
     * Show list of available males in elevage $id
     * param int $id current stud $jument female 
     */
    public function choixEtalon ($id,$jument)
    {
        $elevage = Elevage::Find($id);
        
        $jument =Animal::Find($jument);
        
        $etalons = Animal::all()->where('elevage_id', $id)->where('sexe', 'mâle');
      
      return view('etalons', ['elevage'=>$elevage, 'etalons'=>$etalons, 'jument'=>$jument]);

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
