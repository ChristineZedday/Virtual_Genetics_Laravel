<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function Competition () 
    {
        return $this->BelongsTo('App\Competition');
    }

    public function Nom() 
    {
        
        return $this->Competition->nom.' du '.$this->date;
    }
}
