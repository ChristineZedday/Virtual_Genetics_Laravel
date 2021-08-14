<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    public function ModeleAllures()
    {
        return $this->morphedByMany(ModeleAllures::class, 'competitionable');
    }
}
