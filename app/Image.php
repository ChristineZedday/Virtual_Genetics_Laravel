<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   public function Animal() {
       return $this->belongsToMany('App\Animal');
   }
   public function Elevage() {
    return $this->hasMany('App\Elevage');
}
public function Couleur() {
    return $this->hasOne('App\Couleur');
}
}
