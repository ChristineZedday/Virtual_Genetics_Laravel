<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function animaux()
    {
        return $this->morphedByMany('App\Animal', 'Imageable');
    }
    public function elevages()
    {
        return $this->morphedByMany('App\Elevage', 'Imageable');
    }
    public function couleurs()
    {
        return $this->morphedByMany('App\Couleur', 'Imageable');
    }
    // public function phenotypes()
    // {
    //     return $this->morphTo('App\Phenotype');
    // }
}
