<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\AssoCouleur;

class Couleur extends Model
{
   
    public function Image()
    {
        return $this->belongsTo('App\Image');
    }

    public function Phentotype()
     {
        return $this->belongsToMany('App\Phenotype');
    }
    public function Associee1()
    {
       return $this->hasOne('App\AssoCouleur', 'couleur2_id', 'id');
   }
     
   
   public function Associee2()
   {
      return $this->hasOne('App\AssoCouleur', 'couleur2_id', 'id');
  }

  static function calculeCouleur($tab)
  {

    $images = [];
    foreach ($tab as $val)
    {
        if ($val->image_id)
        {
           $images[]=Image::Find($val->image_id);
        }
       

    }
  
    return $images;
  }
}
    

