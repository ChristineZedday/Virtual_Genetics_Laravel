<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\elevages;
use App\GameData;

class Elevage extends Model
{
    
    const COEFF_UGB = 0.37;
    const COEFF_UGP_PLEINE_SUITEE = 0.63 ;//0.37/0.59
    const PRIX_FOIN = 100;

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

    private function chargeHa() 
    //charge d'animaux à l'hectare possible selon saison
    {
        $date = Gamedata::date();
        $mois = date('n',strtotime($date));
        $charge = Rendement::where('mois',$mois)->first()->ha_par_UGB;
        return $charge; 
      
    }

    private function faitFoin($surface) {
        $date = Gamedata::date();
        $mois = date('n',strtotime($date));
        $rendement = Rendement::where('mois',$mois)->first()->foin_tMS_ha;
        $this->foin += $rendement * $surface;

    }

    private function consommeFoin($UGB) {
        return $UGB * 4.75/12;
    }

    public function calculeFrais() 
{
    $fraisNourriture = 0;
    
    $animaux = Animal::where('elevage_id',$this->id)->where('foetus',0)->whereNotIn('sexe',['jeune poulain','jeune pouliche'] )->get();
    $UGB_totaux =0;
    $fraisVeto =0;

    foreach ($animaux as $animal) {
        if ($animal->Statut && $animal->Statut->suitee or $animal->Statut->pleine) {
            $UGB = (self::COEFF_UGB_PLEINE_SUITEE * $animal->taille())/100;
            $fraisVeto += 25;
            
        }
        else {
            $UGB = (self::COEFF_UGB * $animal->taille())/100;
           $fraisVeto += 10;
        }
        $UGB_totaux += $UGB;
    }
    //dd($UGB_totaux);
    $charge = self::chargeHa();
    $utilise = $UGB_totaux * $charge;
   
    if ($utilise <= $this->surface) {
        self::faitFoin(min($this->surface/2, $this->surface - $utilise));
      
    }
    else {
        $UGBtrop = $UGB_totaux - ($this->surface * $charge)/$UGB_totaux;
        $conso = self::consommeFoin($UGBtrop);
        if ($conso > $this->foin) {
            $fraisNourriture = ($this->foin - $conso) * self::PRIX_FOIN;
            $this->foin = 0;
        }
        else {
            $this->foin -= $conso;
        }
        $this->save();

    }
    return $fraisVeto + $fraisNourriture;
}

}
