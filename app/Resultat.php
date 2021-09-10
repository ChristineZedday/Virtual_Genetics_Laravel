<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Animal;
use App\Categorie;
use App\Evenement;

class Resultat extends Model
{
   protected $fillable=['animal_id', 'categorie_id'] ;

   public function Animal() 
   {
      $animal = Animal::find($this->animal_id);
   }

   public function Categorie() 
   {
      $catogorie = Animal::find($this->categorie_id);
   }

   public function Evenement()
   {
      $evenement = Evenement::find($this->evenement_id);
   }

   static function inscrits($elevage)
   {
      $res = DB::table('resultats')
      ->join('animaux', function ($j) use ($elevage) {
        $j->on('animal_id','animaux.id')->where('elevage_id', $elevage); })->get();

      return $res;
      
   }

   static function resultats($elevage)
   {
      $res = DB::table('resultats')
      ->join('animaux', function ($j) use ($elevage) {
        $j->on('animal_id','animaux.id')->where('elevage_id', $elevage); })->get();

      return $res;
      
   }
}
