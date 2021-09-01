<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
   
    public function Concours()
    {
        return $this->HasMany('App\Concours');
    }

    public function Evenement()
     {
        return $this->HasMany('App\Evenement');
    }

    public function Categories()
    {
        return $this->BelongsToMany('App\Categorie', 'categorie_competition');
    }

  

}
