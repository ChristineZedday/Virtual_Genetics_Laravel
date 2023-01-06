<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;


class Evenement extends Model
{
    protected $fillable = ['date'];

    public function Competitions () 
    {
        return $this->BelongsToMany('App\Competition');
    }

    public function Categories()
    {
        $compet = $this->Competition;
        return $compet->Categories;
    }

    public function Nom($race) 
    {
        $id = $this->id;
        $date = $this->date;
        $competition = Competition::whereHas('evenements', function ($q) use ($id) {$q->where('evenement_id',$id);})->whereHas('races', function ($query) use ($race){$query->where('race_id',$race);})->first();
       
        return $competition->nom.' '.$competition->niveau.' du '.$date;
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
    public function nextYear() {
$date = date('Y-m-d',strtotime('+12 month',strtotime($this->date)));
$evenement = New Evenement();
$competes = $this->Competitions;
$evenement->date = $date;
$evenement->save();
foreach ($competes as $comp) {
    $evenement->Competitions()->attach($comp);
}

    }
}
