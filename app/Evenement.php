<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Evenement extends Model
{
    protected $fillable = ['date', 'competition_id'];

    public function Competition () 
    {
        return $this->BelongsTo('App\Competition');
    }

    public function Nom() 
    {
        
        return $this->Competition->nom.' '.$this->Competition->niveau.' du '.$this->date;
    }
}
