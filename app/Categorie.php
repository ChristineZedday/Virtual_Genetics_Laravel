<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   public function Concours()
   {
       return $this->BelongsTo('App\Concours');
   }
}
