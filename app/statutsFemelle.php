<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\statutsfemelles;

class statutsFemelle extends Model
{
    protected $table = 'statutsfemelles';
   

    public function Femelle()
    {
        return $this->belongsTo('App\Animal');
    }
    public function Male()
    {
        return $this->hasOne('App\Animal', 'id', 'etalon_id');
    }
}
