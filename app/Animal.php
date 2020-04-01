<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\animaux;
use App\Http\Controllers\ReproductionController;
use App\Affixe;

class Animal extends Model
{
    protected $table ='animaux';
    protected $fillable = ['nom', 'affixe_id', 'couleur', 'taille_cm', 'race_id', 'prix', 'sexe', 'date_achat', 'date_naissance', 'a_vandre', 'prix', 'elevage_id', 'fondateur', 'foetus', 'sire_id', 'dam_id'];


    public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
    }

    public function Race()
    {
        return $this->BelongsTo('App\Race');
    }

    public function Affixe()
    {
        return $this->BelongsTo('App\Affixe');
    }

    
    public function Sire()
    {
        return $this->HasOne('App\Animal', 'id', 'sire_id');
    }

    public function Dam()
    {
        return $this->HasOne('App\Animal', 'id', 'dam_id');
    }

    public function Statut()
    {
        return $this->HasOne('App\statutsFemelle', 'id');
    }

    public function NomComplet()
    {
        if (isset($this->Affixe))
        {
            $aff = $this->Affixe;
            if ($aff->affixe_pre)
            {
                return $aff->libelle.' '.$this->nom;
            }
            else{
                return $this->nom.' '.$aff->libelle;
            }
        }
        else {
            return $this->nom;
        }
    }
 
}
