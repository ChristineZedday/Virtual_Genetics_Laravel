<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\loci;

class Locus extends Model
{
    protected $table = 'loci';

    public function Allele()
    {
        return $this->hasMany('App\Allele');
    }
}
