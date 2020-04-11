<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
   
    public function Image()
    {
        return $this->MorphOne('App\Image','Imageable');
    }

    public function Phentotype()
     {
        return $this->belongsToMany('App\Phenotype');
    }
}
