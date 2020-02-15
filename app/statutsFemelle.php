<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statutsFemelle extends Model
{
    protected $table = 'statutsfemelles';
   

    public function Femelle()
    {
        $this->belongsTo('App\Animal');
    }
}
