<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phenotype extends Model
{
    public function Animal()
    {
        return $this->belongsToMany('App\Animal');
    }

    public function Image()
    {
        return $this->morphToMany('App\Image', 'Imageable');
    }
}
