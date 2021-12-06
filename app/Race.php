<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
   public function AssoRace()
   {
	   return $this->hasMany('App\AssoRace', 'race_produit_id', 'id');
   }

   public function Competitions() 
   {
      return $this->belongsToMany('App\Competition')->withPivot('prix_inscription', 'prix_premier');
   }
}
