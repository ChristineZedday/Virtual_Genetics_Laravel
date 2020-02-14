<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\animaux;

class Animal extends Model
{
    protected $table ='animaux';

    public function Elevage()
    {
        return $this->BelongsTo('App/Elevage');
    }
}
