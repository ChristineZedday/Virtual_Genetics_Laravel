<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;
use App\Gamedata;
use DateTime;


class Evenement extends Model
{
    protected $fillable = ['date'];

    public function Competitions () 
    {
        return $this->BelongsToMany('App\Competition');
    }

  /* public function Categories()
    {
        $compet = $this->Competition;
        return $compet->Categories;
    }*/

  
    static function nextYear() 
{
    $date =new DateTime(Gamedata::date());
    $m = $date->format('m');
    $y = $date->format('Y');
    
    $evenements = Evenement::whereMonth('date', $m)->whereYear('date',$y)->get(); 
    foreach ($evenements as $evenement)  {
        $date = date('Y-m-d',strtotime('+12 month',strtotime($evenement->date)));
        $nevenement = New Evenement();
        $nevenement->nom = $evenement->nom;
        $competes = $evenement->Competitions;
        $nevenement->date = $date;
        $nevenement->distance = $evenement->distance;
        $nevenement->save();
        foreach ($competes as $comp) {
            $nevenement->Competitions()->attach($comp);
        }
    }
}

}
