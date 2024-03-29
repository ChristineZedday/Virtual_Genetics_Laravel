<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Animal;
use App\Categorie;
use App\Evenement;
use DateTime;


class Resultat extends Pivot
{
   /*Résultat d'une compétition/cheval/catégorie voir  Competition*/
   
   protected $table = 'resultats';
   protected $fillable=['animal_id', 'categorie_id', 'evenement_id', 'competition_id', 'reprise_id'] ;
   public $incrementing = true;

   public function Animal() 
   {
     return $this->BelongsTo('App\Animal', 'animal_id');
   }


   public function Categorie() 
   {
      return $this->BelongsTo('App\Categorie', 'categorie_id');
   }

   
   public function Reprise() 
   {
      return $this->BelongsTo('App\Reprise', 'reprise_id');
   }

   public function Evenement()
   {
      return $this->BelongsTo('App\Evenement', 'evenement_id');
   }

   
   public function Competition()
   {
      return $this->BelongsTo('App\Competition', 'competition_id');
   }

   static function inscrits($elevage_id, $type = NULL)
   {
      $date =new DateTime(Gamedata::date());
      $m = $date->format('m');
      $y = $date->format('Y');
      
     if ($type == NULL) {
      $res = Resultat::whereHas('Animal', function (Builder $q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->whereHas('Evenement', function (Builder $query) use ($date) {$query->whereDate('date','>=', $date);})->get();
    }
   else {
      $res = Resultat::whereHas('Animal', function (Builder $q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->whereHas('Evenement', function (Builder $query) use ($date) {$query->whereDate('date','>=', $date);})->whereHas('Competition', function (Builder $query2) use ($type) {$query2->where('type','=', $type);})->get();
   }
     //dd($res);
      return $res;
      
   }

   public function texteClassement() 
   {
switch ($this->classement) {
   case null:
      return "non classé";
   case 1:
      return "premier";
   case 2:
      return "deuxième";
   case 3: 
      return "troisième";
   default:
    return $this->classement."ème";

}
   }

   

   static function resultats($elevage_id, $type) //Les résultats des chevaux d'un élevage
   {
      $date =new DateTime(Gamedata::date());
  
     if ($type != 'toutes') {
      
      $res = Resultat::whereHas('Animal', function ($q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->whereHas('Evenement', function (Builder $query) use ($date) {$query->whereDate('date','<=', $date);})->whereHas('Competition', function (Builder $query2) use ($type){$query2->where('type',$type);})->orderBy('evenement_id','desc')->orderBy('competition_id')->orderBy('reprise_id')->orderBy('categorie_id')->orderBy('note_synthese','desc')->get();
     }
     else {
      $res = Resultat::whereHas('Animal', function ($q) use ($elevage_id) { $q->where('elevage_id', $elevage_id);})->whereHas('Evenement', function (Builder $query) use ($date) {$query->whereDate('date','<=', $date);})->orderBy('evenement_id','desc')->orderBy('competition_id')->orderBy('reprise_id')->orderBy('categorie_id')->orderBy('note_synthese','desc')->get();
     }
     //dd($res);
      return $res;
      
   }

   static function tousResultats($type) //les résultats de tous les chevaux y compris ceux des autres joueurs et PNJ
   {
      $date =new DateTime(Gamedata::date());
      $y = $date->format('Y');
      if ($type == 'toutes') {
      $res = Resultat::whereHas('evenement', function ($q) use ($date,$y) {$q->whereDate('date','<=', $date)->whereYear('date', '>=', $y -1);})->orderBy('evenement_id','desc')->orderBy('competition_id')->orderBy('reprise_id')->orderBy('categorie_id')->orderBy('note_synthese','desc')->get();// 
        }
        else {
        $res = Resultat::whereHas('evenement', function ($q) use ($date,$y) {$q->whereDate('date','<=', $date)->whereYear('date', '>=', $y -1);})->whereHas('Competition', function (Builder $query2) use ($type){$query2->where('type',$type);})->orderBy('evenement_id','desc')->orderBy('competition_id')->orderBy('reprise_id')->orderBy('categorie_id')->orderBy('note_synthese','desc')->get();
      }
      
      return $res;
      
   }
}
