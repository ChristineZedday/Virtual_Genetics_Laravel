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
    $date =new DateTime(Gamedata::date());
    $m = $date->format('m');
    $y = $date->format('Y');
    
  
    $competiteurs = Elevage::where('role','Vendeur')->orWhere('role','Acheteur')->get();
  
   
    foreach($competiteurs as $competiteur) {
        //selectionner chevaux dont la note MA>11
        $chevaux = Animal::where('modele_allures', '>=', 12)->where('race_id', '!=' , 1)->where('elevage_id', $competiteur->id)->get(); //pas les OC
        //inscrire dans la bonne compétition et catégorie
      
        foreach ($chevaux as $cheval) {
            
          if (strpos($cheval->sexe,'stérilisé') != false){
                break;//à déplacer quand autre que MA
            }
            if ($cheval->ageAdministratif($date->format('Y-m-d')) < 2) {
                break; //pas de compétitions poulains
            }
          $categorie = Categorie::recherche($cheval);
          $race = $cheval->race; 
         //dd($categorie);//so far so good
          if ($categorie != false){
          $catid = $categorie->id;
          $competitions = Competition::where(function ($q) use ($race)
            {
            $q->WhereHas('races', function ($req) use ($race)  {
                $req->where('race_id', $race);
                })->orWhereDoesntHave('races');
            })->get();/*->whereHas('categories', function ($query) use($catid) {$query->where('categorie_id', $catid);})->first();whereDoesntHave('races');})  
            */
         //dd($competitions); //problème avec les races
       
          if ( !empty($competitions)) {
         //Une occurence d'une de ces compétition ce mois-ci? 
         foreach ($competitions as $competition) {
        $evenements = Evenement::whereMonth('date',$m)->whereYear('date', $y)->where('competition_id', $competition->id);
        $evenement =$evenements->first(); 
      //dd($evenement);//OK
      if (!empty($competition->races)) {
         //   $prix = $competition->race->pivot->prix_inscription;
         }
        else {
            $prix =50;
       }
     
       if ($evenement != null) {
        
            $resultat = New Resultat();
            $resultat->animal_id = $cheval->id;
            $resultat->evenement_id = $evenement->id;
            $resultat->categorie_id = $catid;//verifier qu'elle est proposée!
           // dd($resultat);//OK;
          
            $resultat->save();
            $competiteur->save();     
           }
        } // end foreach compet
          }//end compets pas vide
        }
        }
    } //end foreach competiteurs
  
} //end function regNPC

static function runCompetitions() {
    
    $date =new DateTime(Gamedata::date());
    $m = $date->format('m');
    $y = $date->format('Y');

 
    $evenements = Evenement::whereMonth('date', $m)->whereYear('date',$y)->get(); 
//dd($evenements); //OK
  foreach ($evenements as $evenement){
    

     $evid= $evenement->competition->id;
     $filter = function($query) use ($evid) {
    $query->where('competition_id', $evid);
};
     $categories = Categorie::with(['competitions' =>$filter])->get();
     //dd($categories);//with et pas whereHas sinon 1 seule catégorie
     foreach ($categories as $categorie) {
     $categorie->run($evenement->id) ;  
       
     }
  }
}
}





