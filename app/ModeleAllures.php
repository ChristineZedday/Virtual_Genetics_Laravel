<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeleAllures extends Model
{
    public function competitions() {

        return $this->morphToMany('App\Competitionable', 'competitionable');
    }
}
