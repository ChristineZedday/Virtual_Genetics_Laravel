<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
   
    public function Concours()
    {
        return $this->HasMany('App\concours');
    }

  

}
