<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function Animal()
    {
        return $this->belongsTo('App\Animal');  
    }
    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');  
    }

    static function initialize($animalid)
    {
        $perf = new Performance();
        $perf->animal_id = $animalid;
        $perf->sante = 100;
        $perf->points = 0;
        $perf->niveau_id = 1;
        $perf->niveau_dressage = 1;
        $perf->pourcent_niveau = 0;
        $perf->save();
        return ($perf);
    }
  
    public function upgradeDressage()
    {
        if ($this->pourcent_niveau >= 60) {
            $this->niveau_dressage ++;
        }
    }
}
