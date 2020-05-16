<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
   public function AssoRace()
   {
	   return $this->hasMany('App\AssoRace', 'race_produit_id', 'id');
   }
}
