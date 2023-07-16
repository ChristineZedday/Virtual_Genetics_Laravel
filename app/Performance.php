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
    public function upgrade()
    {
        $actuel = $this->Niveau;
        
            if ($actuel->libelle == "départemental" && $this->points >= 3)  {
                $niveau = Niveau::where('libelle','régional')->first();
                $this->niveau_id = $niveau->id;
                $this->points = 0;
                $this->save();}
            else if ($actuel->libelle == "régional" && $this->points >=5)
             {   $niveau = Niveau::where('libelle','national')->first();
                $this->niveau_id = $niveau->id;
                $this->points = 0;
                $this->save();}
          else if ($actuel->libelle == "national" && $this->points >=10)
                 {   $niveau = Niveau::where('libelle','mondial')->first();
                    $this->niveau_id = $niveau->id;
                    $this->points = 0;
                    $this->save();
        }
       
    }
    public function upgradeDressage()
    {
        if ($this->pourcent_niveau >= 60) {
            $this->niveau_dressage ++;
            $this->pourcent_niveau = 0;
        }
    }
}
