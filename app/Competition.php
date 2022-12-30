<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
   /* Une compétition est un type d'évènement sportif par exemple concours d'élevage, saut d'obstacles, rassemblant une ou plusieurs épreuves (ex combiné CSO Dressage) et relevant d'un niveau donné (local, régional, national...).
   Un évènement est l'instanciation de cette compétition à une date précise.

Les catégories concernent le sexe, la race et l'âge administratif du cheval d'une part, et le tpe d'épreuve, d'autre part.

Dans cette version, un seul type d'épreuve, le concours de Modèle et Allures.
    */
  

    public function Evenement()
     {
        return $this->HasMany('App\Evenement');
    }

    public function Categories()
    {
        return $this->BelongsToMany('App\Categorie');
    }
    public function Races() 
    {
        return $this->BelongsToMany('App\Race')->withPivot('prix_inscription', 'prix_premier');
    }

  

}
