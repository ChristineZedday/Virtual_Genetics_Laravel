<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genotype extends Model
{
    public function Locus()
    {

        return $this->hasOne('App\locus', 'id', 'locus_id');
    }
}
