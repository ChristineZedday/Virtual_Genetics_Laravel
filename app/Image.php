<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperImage
 */
class Image extends Model
{
   public function Animal() {
       return $this->belongsToMany('App\Animal');
   }
   public function Elevage() {
    return $this->hasMany('App\Elevage'); //pour l'instant pas 'image pour les élevages
}
public function Couleur() {
    return $this->hasMany('App\Couleur');
}
}
