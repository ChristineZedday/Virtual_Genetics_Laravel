<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\statutsfemelles;

class StatutFemelle extends Model
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

    public function confirme() {
        if ($this->Femelle->$this->modele_allures_additifs >= 12) {
            $this->confirmee = true;
            $this->save();
        }
    }
}
