<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Race;

/**
 * @mixin IdeHelperCompetition
 */
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

    public function Reprises()
    {
        return $this->BelongsToMany('App\Reprise');
    }
    public function Race() 
    {
        return $this->hasOne('App\Race');
    }
    public function Resultats()
    {
        return $this->BelongsToMany('App\Resultat');  
    }
    
   

    public function listeCategories()
    {
        if ($this->type == 'Modèle et Allures Tous') {
            return Categorie::whereIn('nom', ['mâles 1 an', 'pouliches 1 an', 'mâles 2 ans', 'pouliches 2 ans', 'mâles 3 ans', 'pouliches 3 ans', 'étalons', 'juments', 'juments suitées'])->get();
        }
         if ($this->type == 'Modèle et Allures jeunes' || $this->type == 'Modèle et Allures Dressage' ) {
            return Categorie::whereIn('nom', ['mâles 2 ans', 'pouliches 2 ans', 'mâles 3 ans', 'pouliches 3 ans'])->get();
        }
        if ($this->type == 'Modèle et Allures mâles' ) {
            return Categorie::whereIn('nom', ['mâles 2 ans', 'mâles 3 ans', 'étalons'])->get();
        }
         if ($this->type == 'Modèle et Allures femelles' ) {
            return Categorie::whereIn('nom', ['femelles 2 ans', 'femelles 3 ans', 'juments', 'juments suitées'])->get();
        }
         if ($this->type == 'Dressage poneys' ) {
            return Categorie::whereIn('nom', ['Poney A ou B', 'Poney C', 'Poney D'])->get();
         }
         if ($this->type == 'Dressage poneys E' ) {
            return Categorie::where('nom', 'Poney E')->get();
         }
         if ($this->type == 'Dressage chevaux' ) {
            return Categorie::where('nom', 'Cheval ou Poney')->get();
         }
    }

    
    static function RechercheparDate($m,$y) 
    {
       

        $competitions = Competition::withWhereHas('evenements', function ($q) use ($m,$y)
            {$q->whereMonth('date',$m)->whereYear('date',$y);})
            ->with(['Reprises'])->get();
        return $competitions;
       
       
    }

    static function Recherche(Animal $cheval) 
    {
        //recherche la bonne catégorie et le bon niveau pour un cheval de PNJ (les joueurs doivent l'indiquer eux-mêmes!)
        $racid = $cheval->race->id;
       
        $qualif = $cheval->Performance->qualifie;
        if ($qualif) {
             $competitions = Competition::where('type', 'LIKE', 'Modèle et Allures%')->where('race', $racid)
            ->where('qualificatif',0)->get();
        }
        else {
             $competitions = Competition::where('type', 'LIKE', 'Modèle et Allures%')->where('race', $racid)
            ->where('qualificatif',1)->get();
        }
        return $competitions;
    }

   /* public function verification($animal, $evenement, $reprise=NULL)
    
    {
        dd("compétition");
        if ($animal->statut_administratif != 'enregistré') {
            return 'Votre cheval doit être enregistré!';
        }
        if ($animal->race_id == 17) {
            return 'Pas de compétition officielle pour les ONC!';
        }
      if ($this->race_id != NULL && $this->race_id != $animal->race_id) {
        return "cheval pas de la bonne race";
      }
        if ($this->tous_poneys_sport && !$animal->race->poney_sport) {
        return "Pas une race de poney de sport";
      }
        if ($this->tous_chevaux_sport && !$animal->race->cheval_sport) {
        return "Pas une race de cheval de sport";
      }
           
            if (stripos($this->type,'Allures')) {  
              
                if (!$animal->Performance->qualifie  &&  !$this->qualificatif )
                
                {return 'Non qualifié';}

                else if ($animal->Performance->qualifie  &&  $this->qualificatif )
                
                {return 'Hors Concours';}

                else { return "OK";}
            }
            else {
              
                $msg = $reprise->verification($animal, $evenement );
      
                return $msg;
            }
        }
        */
    
    
  

}
