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
use App\Budget;

class Reprise extends Model
{
    public function Competitions() 
    {
        return $this->BelongsToMany('App\Competition');
    }

    public function Run($evenement, $competition, $categorie) 
    {
        $inscrits = Resultat::where('evenement_id', $evenement->id)->where('categorie_id', $categorie->id)->where('competition_id', $competition->id)->where('reprise_id', $this->id)->get();

        foreach ($inscrits as $inscrit) {
            $elevage = $inscrit->animal->elevage;
            if ($elevage->role == 'Joueur') {
            $frais = $elevage->fraisTransport($inscrit->animal, $evenement->distance);
                if (!$frais ) {
                   
                    $inscrits->forget($inscrit->id);
                    // faut les sous pour y aller!
                }
            }   
        }   

        
            $malusTaille = 0;
            if ($categorie->libelle == 'cheval ou poney') {
                $taille = $inscrit->animal->taille();
                if ($taille < 140) {
                    $malusTaille =  140 - $taille;
                }
            }
            $malusSante = 0;
            $sante = $inscrit->performance->sante;
            if ($sante != 100) {
                $malusSante = 100 - $sante;
            }

        $prix = $competition->prix_premier;
        $nb = $inscrits->count();
    
        $classes = ($nb%3==0) ? (int)($nb/3) : (int) ($nb/3) +1;
        $notes = [];
       //dd('inscrits: '.$nb.' classés: '.$classes);
        foreach ($inscrits as $inscrit) {
            $animal = $inscrit->animal;
    
             $notes[$animal->id] = 2  * ($animal->modele_allures   + $animal->capacite_dressage_additive)  + $animal->capacite_apprentissage_additive + 
             ($animal->Performance->niveau_dressage * $animal->capacite_apprentissage_additive)/100 -
             $this->niveau_num_global - $malusTaille  - $malusSante + 
             random_int(-20,20);

             if ( $notes[$animal->id] > 100) {
                $notes[$animal->id] = 100;
             }
       
        $inscrit->note_synthese = $notes[$animal->id];
        $inscrit->save();
        }  
    
        //dd($inscrit);//ouais!!
    
       arsort($notes); //tri décroissant des valeurs
       $notes = array_slice($notes,0,$classes,true);//on garde les classés
      
       $i = 1;
       foreach ($notes as $key => $value) { //pour tous les classés
            $res= Resultat::where('evenement_id',$evenement->id)->where('competition_id', $competition->id)->where('categorie_id', $categorie->id)->where('reprise_id', $this->id)->where('animal_id', $key)->first();
        
            $res->classement = $i;
            $res->save();
            $animal = Animal::find($key);
            $note = $notes[$key];
            $perf = $animal->Performance;
            if ($note >= 60) {
                switch($i) {
                    case 1:
                        $perf->pourcent_niveau += 40;
                        break;
                    case 2:
                        $perf->pourcent_niveau += 30;
                        break;
                    case 3:
                        $perf->pourcent_niveau += 20;
                        break;
                    default:
                        $perf->pourcent_niveau +=10;
                    }
                $perf->save();
                $perf->upgradeDressage();
                $perf->save();
            
       
                $elevage = Elevage::Find($animal->elevage_id);

                if ($elevage->role == 'Joueur' ) {
                //Pas de dotations pour les notes inférieures à 60%!
                if ($i == 1 ) {
                    // prix_premier, mettre en f compète et pas race;
                $elevage->Budget()->gainsConcours($prix);
                }
                else  {
                    //prix_premier/$i);
                $elevage->Budget()->gainsConcours((int) ($prix/$i));
                }
                }
            }
        $i++;
       
        }
    }

    public function verification($animal, $evenement)
    {
        
        //Vérifie que le cheval est bien incrit dans une reprise correspondant à son niveau, et pas deux fois dans la m^me
        $niveau = $animal->Performance->niveau_dressage;
        $deja = Resultat::where('animal_id', $animal->id)->where('evenement_id', $evenement)->where('reprise_id',$this->id)->first();
       
      
        if ($niveau != $this->niveau_num_global ) {
           
            return "Reprise pas du bon niveau ";
        }
        else if ($deja != NULL) {
            return "Déjà inscrit dans cette reprise";
        }
      
        else {
      
            return "OK";
        }
    }
    
static function liste() {
    return Reprise::all()->sortBy('niveau_num_global');
}
  

}
