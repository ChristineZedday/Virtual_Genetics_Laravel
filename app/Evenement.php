<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;


class Evenement extends Model
{
    protected $fillable = ['date', 'competition_id'];

    public function Competition () 
    {
        return $this->BelongsTo('App\Competition');
    }

    public function Categories()
    {
        $compet = $this->Competition()->get();
        return $compet->Categories()->get();
    }

    public function Nom() 
    {
        
        return $this->Competition->nom.' '.$this->Competition->niveau.' du '.$this->date;
    }
}
