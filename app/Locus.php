<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\loci;
use App\Linkage;

class Locus extends Model
{
    protected $table = 'loci';
    protected $fillable = ['espece_id', 'nom', 'abbrev', 'chromosome', 'linked', 'next_linked_id', 'prev_linked_id', 'taux_recomb_next'];

    public function Allele()
    {
        return $this->hasMany('App\Allele');
    }

    public function NextLocus()
    {
        return $this->hasOne('App\Locus', 'loci', 'next_linked_id', 'id');
    }

    public function PrevLocus()
    {
        return $this->hasOne('App\Locus', 'loci', 'prev_linked_id', 'id');
    }

   
}
