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
   protected $fillable=['animal_id', 'categorie_id'] ;
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
      
      // $res = DB::table('resultats')
      // ->join('animaux', function ($j) use ($elevage) {
      //   $j->on('animal_id','animaux.id')->where('elevage_id', $elevage)->select('animal.nom','categorie_id', 'evenement_id'); })->get();
     
      $res = Resultat::whereHas('Animal', function (Builder $q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->get();

      // $res= Resultat::whereHasThrough('Elevage', 'Animal', function (Builder $q) use ($elevage_id) { $q->where('id', $elevage_id);})->get();
      

      return $res;
      
   }

   // static function resultats($elevage)
   // {
   //    $res = DB::table('resultats')
   //    ->join('animaux', function ($j) use ($elevage) {
   //      $j->on('animal_id','animaux.id')->where('elevage_id', $elevage); })->get();

   //    return $res;
      
   // }
}
