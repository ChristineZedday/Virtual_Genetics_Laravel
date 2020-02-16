<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\gamedatas;


class Gamedata extends Model
{
    
   static function budget()
    {
        return  Gamedata::find(1)->budget;
    }

    public function date()
    {
        return  Gamedata::find(1)->date_courante;
    }
}
