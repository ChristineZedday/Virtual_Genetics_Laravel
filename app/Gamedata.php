<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamedata extends Model
{
    
   static function budget()
    {
        return  Gamedata::find(1)->budget;
    }
}
