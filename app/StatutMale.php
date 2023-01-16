<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatutMale extends Model
{
    protected $table = 'statuts_males';
//statut reproductif des mâles pubères
    public function male ()
    {
        return  $this->belongsTo('App\Animal');
    }

}
