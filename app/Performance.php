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
    static function upgrade($perf)
    {
        $actid = $perf->niveau_id;
        $act = Niveau::find($actid);
    
        
            if ($act->libelle = "départemental" && $perf->points >= 3)
               { $niveau = Niveau::where('libelle','régional')->first();
                $perf->niveau_id = $niveau->id;
                $perf->points = 0;
                $perf->save();}
            if ($act->libelle = "régional" && $perf->points >=5)
             {   $niveau = Niveau::where('libelle','national')->first();
                $perf->niveau_id = $niveau->id;
                $perf->points = 0;
                $perf->save();}
          if ($act->libelle = "national" && $perf->points >=10)
                 {   $niveau = Niveau::where('libelle','mondial')->first();
                    $perf->niveau_id = $niveau->id;
                    $perf->points = 0;
                    $perf->save();
        }
       
    }
}
