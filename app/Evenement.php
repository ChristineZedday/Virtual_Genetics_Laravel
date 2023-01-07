<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;


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

  
    public function nextYear() {
$date = date('Y-m-d',strtotime('+12 month',strtotime($this->date)));
$evenement = New Evenement();
$evenement->nom = $this->nom;
$competes = $this->Competitions;
$evenement->date = $date;
$evenement->save();
foreach ($competes as $comp) {
    $evenement->Competitions()->attach($comp);
}

    }
}
