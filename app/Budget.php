<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gamedata;

class Budget extends Model
{
    const REVENU = 1000;
    const DEBUT = 20000;
    const PRIX_AFFIXE = 60;

    public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
    }
    
    private function soldePrecedent($date) 
    {
      
        $lastmonth = date('Y-m-d',strtotime('-1 month',strtotime($date)));
        return Budget::where('elevage_id', $this->elevage_id)->where('mois', $lastmonth)->first()->solde_fin;
    }


    public function initialize() 
    {
        $this->mois = Gamedata::date();
        if ( $this->mois == Gamedata::first()->date_debut) {
            $this->solde_debut = Budget::DEBUT;
            if ($this->elevage->affixe_id != NULL) {
                $this->solde_debut -= Budget::PRIX_AFFIXE;  
            }
        }
        else {
            $this->solde_debut = $this->soldePrecedent($this->mois) + Budget::REVENU;
        }
        $this->veto_marechal = $this->elevage->calculeFraisVeto();
        $this->frais_nourriture = $this->elevage->calculeFrais() - $this->veto_marechal;

        $this->solde_fin = $this->solde_debut - $this->veto_marechal - $this->frais_nourriture;

        $this->save();
    
    }

    public function acheteFoncier($prix) {
        $this->achat_foncier = $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function acheteAnimal($prix) {
        $this->achat_animal += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

}
