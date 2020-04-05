<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phenotype extends Model
{
    public function Animal()
    {
        return $this->belongsToMany('App\Animal');
    }
}
