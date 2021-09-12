<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   

   public function Competitions() 
   {
       return $this->BelongsToMany('App\Competition', 'categorie_competition', 'competition_id', 'categorie_id');
   }

   public function verification($animal, $date) : bool
   {
    $animal = Animal::Find($animal);
  
    switch (true) {
    case $this->type==="Modèle et Allures Race" :
        switch(true) {
            case $this->race_id != $animal->race_id:
                return false;
            case $this->age_min > $animal->ageAdministratif($date) :
                return false;
            case $this->age_max < $animal->ageAdministratif($date) :
                return false;
            case $this->sexe != $animal->genre():
                return false;
            default: return true;
        }
        return true;

    }
    
      
        
       
       return true;
   }
}
