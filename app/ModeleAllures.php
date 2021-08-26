<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeleAllures extends Competitionable
{
    public function competition() {

        return $this->morphToMany(Competition::class, 'competitionable');
    }
}
