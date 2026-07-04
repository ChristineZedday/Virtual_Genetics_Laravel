<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPathologie
 */
class Pathologie extends Model
{
    public function Animal()
    {
        return $this->belongsToMany('App\Animal');
    }
}
