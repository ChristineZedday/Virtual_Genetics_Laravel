<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function Animal()
    {
        return $this->belongsTo('App\Animal');  
    }
    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');  
    }
}
