<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use App\Evenement;
use App\Performance;
use App\StatutFemelle;
use App\Budget;

/**
 * @mixin IdeHelperCategorie
 */
class Categorie extends Model
{
   /*Catégorie (liée au sexe, âge...) dans laquelle peut concourrir un cheval. Voir à Compétitions pour le fonctionnement. */

  
   
/**Fonction qui vérifie qu'un cheval de joueur est inscrit dans la bonne catégorie */
   public function verification($animal, $evenement, $competition, $reprise = NULL) 
   {
   
    $date = $evenement->date;
    $competition = Competition::Find($competition);

    $results = Resultat::Where('animal_id', $animal->id)->get();
    $count = 0;
    foreach ($results as $result) {

        $event = Evenement::Find($result->evenement->id);
        if ($event->date === $date) {
            $count ++;
           if ($event != $evenement){
            return 'Inscrit ailleurs à cette date'; //déjà inscrit ailleurs
           }
           else if (stripos($competition->type,'Allures')) {
            return 'Déjà inscrit';
           }
           if ($count > 1) {
            return 'Déjà inscrit dans 2 épreuves ce jour'; //max 2 épreuves
           }
        }
    }
   /* if (!stripos($competition->type,'Allures') && $animal->Performance->niveau_dressage != $reprise->niveau) {

    }*/
   if (stripos($competition->type,'Allures') && $animal->Performance->qualifie && $competition->qualificatif) {
    return 'Hors Concours';
   }

   if (stripos($competition->type,'Allures') && !$animal->Performance->qualifie  && !$competition->qualificatif) {
    return 'Non qualifié';
   }
   if ($animal->StatutFemelle && $animal->StatutFemelle->terme == $date) {
    return 'Jument à terme ce mois-là';
   }

   if (!stripos($competition->type,'Allures') && $animal->StatutFemelle && (!$animal->StatutFemelle->vide || $animal->seraSuiteeAu($date) ))
        {
            return 'Jument pleine ou suitée';
        }
    if (!stripos($competition->type,'Allures') && $animal->Performance->niveau_dressage < $reprise->niveau_num_global)
        {
            return 'Non qualifié pour ce niveau';
        }
     if (!stripos($competition->type,'Allures') && $animal->Performance->niveau_dressage > $reprise->niveau_num_global)
        {
            return 'Hors concours';
        }
    if ($this->suitee && ($animal->StatutFemelle && !$animal->seraSuiteeAu($date))) {
           
            return 'Pas suitée, ou le poulain sera sevré à cette date';
        }
    if (!$this->suitee && ($animal->StatutFemelle && $animal->seraSuiteeAu($date))) {
           
            return 'Jument ou pouliche suitée à la date du concours';
        }

    $race = $competition->race_id;
    $poneys = $competition->tous_poneys_sport;
    $chevaux = $competition->tous_chevaux_sport;
    $isPony = $animal->race->poney_sport;
    $isHorse = $animal->race->cheval_sport;

    if ($poneys && $isPony ) {
                return 'OK';
            }
    if ($chevaux && $isHorse ) {
                return 'OK';
            }
      
    if (NULL != $race && $animal->race_id != $race) {
       
                return 'Cheval pas de la bonne race pour cette compétition';
                }
    if ($poneys && !$isPony ) {
                return 'Compétition réservée aux poneys de sport';
            }
    if ($chevaux && !$isHorse ) {
                return 'Compétition réservée aux chevaux de sport';
            }

    if ($animal->race_id == 17) {
            return 'Les Origine Non Constatée ne sont pas autorisés en compétition';
        }
  
        if  ($animal->ageAdministratif ($date) < $this->age_min) {

                return 'trop jeune';
            }
        if ($this->age_max != NULL && $this->age_max < $animal->ageAdministratif($date)) {
                
                return 'trop vieux'; 
            }
       
        if ($this->sexe !== NULL) { 
            if ($this->sexe != $animal->sexe) {
                return 'Avez-vous bien regardé ses organes génitaux?';
        }
    }

        if ($this->taille_min != null && $this->taille_min > $animal->taille()) {
         
            return 'T\'es bien trop petit mon ami, t\'es bien trop petit, dame oui';
    }

    if ($this->taille_max != null && $this->taille_max < $animal->taille()) {
       
        return 'trop grand pour cette catégorie';
    }


    return 'OK';

}
        
    

