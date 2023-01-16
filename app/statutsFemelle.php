<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\statutsfemelles;

class statutsFemelle extends Model
{
    protected $table = 'statutsfemelles';
   //Statut de la poulinière 

    public function Femelle()
    {
        return $this->belongsTo('App\Animal');
    }
    public function Male() //Le géniteur si la femelle est pleine
    {
        return $this->hasOne('App\Animal', 'id', 'etalon_id');
    }
}
