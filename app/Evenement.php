<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;


class Evenement extends Model
{
    protected $fillable = ['date', 'competition_id'];

    public function Competitions () 
    {
        return $this->BelongsToMany('App\Competition');
    }

    public function Categories()
    {
        $compet = $this->Competition;
        return $compet->Categories;
    }

    public function Nom() 
    {
        
        return $this->Competition->nom.' '.$this->Competition->niveau.' du '.$this->date;
    }
    static function isSameMonth($d1, $d2) 
    {
        $d1 = strtotime($d1);
        $m1 = date(m,$d1);
        $y1 = date(y,$d1);

        $d2 = strtotime($d2);
        $m2 = date(m,$d2);
        $y2 = date(y,$d2);

        if ($m1 == $m2->m && $y1 ==  $y2 ) {
            
            return true;
        }
        else {
            return false;
        }
    }
}
