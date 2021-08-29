<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concours extends Model
{
    public function Competition()
    {
        return $this->BelongsTo('App\Competition');
    }

    public function Categories()
    {
        return $this->HasMany('App\Categories');
    }
}
