<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
   
    public function Image()
    {
        return $this->hasOne('App\Image');
    }

    public function Phentotype()
     {
        return $this->belongsToMany('App\Phenotype');
    }
    public function Associee1()
    {
       return $this->hasOne('App\AssoCouleur', 'couleur1_id', 'id');
   }
   
   public function Associee2()
   {
      return $this->hasOne('App\AssoCouleur', 'couleur2_id', 'id');
  }
    
}
