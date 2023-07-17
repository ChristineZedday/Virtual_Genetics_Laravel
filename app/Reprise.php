<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Elevage;
use App\Animal;
use App\Competition;
use App\Evenement;
use App\Categorie;
use App\Performance;
use App\Resultat;

class Reprise extends Model
{
    public function Competitions() 
    {
        return $this->BelongsToMany('App\Competition');
    }

    public function Run($evenement, $competition, $categorie) 
    {
        $inscrits = Resultat::where('evenement_id', $evenement->id)->where('categorie_id', $categorie->id)->where('competition_id', $competition->id)->where('reprise_id', $this->id)->get();

        $prix = $competition->prix_premier;
        $nb = $inscrits->count();
    
        $classes = ($nb%3==0) ? (int)($nb/3) : (int) ($nb/3) +1;
        $notes = [];
       //dd('inscrits: '.$nb.' classés: '.$classes);
        foreach ($inscrits as $inscrit) {
            $animal = $inscrit->animal;
    
             $notes[$animal->id] = 2  * ($animal->modele_allures   + $animal->capacite_dressage_additive)  + $animal->capacite_apprentissage_additive ;
       
        $inscrit->note_synthese = $notes[$animal->id];
        $inscrit->save();
    }  
    
        //dd($inscrit);//ouais!!
    
       arsort($notes); //tri décroissant des valeurs
       $notes = array_slice($notes,0,$classes,true);//on garde les classés
      
       $i =1;
       foreach ($notes as $key => $value) { //pour tous les classés
        $res= Resultat::where('evenement_id',$evenement->id)->where('competition_id', $competition->id)->where('categorie_id', $categorie->id)->where('reprise_id', $this->id)->where('animal_id', $key)->first();
        //dd($res);//c'est ça
        $res->classement = $i;
        $res->save();
        $animal = Animal::find($key);
        $perf = $animal->Performance;
        
                switch($i) {
                    case 1:
                        $perf->pourcent_niveau += 20;
                        break;
                    case 2:
                        $perf->pourcent_niveau += 15;
                        break;
                    default:
                        $perf->pourcent_niveau +=10;
                    }
    
        $perf->save();
      
        $perf->upgradeDressage();
    
        $animal = Animal::Find($key);
        //dd($animal->nomComplet());// Chouette!
        $elevage = Elevage::Find($animal->elevage_id);
       
        if ($i == 1) {
            $elevage->budget += $prix; // prix_premier, mettre en f compète et pas race;
        }
        else  {
            $elevage->budget += (int) ($prix/$i);//prix_premier/$i);
        }
        $elevage->save();
        //dd($elevage);//OK
        $i++; }
    
    
    }

    public function verification($animal): bool
    {
        
        //Vérifie que le cheval est bien incrit dans une reprise correspondant à son niveau
        $niveau = $animal->Performance->niveau_dressage;
      
        if ($niveau == $this->niveau_num_global ) {
            return true;
        }
        else {
            return false;
        }
    
        
       
    }
    

  

}
