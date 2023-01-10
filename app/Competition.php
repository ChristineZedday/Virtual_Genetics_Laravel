<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
   /* Une compétition est un type d'évènement sportif par exemple concours d'élevage, saut d'obstacles,  et relevant d'un niveau donné (local, régional, national...).
   Un évènement est l'instanciation d'une ou plusieurs compétitions à une date précise.

Les catégories concernent le sexe, la race et l'âge administratif du cheval d'une part, et le tpe d'épreuve, d'autre part.

Dans cette version, un seul type d'épreuve, le concours de Modèle et Allures.
    */
  

    public function Evenements()
     {
        return $this->BelongsToMany('App\Evenement');
    }

    public function Categories()
    {
        return $this->BelongsToMany('App\Categorie');
    }
    public function Races() 
    {
        return $this->BelongsToMany('App\Race');
    }
    public function Resultats()
    {
        return $this->BelongsToMany('App\Resultat');  
    }

    static function Recherche(Animal $cheval) 
    {
        $racid = $cheval->race->id;
        $competitions = Competition::whereHas('races', function ($q) use ($racid) {
            $q->where('race_id', $racid);
        })->get();
        return $competitions;
    }
    public function verification($race)
    {
        $race = Race::Find($race);
        if ($this->Races->contains('race_id',$race)) {
            dd($this->Races->contains('race_id',$race));
            return true;
        }
    }

  

}
