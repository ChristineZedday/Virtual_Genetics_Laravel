<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;
use App\Genome;
use App\Elevage;
use App\Race;
use App\StatutMale;
use App\Pathologie;
use App\Debug;
use App\Evenement;
use App\Categorie;
use App\Competition;
use App\Resultat;


class TempsController extends Controller
{
   

    static function nextMonth($elevage)
    {
       
        $date = Gamedata::date();
        $game = Gamedata::Find(1);
        if ($date == $game->date_debut )
        {
            $animaux = Animal::where('fondateur',1)->get();
            foreach ($animaux as $animal)
            {
                Genome::readGenes($animal->id);
            }
        }
        $elevages = Elevage::where('role','Joueur')->get();
        foreach ($elevages as $elevage)
        {
            $elevage->budget +=1000;
           
            $fraisveto = 0;
            $animaux = Animal::where('elevage_id', $elevage->id)->get();
             
                foreach ($animaux as $animal) {
                    //on rajoutera plus tard un traitement différent selon la santé de l'animal
                    $fraisveto += 10;
                }
                $elevage->budget -= $fraisveto;
            $elevage->save();
        }
       
        $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
      
        $game->date_courante = $date;
        $game->save();

        // checkFemellesTerme($date);
        
        Gamedata::checkPuberes();
        Gamedata::checkSevres();
        Gamedata::VenteJeunes();
        Gamedata::retireVente();
       
        Gamedata::achete();
        Gamedata::checkMorts();
        Gamedata::checkNouveaux($date);
        
        $dateM = date('m',strtotime($date));
        if ($dateM == 01) {
            $game->lettre = Gamedata::checkLettre($date);
            $game->save();
           
          
            Gamedata::checkVieux ($date);
            Gamedata::VenteSaillies();   
        }
        if ( Gamedata::saison())
       { TempsController::reproNPC();}
       TempsController::regCompetNPC();
       //TempsController::runCompetitions();
        return redirect()->back();
    }

   


static function reproNPC()
{
    
       
            $vendeurs = Elevage::where('role','Vendeur')->get();
            foreach($vendeurs as $vendeur)
            {
                $fem = ['femelle', 'vieille femelle'];
                $juments = Animal::where('elevage_id', $vendeur->id)->whereIn('sexe',$fem)->get();

                $count = sizeof($juments);
                switch (true)
                {
                    case $count < 25:
                        $var = 3;
                    break;

                    case $count < 50:
                        $var = 4;
                    break;

                    default:
                    $var = 5;
                }
                
                foreach ($juments as $jument)
                {
                    $statut = statutsFemelle::where('animal_id',$jument->id)->first();
                   
                    if ($statut==null)
                    {
                        $statut = new StatutsFemelle();
                        $statut->animal_id = $jument->id;
                        $statut->save();
                    }
                    if ($statut->vide==true)
                    {
                        srand((float) microtime()*1000000);
                        if ($jument->sexe ='vieille femelle')
                        {
                             $var = $var +1;
                            }
                        
                        if(rand(1,$var)==1)
                        {
                            $etalons = Animal::where('elevage_id',$vendeur->id)->whereHas( 'StatutMale', function ($query) { $query->where('qualite','autorisé')->orWhere('qualite','approuvé');})->get();
                            $nb = sizeof($etalons);
                            if ($nb > 0) {
                                $choisi = rand(1,$nb) -1;
                                $etalon = $etalons[$choisi]->id;
                                ReproductionController::croisement($vendeur->id, $etalon, $jument->id);
                            }                    
                          
                        }
                    }                  
                }
               
            }    
        
}

static function regCompetNPC() 
{
    $competiteurs = Elevage::where('role','Vendeur')->orWhere('role','Acheteur')->get();
    $date =Gamedata::date();
    $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
   
   
    foreach($competiteurs as $competiteur) {
        //selectionner chevaux dont la note MA>11
        $chevaux = Animal::where('modele_allures', '>=', 12)->where('race_id', '!=' , 1)->where('elevage_id', $competiteur->id)->get(); //pas les OC
        //inscrire dans la bonne compétition et catégorie
      
        foreach ($chevaux as $cheval) {
            
            if (strpos($cheval->sexe,'stérilisé') != false){
                break;//à déplacer quand autre que MA
            }
            if ($cheval->ageAdministratif($date) < 2) {
                break; //pas de compétitions poulains
            }
          $categorie = Categorie::recherche($cheval);
          $race = $cheval->race; 
          if ($categorie != false){
         
            
            
            $categorie_id = $categorie->id;
          $competition = Competition::where(function ($q) use ($race){$q->whereDoesntHave('Races')->orWhereHas('races', function ($req) use ($race){$req->where('race_id', $race);});})->whereHas('categories', function ($query) use($categorie_id) {$query->where('categorie_id', $categorie_id);})->first();
         
       
          if ($competition != null) {
         //Une occurence de cette compétition ce mois-ci?  
        $evenement = Evenement::whereDate('date','<', $date)->where('competition_id', $competition->id)->first(); 
        $prix = $competition->race->pivot->prix_inscription;
            if (isset($evenement)) {
           
            $resultat = New Resultat;
            $resultat->animal_id = $cheval->id;
            $resultat->evenement_id = $evenement->id;
            $resultat->categorie_id = $categorie_id;
            $competiteur->budget = $prix;
          
            $resultat->save();
            $competiteur->save();     
            }
        } 
    
        }
        }
    } //end foreach competiteurs
  
} //end function regNPC
static function runCompetitions() {
    $date =Gamedata::date();
    $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
   
  $evenements = Evenement::whereDate('date','<', $date)->get();
  foreach ($evenements as $evenement){
     
     $categories = Categorie::where('evenement_id', $evenement->id)->get();
     foreach ($categories as $categorie) {
         $inscrits = Resultat::where('evenement_id', $evenement->id)->where('animal_id',$inscrits->animal_id)->get();
         $note1 = 0;
         $note2 = 0;
         $note3 = 0;
         $premier =0;
         $deuxieme = 0;
         $troisieme=0;
         foreach ($inscrits as $inscrit) {
            if ($inscrit->animal->modele_allures > $note1 ) {
                $note1 = $inscrit->animal->modele_allures;
                $premier = $inscrit->animal_id;
            }
            else if ($inscrit->animal->modele_allures > $note2 ) {
                $note2 = $inscrit->animal->modele_allures;
                $deuxieme = $inscrit->animal_id;

            }
            else if ($inscrit->animal->modele_allures > $note3 ) {
                $note3 = $inscrit->animal->modele_allures;
                $troisieme = $inscrit->animal_id;

            }

         }
         if ($premier != 0) {
         $res1 = Resultat::where('animal_id', '=', $premier);
         $res1->classement = 1;
         $res1->save();
         }
         if ($deuxieme != 0 && $inscrits->count() > 3) {
            $res2 = Resultat::where('animal_id', '=', $deuxieme);
            $res2->classement = 2;
            $res2->save();
            }
        if ($troisieme != 0 && $inscrits->count() > 6) {
            $res3 = Resultat::where('animal_id', '=', $troisieme);
            $res3->classement = 3;
            $res3->save();
            }

     }
  }
}
}





