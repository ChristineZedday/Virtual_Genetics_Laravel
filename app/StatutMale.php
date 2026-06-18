<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use App\Performance;
use App\Gamedata;

class StatutMale extends Model
{
    protected $table = 'statuts_males';
//statut reproductif des mâles pubères
    public function male ()
    {
        return  $this->belongsTo('App\Animal', 'animal_id');
    }

    public function setApproval($bool = true) {
        if ($bool) {
           $this->qualite =  'approuvé' ;
           if ($this->male->elevage->role == 'vendeur')
            {     
                $this->setCarnetSaillies();
               }
        }
            else {
                $this->qualite =  'ajourné' ;
                $this->setCarnetSaillies(false);
               }
        $this->save();
    }
 

     public function setProvisoire() {
        $this->qualite ="approbation provisoire cette année";
            if ($this->male->elevage->role == 'vendeur')
            {
                $this->setCarnetSaillies();
               }
        $this->save();
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

    public function setModele15 ($bool = true)
    {
        $this->modele15 = $bool? true :false;
        $this->save();
    }

    public function setApprouvePFS() {
        $this->approuvePFS = true;
        $this->save();
        return true;
    }

    public function setClasseNat ($bool = true)
    {
        $this->classeNat = $bool? true :false;
        $this->save();
    }

    public function approuveEtalons () {
      $date = Gamedata::date();
      $after = Gamedata::afterSeason();
       $mini = Race::where('nom', 'Miniature')->first();
        
      switch (true) {
        case !$this->autorisationSanitaire:
            break;
            //pas d'avis véto positif, pas d'approbation possible
        case $this->male->race == $mini:
             if ($this->male->taille_cm <= $mini->taille_max) {
                $this->qualite = 'approuvé';
                  if ($this->male->elevage->role == 'vendeur') {
             $this->setCarnetSaillies();}
             }
             break;
        case !$this->male->race->approbation && $this->male->ageAdministratif($date) >= $this->male->race->age_repro_male:
            $this->qualite = 'approuvé';
              if ($this->male->elevage->role == 'vendeur') {
            $this->setCarnetSaillies();}
            // Si les étalons sont approuvés automatiquement dans la race
            if ($this->classNat && ($this->male->race->cheval_sport || $this->male->race->poney_sport))
            {
                $this->setApprouvePFS();}
            break;
      /* case !$this->male->race->approbation && $this->male->ageAdministratif($date) < $this->male->race->age_repro_male:
            $this->qualite = 'approuvé an prochain';
            break;*/
        //Maintenant on est dans les cas où l'obtention d'une note de 15 en concours de Modèle et Allures est nécessaire:
        case !$this->modele15:
            $this->qualite ='ajourné';
            break;
        case $this->male->ageAdministratif($date) >= 4 && !$this->male->race->classeNat :
             $this->qualite ='approuvé';
               if ($this->male->elevage->role == 'vendeur') {
            $this->setCarnetSaillies();}
               if ($this->classNat && ($this->male->race->cheval_sport || $this->male->race->poney_sport))
            { $this->setApprouvePFS();}
            break;

      /*  case $this->male->race->approbation_provisoire && !$this->male->race->classeNat && $this->male->ageAdministratif($date) >= $this->male->race->age_repro_male:
            if ($after) {$this->qualite =  'approuvé an prochain';}
             else {$this->qualite = 'approbation provisoire cette année';
               $this->setCarnetSaillies();  
            
            //races où l'approbation n'est d'abord accordée que pour un an en dessous de 4 ans
            break;
        case $this->male->race->approbation_provisoire && !$this->male->race->classeNat && $this->male->ageAdministratif($date) < $this->male->race->age_repro_male:
            $this->qualite ='approbation provisoire an prochain';
            //races où l'approbation n'est d'abord accordée que pour un an en dessous de 4 ans
            break;*/
        //Maintenant, races très selectives où un classemnt dans les meilleurs est exigé:
        case !$this->classeNat:
             $this->qualite ='ajourné';
            break;
        case $this->male->ageAdministratif($date) >=4:
             $this->qualite ='approuvé';
               if ($this->male->elevage->role == 'vendeur') {
            $this->carnet_saillies = true;}
               if ($this->classNat && ($this->male->race->cheval_sport || $this->male->race->poney_sport))
            { $this->setApprouvePFS();}
            break;
      /*  case $this->male->race->approbation_provisoire &&$this->male->ageAdministratif($date) < $this->male->race->age_repro_male:
            $this->qualite ='approbation provisoire an prochain';
            break;
        case $this->male->race->approbation_provisoire &&$this->male->ageAdministratif($date) >= $this->male->race->age_repro_male && $after:
            $this->qualite ='approuvé an prochain';
            break;*/
        default:
         $this->qualite =  'approuvé'; 
        $this->setCarnetSaillies();

        }
      
       $this->save();
      }
    
     public function approuveEtalonsResultatsConcours() {
         $date = Gamedata::date();
        $niveauDressage =$this->male->Performance->niveau_dressage;
        switch (true) {
            case (!$this->modele15):
                return false; //faut quand m^me un bon modèle!
            case ($this->male->race->poney_sport &&$niveauDressage >= $this->male->ageAdministratif($date) + 3):
                 if ($this->setApprouvePFS()){
                    return true;
                 }
                 break;
            case ($this->male->race->cheval_sport &&$niveauDressage >= $this->male->ageAdministratif($date) + 4):
                if ($this->setApprouvePFS()){
                    return true;
                 }
              

        }
     } 
    public function setCarnetSaillies ($bool = true) { 
        if ($bool) {
            $this->carnet_saillies = true;
        }
        else {
            $this->carnet_saillies = false;
        }
        $this->save();
    }
}
 