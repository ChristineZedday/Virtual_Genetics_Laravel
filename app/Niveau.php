<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperNiveau
 */
class Niveau extends Model
{
    protected $table ='niveaux';

    public function Competition()
    {
        return $this->hasMany('App\Competition');  
    }
    public function Animal()
    {
        return $this->hasMany('App\Animal');  
    }
}
