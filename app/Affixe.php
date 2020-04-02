<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affixe extends Model
{
    protected $fillable = ['libelle', 'affixe_pre'];

    public function Elevage()
    {
        return $this->hasOne('App\Elevage');
    }

    public function Animal()
    {
        return $this->HasMany('App\Animaux');
    }
}
