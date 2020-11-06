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

    public function Progeny()
    {
        $animal = $this;
        $animaux =  Animal::where('foetus', 0)->where(function ($q) use ($animal) { $q->where('dam_id', $animal->id)->orWhere('sire_id', $animal->id);})->get();
        return $animaux;
    }

    public function Statut()
    {
        return $this->HasOne('App\statutsFemelle', 'animal_id');
    }

    public function StatutMale()
    {
        return $this->HasOne('App\StatutMale', 'animal_id');
    }

    public function Phenotype()
    {
        return $this->belongsToMany('App\Phenotype');
    }

    public function Pathologie()
    {
        return $this->belongsToMany('App\Pathologie');
    }

    public function Image()
    {
        return $this->belongsToMany('App\Image');
    }

    public function Couleur()
    {
        return $this->belongsToMany('App\Couleur');
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

    static function checkNom($animal, $nom, $affixe) //nom + affixe ou nom sans affixe pas pris
    {
        $query = Animal::where('nom',$nom)->where('affixe_id',$affixe)->first();
        if (!isset($query))
        {return true;}
        else
         {
             if ($query->id === $animal)
             {
                return true;
             }
            else
            {
                    return false;
            }
        }
             
            
    }
 
}
