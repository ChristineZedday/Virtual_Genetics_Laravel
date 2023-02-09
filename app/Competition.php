<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
   /* Une compétition est un type d'évènement sportif par exemple concours d'élevage, saut d'obstacles,  et relevant d'un niveau donné (local, régional, national...).
   Un évènement est l'instanciation d'une ou plusieurs compétitions à une date précise.

Les catégories concernent le sexe et l'âge administratif du cheval d'une part.

Les compétitions peuvent être ouvertes à une ou plusieurs races. Si Elles sont ouvertes aux "Origine Constatée", elles sont ouverte à toutes, mais ce n'est pas le cas des concours d'élevage.

Dans cette version, un seul type d'épreuve, le concours de Modèle et Allures.

Au moment de l'inscription, les animaux sont inscrits dans un évènement, pour une compétition et pour une catégorie données, directement dans la table "résultats", dans laquelle seront ajoutés la note et le classement après le concours. 
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
    public function Niveau()
    {
        return $this->BelongsTo('App\Niveau');  
    }

    
    static function RechercheparDate($m,$y) 
    {
       

        $competitions = Competition::whereHas('evenements', function ($q) use ($m,$y) {$q->whereMonth('date',$m)->whereYear('date',$y);})->get();
        return $competitions;
       
       
    }

    static function Recherche(Animal $cheval) 
    {
        //recherche la bonne catégorie et le bon niveau pour un cheval de PNJ (les joueurs doivent l'indiquer eux-mêmes!)
        $racid = $cheval->race->id;
       
        $nivid = $cheval->Performance->niveau_id;
        $competitions = Competition::whereHas('races', function ($q) use ($racid) {
            $q->where('race_id', $racid);
        })->whereHas('niveau', function ($q) use ($nivid) {
            $q->where('id', $nivid)->orWhere('open',true);
        })->get();
       
        return $competitions;
    }

    public function verification($animal)
    {
        //Vérifie que le cheval est bien incrit dans une compétition correspondant à sa race et à son niveau
    
        $race = $animal->race_id;
        $hasRace = $this->Races->find($race);
        $hasOC = $this->Races->find(1);
        
        if ($hasRace || $hasOC ) {
           if ($animal->Performance->Niveau->id == $this->Niveau->id || $this->Niveau->open)
            {return true;}
            else {return false;}
        }
        else {return false;}
    }

  

}
