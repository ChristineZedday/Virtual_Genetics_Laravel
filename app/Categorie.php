<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   

   public function Competitions() 
   {
       return $this->BelongsToMany('App\Competition', 'categorie_competition', 'competition_id', 'categorie_id');
   }

   public function verification($animal) : bool
   {
    $animal = Animal::Find($animal);
    if ($this->type="Modèle et Allures Race") {
        if ($this->race_id != $animal->race_id) {
            return false;
        }
       }
       return true;
   }
}
