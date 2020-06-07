<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatutMale extends Model
{
    protected $table = 'statuts_males';

    public function male ()
    {
        return  $this->belongsTo('App\Animal');
    }

}
