<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\animaux;
use App\Http\Controllers\ReproductionController;

class Animal extends Model
{
    protected $table ='animaux';
    protected $fillable = ['nom', 'affixe_id', 'couleur', 'taille_cm', 'race', 'prix', 'sexe', 'date_achat', 'date_naissance', 'a_vandre', 'prix', 'elevage_id', 'fondateur', 'foetus', 'sire_is', 'dam_id'];


    public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
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
 
}