   /**Fonction qui cherche la catégorie  pour un cheval de PNJ */
   public static function recherche(Animal $cheval) 
   {
    $date =Gamedata::getDate();
    $age = $cheval->ageAdministratif($date);
   
   if ($cheval->sexe === 'm') {
    $autorise = 0;
    if ($cheval->StatutMale) {
        if ($cheval->StatutMale->qualite == "autorisation sanitaire"
        || $cheval->StatutMale->qualite == "approuvé") {
            $autorise = 1;
        }
    }
        $categorie = Categorie::where('sexe', $cheval->sexe)->where('age_min','<=', $age)->where('age_max', '>=', $age)->where(function ($q) use ($autorise){$q->whereNull('autorise')->orWhere('autorise', $autorise);})->first(); //éligibilité cheval, puis chercher les évènements avec ces cat
        //)
       

   }
   else {
    $suitee = 0;
    if ($cheval->StatutFemelle) {
        if ($cheval->StatutFemelle->suitee){
        $suitee = 1;
        }
    }
        $categorie = Categorie::where('sexe', $cheval->sexe)->where('age_min','<=', $age)->where('age_max', '>=', $age)->where(function ($q) use ($suitee){$q->whereNull('suitee')->orWhere('suitee', $suitee);})->first(); //éligibilité cheval, puis chercher les évènements avec ces cat
        //)

   }
   
   
 if (isset($categorie)) {
  return $categorie;
 }
 else {
     return false;
 }
}

public static function rechercheDressage(Animal $cheval) 
   {
    $taille = $cheval->taille();
    return Categorie::whereNotNull('taille_max')->where('taille_max', '>=', $taille)->where('taille_min','<=', $taille)->get();
   
   }

public function run($competition, $evenement) {
    //Modèle et Allures
    $inscrits = Resultat::where('evenement_id', $evenement->id)->where('categorie_id', $this->id)->where('competition_id', $competition->id)->with(['Animal.Elevage', 'Animal.StatutMale','Animal.StatutFemelle'])->get();
  
    $nb = $inscrits->count();

    foreach ($inscrits as $inscrit) {
        $elevage = $inscrit->Animal->Elevage;
        if ($elevage->role == 'Joueur') {
            $frais = $elevage->fraisTransport($inscrit->animal, $evenement->distance);
            if (!$frais ) {
                $inscrits->forget($inscrit->id);
                // faut les sous pour y aller!
            }
        }   
    }

    $prix = $competition->prix_premier;
  
    //ça marche quand il ya des animaux du bon âge
    $classes = ($nb%3==0) ? (int)($nb/3) : (int) ($nb/3) +1;
   

    $notes = [];
  
    foreach ($inscrits as $inscrit) {
        $animal = $inscrit->Animal;
        if ($competition->type == 'Concours Modèle et Allures Dressage')
        {
        $notes[$animal->id] = ($animal->modele_allures*2  + $animal->capacite_dressage_additive)/3 + rand(-1000,1000)/1000; 
        }
        else
           { $notes[$animal->id] = $animal->modele_allures  + rand(-1000,1000)/1000; //éviter les ex-aequo
        }
        if ($notes[$animal->id] > 20) {
            $notes[$animal->id] = 20;
        }
          
        $inscrit->note_synthese = $notes[$animal->id];
        if ($inscrit->note_synthese >= 15 &&    $animal->StatutMale != NULL) {
              $animal->StatutMale->setModele15();
        if ($animal->StatutMale->qualite != 'approuvé') {
          
            $animal->StatutMale->approuveEtalons();
        }
         if ($competition->id >=79 && $competition->id <=82) {
            $animal->StatutMale->labellise_dressage = true;
            
        }
    }
       
        if ($inscrit->note_synthese >= 12 &&    $animal->StatutFemelle != NULL) {
            if ($animal->race->confirmation_juments) {$animal->StatutFemelle->confirme($animal);
                if ($competition->id == 43 ){
                    $incrit->StatutFemelle->labelliseSF();
                }
            
            }
            if ($competition->id >=79 && $competition->id <=82) {
            $animal->StatutFemelle->labellisee_dressage = true;
        }
    }
        $inscrit->save();
    }

   arsort($notes, SORT_NUMERIC); //tri décroissant des valeurs
   $notes = array_slice($notes,0,$classes,true);//on garde les classés
  
   $i =1;
   foreach ($notes as $key => $value) { //pour tous les classés
        $res= Resultat::where('evenement_id',$evenement->id)->where('competition_id', $competition->id)->where('categorie_id', $this->id)->where('animal_id', $key)->first();
    
        $res->classement = $i;
        $res->save();
        $animal = Animal::find($key);
        if (!$competition->qualificatif && $animal->StatutMale != NULL ) {
        
            $animal->StatutMale->setClasseNat();
        
            $animal->StatutMale->approuveEtalons();
            if ($animal->StatutMale->qualite == 'approuvé'   && ($animal->race->poney_sport || $animal->race->cheval_sport)) {
                $animal->StatutMale->setApprouvePFS(); 
            }
        }
        if ($competition->qualificatif) {
       
            $perf = $animal->Performance;
            $perf->qualifieMA($i, $value); 
            
        }

        $elevage = Elevage::Find($animal->elevage_id);
    
        if ($elevage->role == 'Joueur') {
            if ($i == 1 ) {
       
            $elevage->Budget()->gainsConcours($prix);
        }
        else  {
       //prix_premier/$i);
            $elevage->Budget()->gainsConcours((int) ($prix/$i));
        }
      
        }
    
        $i++; 
    } //animaux classés
}  
}

   
