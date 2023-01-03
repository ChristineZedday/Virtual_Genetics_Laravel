<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Animal;
use App\Categorie;
use App\Evenement;


class Resultat extends Pivot
{
   protected $table = 'resultats';
   protected $fillable=['animal_id', 'categorie_id', 'evenement_id'] ;
   public $incrementing = true;

   public function Animal() 
   {
     return $this->BelongsTo('App\Animal', 'animal_id');
   }

  

   public function Categorie() 
   {
      return $this->BelongsTo('App\Categorie', 'categorie_id');
   }

   public function Evenement()
   {
      return $this->BelongsTo('App\Evenement', 'evenement_id');
   }

   static function inscrits($elevage_id)
   {
      $date =new DateTime(Gamedata::date());
      $m = $date->format('m');
      $y = $date->format('Y');
      
     
      $res = Resultat::whereHas('Animal', function (Builder $q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->whereHas('Evenement', function (Builder $query) use ($m, $y) {$query->whereMonth('date','>=', $m)->whereYear('date', '=', $y);})->get();
     //dd($res);
      return $res;
      
   }
   static function resultats($elevage_id)
   {
      $date =new DateTime(Gamedata::date());
      $m = $date->format('m');
      $y = $date->format('Y');
      
     
      $res = Resultat::whereHas('Animal', function (Builder $q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->whereHas('Evenement', function (Builder $query) use ($m, $y) {$query->whereMonth('date','<=', $m)->whereYear('date', '<=', $y);})->get();
     //dd($res);
      return $res;
      
   }
}
