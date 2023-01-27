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
        $perf->niveau_id = 1;
        $perf->save();
    }
    public function upgrade($animalid)
    {
        $actid = $this->niveau_id;
        $act = Niveau::find($actid);
        $results = Resultat::where('animal_id',$animalid)->whereNotNull('classement')->whereHas('competition', function ($q) use ($actid) { $q->where('niveau_id',$act);})->count();
        switch (true) {
            case $act->libelle = "départemental" && $results >=3:
                $niveau = Niveau::where('libelle','régional')->first();
                $this->niveau_id = $niveau->id;
                $this->save();
            case $act->libelle = "régional" && $results >=5:
                $niveau = Niveau::where('libelle','national')->first();
                $this->niveau_id = $niveau->id;
                $this->save();
            case $act->libelle = "national" && $results >=10:
                    $niveau = Niveau::where('libelle','mondial')->first();
                    $this->niveau_id = $niveau->id;
                    $this->save();
        }
    }
}
