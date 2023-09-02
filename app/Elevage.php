<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\elevages;
use App\GameData;

class Elevage extends Model
{
    
    const COEFF_UGB = 0.37;
    const COEFF_UGB_PLEINE_SUITEE = 0.63 ;//0.37/0.59
    const PRIX_FOIN = 100;
    const PRIX_HECTARE = 25000;
    const CONSO_FOIN_UGB_AN = 4.75;

    protected $fillable = ['nom_elevage','nom_eleveur','affixe_id','affixe_pre'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Animaux()
    {
        return $this->HasMany('App\Animal');
    }

    public function Budget()
    {
        return $this->HasMany('App\Budget');
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

    private function faitFoin($surface) 
    {
        $date = Gamedata::date();
        $mois = date('n',strtotime($date));
        $rendement = Rendement::where('mois',$mois)->first()->foin_tMS_ha;
        $this->foin += $rendement * $surface;

    }

    private function consommeFoin($UGB) 
    {
        return $UGB * self::CONSO_FOIN_UGB_AN/12;
    }

    public function nbAnimaux() 
    {
        $animaux = Animal::where('elevage_id',$this->id)->where('foetus',0)->get()->count(); 
        return $animaux;

    }

    public function calculeFraisVeto()
    {
       
        $poulains = Animal::where('elevage_id',$this->id)->where('foetus',0)->whereIn('sexe',['jeune poulain','jeune pouliche'] )->get()->count();

        $autres = $this->nbAnimaux() - $poulains;

        $frais = $poulains * 25 + $autres *10; 

        return $frais;
    }

    public function calculeUGB() 
    {
        $UGB_totaux=0;
       
        $animaux = Animal::where('elevage_id',$this->id)->where('foetus',0)->whereNotIn('sexe',['jeune poulain','jeune pouliche'] )->get();
        
        foreach ($animaux as $animal) {
            if ($animal->StatutFemelle?->suitee or $animal->StatutFemelle?->pres_pleine) {
                
                $UGB = (self::COEFF_UGB_PLEINE_SUITEE * $animal->taille())/100;
            }
            else {
               
                $UGB=  (self::COEFF_UGB * $animal->taille())/100;
            
            }
            
            $UGB_totaux += $UGB;
        }
        return $UGB_totaux;
    }
   

    public function calculeFrais() 
{
 
    $fraisNourriture = 0;
    $UGB_totaux= $this->calculeUGB();
    $fraisVeto=$this->calculeFraisVeto();
  

    $charge = self::chargeHa();
   // dd($UGB_totaux);0
   $utilise = $UGB_totaux * $charge;
   //dd($utilise);
   
    if ($utilise <= $this->surface) {
        self::faitFoin(min($this->surface/2, $this->surface - $utilise)/2);//on fait faire les foins par un agriculteur qui en prend la moitié
    }
    else {
        $UGBtrop =  ($utilise - $this->surface)/$charge;
       // charge en hectares nécessaires par UGB donc il faut l'inverse pour savoir combien d'UGB n'ont pas pu brouter
        $conso = self::consommeFoin($UGBtrop);
         
        if ($conso > $this->foin) {
            $fraisNourriture = ($conso - $this->foin) * self::PRIX_FOIN;
            $this->foin = 0;
        }
        else {
           
            $this->foin -= $conso;
        }
        $this->save();

    }
    return $fraisVeto + $fraisNourriture;
}

static function terresAVendre() {
    
    $rand = rand(0,100);
    switch (true) {
        case $rand < 50:
            return 0;
        case $rand < 75:
            return 1;
        case $rand <80:
            return 1.5;
        case $rand <90:
            return 2;
        case $rand <95:
            return 3;
        case $rand == 96:
            return 4;
        case $rand == 97:
            return 5;
        default:
        return 0.5;
    }
}

public function acheteTerres($surface) 
{
    $prix = $surface * self::PRIX_HECTARE;
    if ($this->budget > $prix) {  
        $this->budget -= $prix;
        $this->surface += $surface;
    $this->save();

    $this->Budget->acheteFoncier($prix);
    }   
}

public function fraisTransport($animal,$distance) 
{
    $taille = $animal->taille();
    $frais = $distance * $taille / 150;
    if (NULL != $animal->StatutFemelle && $animal->StatutFemelle->suitee ) {
        $frais += $frais * 0.5;
    }
    if ($this->budget >= $frais) {
        $this->budget -= $frais;
        $this->save();
        $this->Budget->fraisTransport($frais);
        return true;
    }
    else {
        return false;
    }
}
}
