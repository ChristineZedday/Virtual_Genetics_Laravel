<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elevage;

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

}
