<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genotype extends Model
{
    public function Locus()
    {
        return $this->belongsTo('App\locus', 'loci', 'id', 'locus_id');
    }
}
