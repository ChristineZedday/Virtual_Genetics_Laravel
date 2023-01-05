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
use DateTime;


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
       //so far so good
       TempsController::regCompetNPC();
       //y a un bug dans l'enregistrement PNJ
       TempsController::runCompetitions();
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
    //Note: pour les PNJ, on ne réclame pas les frais d'inscriptions
    $date =new DateTime(Gamedata::date());
    $m = $date->format('m');
    $y = $date->format('Y');
    
  
    $competiteurs = Elevage::where('role','Vendeur')->get();
  
   
    foreach($competiteurs as $competiteur) {
        //selectionner chevaux dont la note MA>11
        $chevaux = Animal::where('modele_allures', '>=', 12)->where('race_id', '!=' , 1)->where('elevage_id', $competiteur->id)->get(); //pas les OC
        //inscrire dans la bonne compétition et catégorie
      
        foreach ($chevaux as $cheval) {
           $race_id = $cheval->race_id; 
          if (strpos($cheval->sexe,'stérilisé') != false){
                break;//à déplacer quand autre que MA
            }
            if ($cheval->ageAdministratif($date->format('Y-m-d')) < 2) {
                break; //pas de compétitions poulains
            }
        $competition = Competition::whereHas('races', function ($q) use ($race_id) {
            $q->where('race_id', $race_id);
        })->first();
        if ( $competition != null) {
      //  dd($competitions); //oooKKKK!
     
        $categorie = Categorie::recherche($cheval);
     
        $categories = $competition->Categories;
        //dd ($categories);
        if ($categorie != false && $categories->contains(Categorie::Find($categorie->id))){
        $comp = $competition->id;
        
        $evenement = Evenement::whereMonth('date',$m)->whereYear('date', $y)->whereHas('competitions', function ($q) use ($comp) { $q->where('competition_id',$comp);})->first(); 
      //dd($evenement);//OK
      
     
       if ($evenement != null) {
        
            $resultat = New Resultat();
            $resultat->animal_id = $cheval->id;
            $resultat->evenement_id = $evenement->id;
            $resultat->categorie_id = $categorie->id;
           //dd($resultat);//OK;
          
            $resultat->save();
          //  $competiteur->save();     
           }
        }
        }// cat not false
        } //foreach cheval
    } //end foreach competiteurs
  
} //end function regNPC

static function runCompetitions() {
    
    $date =new DateTime(Gamedata::date());
    $m = $date->format('m');
    $y = $date->format('Y');

 
    $evenements = Evenement::whereMonth('date', $m)->whereYear('date',$y)->get(); 
//dd($evenements); //OK

  foreach ($evenements as $evenement){
    $competitions = $evenement->Competitions;
    foreach ($competitions as $competition) {
        $comp= $competition->id;
        $filter = function($query) use ($comp) {
       $query->where('competition_id', $comp);
   };
        $categories = Categorie::with(['competitions' =>$filter])->get();
        //dd($categories);//with et pas whereHas sinon 1 seule catégorie
        foreach ($categories as $categorie) {
            $categorie->run($competition->id,$evenement->id) ;  
              
            }
    }
   
    
  }

}
}





