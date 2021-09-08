<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\animaux;
use App\Http\Controllers\ReproductionController;
use App\Affixe;
use DateTime;

class Animal extends Model
{
    protected $table ='animaux';
    protected $fillable = ['nom', 'affixe_id', 'couleur', 'taille_cm', 'race_id', 'prix', 'sexe', 'date_achat', 'date_naissance', 'a_vendre', 'prix', 'elevage_id', 'fondateur', 'foetus', 'sire_id', 'dam_id', 'taille_additive', 'modele_allures_additifs', 'modele_allures' ];

    public function Genotypes()
    {
        return $this->hasMany('App\Genotypes');
    }

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

    public function Sexe()
    {
        if (isset($this->StatutMale) && $this->StatutMale->fertilite > 0 )
        {
            return 'Étalon '.$this->StatutMale->qualite;
        }
        else
        {
            return $this->sexe;
        }
        
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

    public function ageMonths()
    {
        
        $date = DateTime::createFromFormat('Y-m-d', Gamedata::date());
        
        $date_naissance = DateTime::createFromFormat('Y-m-d',$this->date_naissance);
      
        $age = $date_naissance->diff($date);
        $age = 12 * $age->y + $age->m; //ppfffiou!
        
        
       
        

        
        return $age;
    }

    public function ageYears()
    {
        $date = DateTime::createFromFormat('Y-m-d', Gamedata::date());
        
        $date_naissance = DateTime::createFromFormat('Y-m-d',$this->date_naissance);
      
        $age = $date_naissance->diff($date)->y;
       
        // $age = $age/(24*60*60*30*12);

        
        return $age;
    }

    public function taille()
    {
        $age = $this->ageMonths();
        
        switch (true)
        {
            case $age<3:
                return (int) ($this->taille_cm * 70/100);
            case $age<9:
                return (int) ($this->taille_cm * 80/100);
            case $age<15:
                return (int) ($this->taille_cm * 90/100);
            case $age<21:
                return (int) ($this->taille_cm * 95/100);
            case $age<30:
                return (int) ($this->taille_cm * 97/100);
            case $age<48:
                return (int) ($this->taille_cm * 99/100);
            default:
                return $this->taille_cm;
            
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

    static function chercheRaces($etalon,$jument,$taille,$qualite)
    {
        $appro = Race::find($etalon)->approbation;
     
        switch(true)
       {
           case $etalon==$jument:
            switch(true)
            {
                case $qualite == 'approuvé':
                    return $etalon;

                case $qualite == 'autorisé' && $appro == false:
                    return $etalon;
                   
                
                default:
                return 1; //OC si étalon non autorisé ou refusé, ou non approuvé pour FS
            }
            case $qualite == 'approuvé':
              $race = AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('automatique', 1)->where('taille_conditions',0)->first();

                if (isset ($race))
                {
                    return $race->race_produit_id;
                   
                }
                else 
                {
                  $races = AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('automatique', 1)->where('taille_conditions', 1)->get();
  
                  if (sizeof($races)>0)
                  {
                    foreach ($races as $race)
                    {
                        $race = Race::Find($race->race_produit_id);             
  
                        if (($taille >= $race->taille_min) && ($taille <= $race->taille_max))
                        {
                         return $race->id;
                        }
                       
                      
                    }
                  }
                   
                }
              
           

            case $qualite == 'autorisé':
       
                $race = AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('automatique', 1)->where('taille_conditions',0)->where('approbation', 0)->first(); 

                if (isset ($race))
                {
                  return $race->race_produit_id;
                }
                else 
                {
                    $races = AssoRace::where('race_pere_id', $etalon)->where('race_mere_id', $jument)->where('automatique', 1)->where('taille_conditions',1)->get();

                    if (sizeof($races)>0)
                    {
                    foreach ($races as $race)
                    {
                    
                        $race = Race::Find($race->race_produit_id);
                        

                        if (($taille >= $race->taille_min) && ($taille <= $race->taille_max))
                        {
                            return $race->id;
                        
                        }
                        }
                    }
                }  
        default:
        return 1;
       }    
       
    }
    static function pourCentRace($animal, $bred) //$bred: id bred
    {
        $animal = Animal::Find($animal);
        if ($animal->race_id == $bred)
        {
            return 100;
        }
        else if ($animal->fondateur)
        {
            return 0;
        }
        else
        {
            return (Animal::pourCentRace($animal->sire_id,$bred) + Animal::pourCentRace($animal->dam_id,$bred))/2;
        }
    }
    static function pourCentWelsh($animal)
    {
        $animal = Animal::Find($animal);
        if ($animal->race_id == 4 || $animal->race_id == 5 || $animal->race_id == 6 || $animal->race_id == 7 )
        {
            return 100;
        }
        else if ($animal->fondateur)
        {
            return 0;
        }
        else
        {
            return (Animal::pourCentWelsh($animal->sire_id) + Animal::pourCentWelsh($animal->dam_id))/2;
        }
    }

    public function acheter($elevage)
    {
       
        $elevage = Elevage::Find($elevage);
       
        $date =  Gamedata::date();
       
            $this->a_vendre = false;
            $this->date_achat = $date;
            $this->elevage_id = $elevage->id;
            $statut = statutsFemelle::where('animal_id', $this->id)->first();
            if (isset($statut) )
            {
               if ($statut->vide == false)
                {
                    $produit = Animal::where('foetus', true)->where('dam_id',$this->id)->first(); //à changer quand on aura introduit la gemellité possible version 2
                    $produit->elevage_id = $elevage->id;
                    if (isset($elevage->Affixe->id))
                  {  $produit->affixe_id = $elevage->Affixe->id;}
                    $produit->save();
                }
               if ($statut->suitee)
               {
                $produit = Animal::where('dam_id',$this->id)->where( function ($query) {$query->where('sexe', 'jeune poulain')->orWhere('sexe', 'jeune pouliche');})->first(); 
                $produit->elevage_id = $elevage->id; 
                $produit->save();
               }
            }
            
           
        }
        

        
    
 
}
