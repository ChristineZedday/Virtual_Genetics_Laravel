<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Reprise extends Model
{
    public function Competitions() 
    {
        return $this->BelongsToMany('App\Competition');
    }
}
