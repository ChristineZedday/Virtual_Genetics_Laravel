<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\elevages;

class Elevage extends Model
{
    protected $fillable = ['nom_elevage','nom_eleveur','affixe','affixe_pre'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Animaux()
    {
        return $this->HasMany('App\Animal');
    }

    public function Affixe()
    {
        return $this->belongsTo('App\Affixe');
    }
}
