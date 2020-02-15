<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statutsFemelle extends Model
{
    protected $table = 'statutsfemelles';
    public function __construct($jument)
    {
        $this->animal_id = $jument;
       
    }
}
