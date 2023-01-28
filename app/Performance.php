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
        $perf->save();
    }
    public function upgrade()
    {
        $actid = $this->niveau_id;
        $act = Niveau::find($actid);
    
        switch (true) {
            case $act->libelle = "départemental" && $this->points >= 3:
                $niveau = Niveau::where('libelle','régional')->first();
                $this->niveau_id = $niveau->id;
                $this->points = 0;
                $this->save();
            case $act->libelle = "régional" && $this->points >=5:
                $niveau = Niveau::where('libelle','national')->first();
                $this->niveau_id = $niveau->id;
                $this->points = 0;
                $this->save();
            case $act->libelle = "national" && $this->points >=10:
                    $niveau = Niveau::where('libelle','mondial')->first();
                    $this->niveau_id = $niveau->id;
                    $this->points = 0;
                    $this->save();
        }
       
    }
}
