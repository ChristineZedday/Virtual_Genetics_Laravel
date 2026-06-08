<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathologie extends Model
{
    public function Animal()
    {
        return $this->belongsToMany('App\Animal');
    }
}
