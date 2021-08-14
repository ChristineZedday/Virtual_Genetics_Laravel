<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeleAllures extends Model
{
    public function competition() {

        return $this->morphToMany(Competition::class, 'competitionable');
    }
}
