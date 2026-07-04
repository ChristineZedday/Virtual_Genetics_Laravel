<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPhenotype
 */
class Phenotype extends Model
{
    /*Effet d'un ou d'une association de génotypes*/
    public function Animal()
    {
        return $this->belongsToMany('App\Animal');
    }
   

  
}
