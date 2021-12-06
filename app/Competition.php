<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
   
  

    public function Evenement()
     {
        return $this->HasMany('App\Evenement');
    }

    public function Categories()
    {
        return $this->BelongsToMany('App\Categorie');
    }
    public function Races() 
    {
        return $this->BelongsToMany('App\Race')->withPivot('prix_inscription', 'prix_premier');
    }

  

}
