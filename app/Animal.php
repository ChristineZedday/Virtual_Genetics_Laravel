<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\animaux;
use App\Http\Controllers\ReproductionController;
use App\Affixe;
use DateTime;
use App\GameData;
use App\Race;

class Animal extends Model
{
    protected $table ='animaux';
    protected $fillable = ['nom', 'affixe_id', 'couleur', 'taille_cm', 'race_id', 'prix', 'sexe', 'date_achat', 'date_naissance', 'a_vendre', 'prix', 'elevage_id', 'fondateur', 'foetus', 'sire_id', 'dam_id', 'taille_additive', 'modele_allures_additifs', 'modele_allures' ];

    public function Genotypes()
    {
        return $this->hasMany('App\Genotypes');
        /*chaque génotype est une père d'allèles pour un gène donné, un allèle provenant du père, l'autre de la mère*/
    }

    public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
    }

    public function Race()
    {
        return $this->BelongsTo('App\Race');
    }

    public function RacesPossibles() 
    {
        return $this->BelongsToMany('App\Race','races_possibles');
    }

    public function Affixe()
    {
        return $this->BelongsTo('App\Affixe');
    }

    public function Performance()
    {
        return $this->hasOne('App\Performance');
    }
    
    public function Sire() //le père
    {
        return $this->HasOne('App\Animal', 'id', 'sire_id');
    }

    public function Dam() //la mère
    {
        return $this->HasOne('App\Animal', 'id', 'dam_id');
    }

    public function Progeny() //les enfants
    {
        $animal = $this;
        $animaux =  Animal::where('foetus', 0)->where(function ($q) use ($animal) { $q->where('dam_id', $animal->id)->orWhere('sire_id', $animal->id);})->get();
        return $animaux;
    }

    public function Palmares() 
    {
        $date =  Gamedata::date();
        $resultats =  Resultat::where('animal_id', $this->id)->where('classement', '!=', null)->get();
        return $resultats;
    }


    public function StatutFemelle() //femelle en âge de se reproduire, fertilité, gestante, suitée
    {
       return $this->HasOne('App\StatutFemelle', 'animal_id');

    }

    public function StatutMale() //male en âge de se reproduire, fertilité, qualité (approuvé)
    {
        return $this->HasOne('App\StatutMale', 'animal_id');
    }

    public function Phenotype() //Effet tangible d'un génotype ou d'une association de génotypes
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

    public function Sexe() //Sexe et stade de développement, en fait...
    {
        if (isset($this->StatutMale) && $this->StatutMale->fertilite > 0 )
        {
            if ($this->StatutMale->approuvePFS) {
                return 'Étalon approuvé dans sa race et en Poney Français de Selle';
            }
            else {
            return 'Étalon '.$this->StatutMale->qualite;
            }
        }
        else
        {
            return $this->sexe;
        }
        
    }

    public function Genre() //sexe pour les catégories élevage 1 mâle 0 femelle
    {
        switch ($this->sexe) {
            case 'jeune poulain':
            case 'jeune mâle':
            case 'mâle':
            case 'vieux mâle':
            case 'mâle stérilisé':
            case 'vieux mâle stérilisé':
                return 1;
            default:
            return 0;
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
       
        
        return $age;
    }

    public function ageAdministratif($date = "1960-01-01")
    { //Chaque cheval prend un an au premier janvier qui suit sa naissance 
        
        if ($date != "1960-01-01")
       { $date = DateTime::createFromFormat('Y-m-d', $date);
   }
       else
       { $date = DateTime::createFromFormat('Y-m-d', Gamedata::date());
   }
      
        
       
        $annee = explode("-",$this->date_naissance)[0];
        
      
        $date_admin = DateTime::createFromFormat('Y-m-d',$annee.'-01-01');
       
      
        $age = $date_admin->diff($date)->y;
       
       
        
        return $age;
    }

    public function taille() //évolution de la taille (enregistrée en BDD ) en fonction de l'âge
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

    static function checkNom($animal, $nom, $affixe) //nom + affixe ou nom sans affixe pas déjà pris
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

    static function chercheRaces($etalon,$jument,$taille) //Race d'un produit dont les parents sont de races différentes, quand cette race est déterminée automatiquement (exemple: Welsh Pony x Welsh Cob)
    {
        $date = Gamedata::date();
        $qualite = $etalon->StatutMale->qualite;
      //  $appro = Race::find($etalon->race_id)->approbation; 
       
            if ($qualite == 'approuvé' || $qualite == 'approbation provisoire') {


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
            } 
           

            else {
                return 1;
            }
       
              
    }

    static function pourCentRace($animal, $bred) //$bred: id bred
    //Pour les races de croisement ou un % de telle ou telle race est requis
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
    { //le Welsh est divisé en 4 sections traitées ici comme des races 
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
            $this->save();
            $statut = StatutFemelle::where('animal_id', $this->id)->first();
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
        
public function Evenements() //les évènements auquel le cheval a participé, voir à Competition
{
    return $this->BelongsToMany('App\Evenement')->using('App\Resultat');
}
public function Resultats() //Resultats en compète, mais c'est la fonction Palmares qui est utilisée sur le template individuel
{
    return $this->BelongsToMany('App\Resultat');
}
        
public function seraSuiteeAu($date)   {
     if ($this->StatutFemelle->suitee) {
        $foal = Animal::where('dam_id',$this->id)->where('sexe','jeune poulain')->orWhere('sexe','jeune pouliche')->first();
        $age = $foal->ageMonths();
        $months = GameData::HowManyMonths($date);
        if ($age + $months > 6) {
           // dd('poulain sevré');
            return false;
        }
        else {
           // dd('toujours suitée');
            return true;
        }
    }
    else if (!$this->StatutFemelle->vide) {
        $terme = $this->StatutFemelle->terme;
        if ($terme <= $date) {
            //dd('à nouveau suitée');
            return true;
        }
        else {
            //dd('pleine pas suitée');
            return false;
        }

    }
    else {
        return false;
        //dd('ni pleine ni suitée');
    }
} 
 
}
