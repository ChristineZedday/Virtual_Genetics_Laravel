<?php

namespace App;


use Illuminate\Database\Eloquent\Relations\Pivot;

class RacesPossibles extends Pivot
{
    public $incrementing = true;
    protected $table ='races_possibles';

   
}
