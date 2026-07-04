<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheval extends Model
{
    use HasFactory;

       public function Elevage()
    {
        return $this->BelongsTo('App\Elevage');
    }
}
