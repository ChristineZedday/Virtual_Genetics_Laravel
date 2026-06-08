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
        $soldeP = Budget::where('elevage_id', $this->elevage_id)->where('mois', $lastmonth)->first();
        if ($soldeP != NULL ) {
            return $soldeP->solde_fin;
        }
        else {
            return self::DEBUT;
        }
    
        
    }


    public function initialize() 
    {
        $this->mois = Gamedata::date();
        if ( $this->mois == Gamedata::first()->date_debut) {
            $this->solde_debut = self::DEBUT;
            if ($this->elevage->affixe_id != NULL) {
                $this->solde_debut -= self::PRIX_AFFIXE;  
            }
        }
        else {
            $this->solde_debut = $this->soldePrecedent($this->mois) + self::REVENU;
        }
        $this->veto_marechal = $this->elevage->calculeFraisVeto();
        $this->frais_nourriture = $this->elevage->calculeFrais() - $this->veto_marechal;

        $this->solde_fin = $this->solde_debut - $this->veto_marechal - $this->frais_nourriture;
        $this->revenus_externes = self::REVENU;

        $this->save();
    
    }

    public function acheteFoncier($prix) {
        $this->achat_foncier = $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function acheteAnimal($prix) {
        $this->achat_animaux += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function vendAnimal($prix) {
        $this->vente_animaux += $prix;
        $this->solde_fin += $prix;
        $this->save();
    }

    public function acheteSaillie($prix) {
        $this->achat_saillies += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function vendSaillie($prix) {
        $this->vente_saillies += $prix;
        $this->solde_fin += $prix;
        $this->save();
    }

    public function fraisTransport($prix) {
        $this->frais_transports += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function fraisAdministratifs($prix) {
        $this->frais_administratifs += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function fraisEngagement($prix) {
        $this->frais_engagements += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function gainsConcours($prix) {
        $this->gains_concours += $prix;
        $this->solde_fin += $prix;
        $this->save();
    }

    public function fraisVeto($prix) {
        $this->veto_marechal += $prix;
        $this->solde_fin -= $prix;
        $this->save();
    }

    public function solde() {
        return $this->solde_fin;
    }

}
