<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
   public function AssoRace() //Races de croisement: Demi-sang Arabe, Welsh Part Bred, Français de Selle...
   {
	   return $this->hasMany('App\AssoRace', 'race_produit_id', 'id');
   }

   public function Competitions() //compètes réservées à une ou plusieurs races
   {
      return $this->belongsToMany('App\Competition');
   }
}
