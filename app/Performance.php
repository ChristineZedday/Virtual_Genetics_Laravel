<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPerformance
 */
class Performance extends Model
{
    public function Animal()
    {
        return $this->belongsTo('App\Animal');  
    }
    public function Niveau()
    {
        return $this->belongsTo('App\Niveau');  
    }

    static function initialize($animalid)
    {
        $perf = new Performance();
        $perf->animal_id = $animalid;
        $perf->sante = 100;
        $perf->niveau_id = 1;
        $perf->niveau_dressage = 1;
        $perf->pourcent_niveau = 0;
        $perf->save();
        return ($perf);
    }
  
    public function upgradeDressage()
    {
        if ($this->pourcent_niveau >= 90) {
            $this->niveau_dressage ++;
            $this->pourcent_niveau = 0;
        }
    }

    public function upgrade($classement, $note, $libelle)
    {
        if ($this->niveau_id < 4)  {
         
            if ($this->niveau_id == 1 || $classement < 4 || $note >= 15) {
                $this->niveau_id ++;
                $this->save();
                if ($this->niveau_id == 2 && $note >= 15 && ($libelle == 'départemental' || $libelle == 'régional')) {
                    $this->niveau_id ++;
                    $this->save(); //passer direct en national
                }
            }
       
        }
    }

