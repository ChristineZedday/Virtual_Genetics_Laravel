<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\alleles;

class Allele extends Model
{
    /*Chaque gène ou locus a plusieurs allèles possibles*/
    public function Locus()
    {
        return $this->BelongsTo('App\Locus');
    }
}
