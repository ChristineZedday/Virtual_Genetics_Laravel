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
use App\Performance;
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
                Performance::initialize($animal->id);
            }
        }
     
        $elevages = Elevage::where('role','Joueur')->get();
        foreach ($elevages as $elevage)
        {
            $elevage->budget +=1000;
            $elevage->budget -= $elevage->calculeFrais();
           
           
            $elevage->save();
        }
       
        $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
      
        $game->date_courante = $date;
        $game->terres = false;
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
                        $var = 2;
                    break;

                    case $count < 50:
                        $var = 3;
                    break;

                    default:
                    $var = 4;
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

    $competitions = Competition::RechercheParDate($m,$y);
    foreach ($competitions as $comp) {
        $races = $comp->Races;
        $compid = $comp->id;
        $races = $races->modelKeys();
        $niveau = $comp->Niveau->id;
        $evenement = Evenement::whereMonth('date',$m)->whereYear('date',$y)->whereHas('competitions', function ($q) use ($compid){$q->where('competition_id',$compid);})->first();
        

        $engageables = Animal::whereHas('elevage' , function ($q) {$q->where('role','Vendeur');})->where('modele_allures', '>=', 12)->whereIn('race_id', $races)->get();
//bug: marche que niveau 1
//dd($engageables);
        foreach ($engageables as $cheval) {
          if (is_null ($cheval->Performance)) {
            $cheval->Performance = Performance::initialize($cheval->id);
       
          }
 
            if ($cheval->Performance->niveau_id != $niveau){
                continue;//rajouter plus tard open
            }
          
            if (strpos($cheval->sexe,'stérilisé') != false){
                  continue;//à déplacer quand autre que MA
              }
            if ($cheval->ageAdministratif($date->format('Y-m-d')) < 2) {
                  continue; //pas de compétitions poulains
              }


            $categorie = Categorie::recherche($cheval);
           // dd($categorie);OK
            $cats = $comp->Categories->modelKeys(); //OK
          
            if (in_array($categorie->id,$cats)) {
       
                $deja = Resultat::where('animal_id', $cheval->id)->WhereHas('evenement', function ($q) use ($m, $y){$q->whereMonth('date',$m)->whereYear('date',$y);})->first(); //inscrit ailleurs le m^me mois
              if (null == $deja)
                  { 
                     $resultat = New Resultat();
                    $resultat->animal_id = $cheval->id;
                    $resultat->evenement_id = $evenement->id;
                    $resultat->categorie_id = $categorie->id;
                    $resultat->competition_id = $comp->id;
                   //dd($resultat);//OK;
                  
                    $resultat->save();
               }
            }
        }
    }
}


static function runCompetitions() {
    
    $date =new DateTime(Gamedata::date());
    $m = $date->format('m');
    $y = $date->format('Y');

    $evenements = Evenement::whereMonth('date', $m)->whereYear('date',$y)->get(); 

    foreach ($evenements as $evenement){
    $competitions = $evenement->Competitions;
        try {
        foreach ($competitions as $competition) {
            $comp= $competition->id;
            $filter = function($query) use ($comp) {
                $query->where('competition_id', $comp);
                };
            $categories = Categorie::with(['competitions' =>$filter])->get();
            //with et pas whereHas sinon 1 seule catégorie???
            foreach ($categories as $categorie) {
  
                $categorie->run($competition,$evenement) ;  
            }
        }
        }
  
finally 
 {   $evenement->nextYear();}
  }

}

}