    public function IDR() {
        $age = $this->animal->ageAdministratif();
        switch ($age) {
            case 4:
                if ($this->niveau_dressage == 1) {
                    
                    return $this->pourcent_niveau +10;
                }
                else {
                    return 120;
                }
                break;
            case 5:
                switch($this->niveau_dressage) {
                    case 1:
                        return $this->pourcent_niveau;
                    case 2:
                        return 80 + $this->pourcent_niveau/5;
                    case 3:
                        return 96 + $this->pourcent_niveau/5;
                    case 4:
                        return 112 + $this->pourcent_niveau/5;
                    case 5:
                        return 128 + $this->pourcent_niveau/5;
                    case 6:
                        return 144 + $this->pourcent_niveau/5;
                    case 7:
                        return 160 + $this->pourcent_niveau/5;
                    case 8:
                        return 176 + $this->pourcent_niveau/5;
                    default:
                        return 200;        
                }
                break;
                case 6:
                switch($this->niveau_dressage) {
                    case 1:
                        return $this->pourcent_niveau/2;
                    case 2:
                        return 40 + $this->pourcent_niveau/3;
                    case 3:
                        return 70 + $this->pourcent_niveau/4;
                    case 4:
                        return 90 + $this->pourcent_niveau/5;
                    case 5:
                        return 108 + $this->pourcent_niveau/5;
                    case 6:
                        return 124 + $this->pourcent_niveau/5;
                    case 7:
                        return 132 + $this->pourcent_niveau/5;
                    case 8:
                        return 148 + $this->pourcent_niveau/5;
                    case 9:
                        return 164 + $this->pourcent_niveau/5;
                    case 10:
                        return 180 + $this->pourcent_niveau/5;
                    default:
                        return 200;        
                }
                break;
                 case 7:
                switch($this->niveau_dressage) {
                    case 1:
                        return $this->pourcent_niveau/4;
                    case 2:
                        return 20 + $this->pourcent_niveau/5;
                    case 3:
                        return 36 + $this->pourcent_niveau/5;
                    case 4:
                        return 52 + $this->pourcent_niveau/5;
                    case 5:
                        return 68 + $this->pourcent_niveau/5;
                    case 6:
                        return 84 + $this->pourcent_niveau/5;
                    case 7:
                        return 90 + $this->pourcent_niveau/5;
                    case 8:
                        return 106 + $this->pourcent_niveau/5;
                    case 9:
                        return 122 + $this->pourcent_niveau/5;
                    case 10:
                        return 138 + $this->pourcent_niveau/5;
                    case 11:
                        return 154 + $this->pourcent_niveau/5;
                    case 12:
                        return 170+ $this->pourcent_niveau/5;
                    case 13:
                        return 186 + $this->pourcent_niveau/5;
                    case 14:
                        return 200;
                    default:
                        return 200;        
                }
                break;
                  case 8:
                switch($this->niveau_dressage) {
                    case 1:
                        return $this->pourcent_niveau/8;
                    case 2:
                        return 10 + $this->pourcent_niveau/6;
                    case 3:
                        return 24 + $this->pourcent_niveau/6;
                    case 4:
                        return 38 + $this->pourcent_niveau/6;
                    case 5:
                        return 52 + $this->pourcent_niveau/6;
                    case 6:
                        return 66 + $this->pourcent_niveau/6;
                    case 7:
                        return 80 + $this->pourcent_niveau/6;
                    case 8:
                        return 94 + $this->pourcent_niveau/6;
                    case 9:
                        return 108 + $this->pourcent_niveau/6;
                    case 10:
                        return 112 + $this->pourcent_niveau/6;
                    case 11:
                        return 126 + $this->pourcent_niveau/6;
                    case 12:
                        return 140+ $this->pourcent_niveau/6;
                    case 13:
                        return 154 + $this->pourcent_niveau/6;
                    case 14:
                        return 168 + $this->pourcent_niveau/6;
                    case 15:
                        return 168 + $this->pourcent_niveau/6;
                    case 16:
                        return 182 + $this->pourcent_niveau/6;
                    case 17:
                        return 190;
                    case 18:
                        return 200;
                    default:
                        return 200;        
                }
                break;
                 case  9:
                 case 10:
                switch($this->niveau_dressage) {
                    case 1:
                        return 5;
                    case 2:
                        return 10;
                    case 3:
                        return 15;
                    case 4:
                        return 20;
                    case 5:
                        return 30 + $this->pourcent_niveau/8;
                    case 6:
                        return 40 + $this->pourcent_niveau/8;
                    case 7:
                        return 50 + $this->pourcent_niveau/8;
                    case 8:
                        return 60 + $this->pourcent_niveau/8;
                    case 9:
                        return 70 + $this->pourcent_niveau/8;
                    case 10:
                        return 80 + $this->pourcent_niveau/8;
                    case 11:
                        return 90 + $this->pourcent_niveau/8;
                    case 12:
                        return 100+ $this->pourcent_niveau/8;
                    case 13:
                        return 110 + $this->pourcent_niveau/8;
                    case 14:
                        return 120 + $this->pourcent_niveau/8;
                    case 15:
                        return 130 + $this->pourcent_niveau/8;
                    case 16:
                        return 140 + $this->pourcent_niveau/8;
                    case 17:
                        return 150 + $this->pourcent_niveau/8;
                    case 18:
                        return 160 + $this->pourcent_niveau/8;
                    case 19:
                        return 170 + $this->pourcent_niveau/8;
                    default:
                        return 190 + $this->pourcent_niveau/8 ;        
                }
                break;
                  default:
                
                switch($this->niveau_dressage) {
                    case 1:
                        return 5;
                    case 2:
                        return 10;
                    case 3:
                        return 15;
                    case 4:
                        return 20;
                    case 5:
                        return 30;
                    case 6:
                        return 35 + $this->pourcent_niveau/8;
                    case 7:
                        return 45 + $this->pourcent_niveau/8;
                    case 8:
                        return 55 + $this->pourcent_niveau/8;
                    case 9:
                        return 65 + $this->pourcent_niveau/8;
                    case 10:
                        return 75 + $this->pourcent_niveau/8;
                    case 11:
                        return 85 + $this->pourcent_niveau/8;
                    case 12:
                        return 95 + $this->pourcent_niveau/8;
                    case 13:
                        return 105 + $this->pourcent_niveau/8;
                    case 14:
                        return 115 + $this->pourcent_niveau/8;
                    case 15:
                        return 125 + $this->pourcent_niveau/8;
                    case 16:
                        return 135 + $this->pourcent_niveau/8;
                    case 17:
                        return 145 + $this->pourcent_niveau/8;
                    case 18:
                        return 155 + $this->pourcent_niveau/8;
                    case 19:
                        return 165 + $this->pourcent_niveau/8;
                    default:
                        return 175 + $this->pourcent_niveau/8 ;        
                }
                break;
        }

    }
}
