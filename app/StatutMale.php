<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;

class StatutMale extends Model
{
    protected $table = 'statuts_males';
//statut reproductif des mâles pubères
    public function male ()
    {
        return  $this->belongsTo('App\Animal', 'animal_id');
    }

     public function setAutorisationSanitaire ()
    {
        if ($this->male->modele_allures >= 11){
        $this->autorisationSanitaire = true;
        $this->qualite = 'autorisation sanitaire';
    }
        else {
        $this->autorisationSanitaire = false;
        $this->qualite = 'refusé';  
        }
        
        $pathos = $this->male->Pathologie;
        foreach ($pathos as $patho)
        {
            if ($patho->redhibitoire)
            {
               $this->autorisationSanitaire = false;
               $this->qualite = 'refusé';
    
            }
        }
        $this->save();
    }

    public function setModele15 ()
    {
        $this->modele15 = true;
        $this->save();
    }

    public function setApprouvePFS() {
        $this->approuvePFS = true;
        $this->save();
    }

    public function setClasseNat ()
    {
        $this->classeNat = true;
        $this->save();
    }

    public function approuveEtalons () {
      $date = Gamedata::date();
       $mini = Race::where('nom', 'Miniature')->first();
        

      switch (true) {
        case !$this->autorisationSanitaire:
            break;
            //pas d'avis véto positif, pas d'approbation possible
        case $this->male->race == $mini:
             if ($this->male->taille_cm <= $mini->taille_max) {
                $this->qualite = 'approuvé';
             }
        case !$this->male->race->approbation && $this->male->ageAdministratif($date) >= $this->male->race->age_repro_male:
            $this->qualite = 'approuvé';
            // Si les étalons sont approuvés automatiquement dans la race
            break;
        case !$this->male->race->approbation && $this->male->ageAdministratif($date) < $this->male->race->age_repro_male:
            $this->qualite = 'approuvé an prochain';
            break;
        //Maintenant on est dans les cas où l'obtention d'une note de 15 en concours de Modle et Allures est nécessaire:
        case !$this->modele15:
            $this->qualite ='ajourné';
            break;
        case $this->male->ageAdministratif($date) >= 4 && !$this->male->race->classeNat :
             $this->qualite ='approuvé';
            break;

        case $this->male->race->approbation_provisoire && !$this->male->race->classeNat && $this->male->ageAdministratif($date) >= $this->male->race->age_repro_male:
            $this->qualite ='approbation provisoire cette année';
            //races où l'approbation n'est d'abord accordée que pour un an en dessous de 4 ans
            break;
         case $this->male->race->approbation_provisoire && !$this->male->race->classeNat && $this->male->ageAdministratif($date) < $this->male->race->age_repro_male:
            $this->qualite ='approbation provisoire an prochain';
            //races où l'approbation n'est d'abord accordée que pour un an en dessous de 4 ans
            break;
        //Maintenant, races très selectives où un classemnt dans les meilleurs est exigé:
        case !$this->classeNat:
             $this->qualite ='ajourné';
            break;
        case $this->male->ageAdministratif($date) >=4:
             $this->qualite ='approuvé';
            break;
        case $this->male->race->approbation_provisoire &&$this->male->ageAdministratif($date) < $this->male->race->age_repro_male:
            $this->qualite ='approbation provisoire an prochain';
            break;
        default:
         $this->qualite ='approbation provisoire cette année'; 

        }
       $this->save();
   
      }
    
      
  
     
}
 