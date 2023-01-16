<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genotype extends Model
{ 
    /*Genotype: père d'allèles d'un locus donné pour un cheval donné */
    public function Locus()
    {

        return $this->hasOne('App\locus', 'id', 'locus_id');
    }

    public function Animal()
    {
        return $this->BelongsTo('App\animal');
    }
}
