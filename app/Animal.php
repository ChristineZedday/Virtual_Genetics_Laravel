<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\animaux;

class Animal extends Model
{
    protected $table ='animaux';

    public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
    }

    
    public function Sire()
    {
        return $this->HasOne('App\Animal', 'id', 'sire_id');
    }

    public function Dam()
    {
        return $this->HasOne('App\Animal', 'id', 'dam_id');
    }

    public function Statut()
    {
        return $this->HasOne('App\statutsFemelle', 'id');
    }

    public function faireSaillir($elevage)
    {
        dd($this);
    }
  
 
}
