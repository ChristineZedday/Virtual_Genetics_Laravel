<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Imageable()
    {
        return $this->morphToMany('App\Image', 'Imageable');
    }
}
