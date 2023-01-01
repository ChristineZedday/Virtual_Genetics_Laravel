<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\elevages;

class Elevage extends Model
{
    protected $fillable = ['nom_elevage','nom_eleveur','affixe_id','affixe_pre'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Animaux()
    {
        return $this->HasMany('App\Animal');
    }

    public function Affixe()
    {
        return $this->belongsTo('App\Affixe'); //hasMany si un élevage peut déposer plusieurs affixes
    }

    public function Image()
    {
        return $this->hasOne('App\Image');
    }

    public function Resultats()
    {
        
       $animaux = $this->HasMany('App\Animal');
       $res = [];
       $i =0;
       foreach ($animaux as $animal) {
            $resultat = $animal->Resultats();
            if (!empty($resultat)) {
                $res[i] = $resultat;
                $i++;
            }
       }
        return $res;

    }
}
