<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\alleles;

class Allele extends Model
{
    public function Locus()
    {
        return $this->BelongsTo('App\Locus');
    }
}
