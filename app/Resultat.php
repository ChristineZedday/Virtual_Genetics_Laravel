<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Resultat extends Model
{
   protected $fillable=['animal_id', 'categorie_id'] ;

   static function inscrits($elevage)
   {
      $res = DB::table('resultats')
      ->join('animaux', function ($j) use ($elevage) {
        $j->on('animal_id','animaux.id')->where('elevage_id', $elevage); })->get();

      return $res;
      
   }
}
