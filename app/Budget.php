<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gamedata;

class Budget extends Model
{
    const REVENU = 1000;

    public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
    }
    
    public function soldePrecedent($date) 
    {
      
        $lastmonth = date('Y-m-d',strtotime('-1 month',strtotime($date)));
        return Budget::where($elevage_id = $this->elevage_id)->where('mois', $lastmonth)->first()->solde_fin;
    }

    public function soldeDebut() 
    {
        return $this->soldePrecedent() + REVENU;
    }

    public function initialize() 
    {
        $this->mois =   $date = Gamedata::date();
        
    }

}
