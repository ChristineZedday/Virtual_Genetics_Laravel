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
        // $elevage = Elevage::Find($elevage);
        // return view('dashboard',['elevage' =>$elevage]);
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
    $date = Gamedata::date();
    foreach($competiteurs as $competiteur) {
        //selectionner chevaux dont la note MA>10
        $chevaux = Animal::where('modele_allures', '>=', 11)->where('race_id', '!=' , 1)->where('elevage_id', $competiteur->id)->get(); //so far so good
        //inscrire dans la bonne compétition et catégorie
        foreach ($chevaux as $cheval) {
            $race = $cheval->race->id;
            if (strpos($cheval->sexe,'stérilisé') != false){
                break;//à déplacer quand autre que MA
            }
            $categorie = Categorie::where('sexe', $cheval->Genre())->where('age_min','<=', $cheval->ageAdministratif($date))->where('age_max', '>=', $cheval->ageAdministratif($date))->where('race_id', $cheval->race_id)->first(); //éligibilité cheval, puis chercher les évènements avec ces cat
            //faut rajouter suitée, et autorisé pour les étalons
          if ($categorie != null){
            $categorie = $categorie->id;
          $competition = Competition::whereHas('categories', function ($query) use($categorie) {$query->where('categorie_id', $categorie);})->first();
         //so far so good
         
          if ($competition != null) {
            $competition = $competition->id;
        $evenement = Evenement::where('competition_id', $competition)->first(); //pb avec $date?
       
     if (isset($evenement)) {
                    dd($cheval->nom.' '.$evenement->nom());
            }
        } 
    }
            
        }
    }
}
}





