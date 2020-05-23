<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamedata;
use App\statutsFemelle;
use App\Animal;
use App\Elevage;
use App\Race;

class TempsController extends Controller
{
   
    static function dateCourante()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        return $date;
    }

    static function nextMonth()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
       
        $date= date('Y-m-d',strtotime('+1 month',strtotime($date)));
        $game->date_courante = $date;
        $game->save();

        // checkFemellesTerme($date);
        checkNouveaux($date);
        checkPuberes();
        VenteJeunes();
        retireVente();
        reproNPC($date);
        achete();
        checkMorts();
        $dateM = date('m',strtotime($date));
        if ($dateM == 01) {
            $game->lettre = TempsController::checkLettre($date);
            $game->save();
            $elevages = Elevage::where('role','Joueur')->get();
            foreach ($elevages as $elevage)
            {
                $elevage->budget +=1000;
                $elevage->save();
            }
            checkVieux ($date);
           
        }
        return redirect()->route('home');
    }

    static function ElevenMonths()
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date= date('Y-m-d',strtotime('+11 month',strtotime($date)));
        
       return $date;
    }


    static function ageMonths($date_naissance)
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date = strToTime($date);
        $date_naissance = strToTime($date_naissance);
        $age = $date - $date_naissance;
       
        $age = $age/(24*60*60*30);

        
        return $age;
    }

    static function ageYears($date_naissance)
    {
        $game = Gamedata::Find(1);
        $date = $game->date();
        $date = strToTime($date);
        $date_naissance = strToTime($date_naissance);
        $age = $date - $date_naissance;
       
        $age = $age/(24*60*60*30*12);

        
        return $age;
    }

    static function checkLettre($date)
    {
        $lettres = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'];
        $an = date('Y', strtotime($date));
    $lettre = $lettres[($an - 1966) % 22];
    return $lettre;

    }

    static function saison()
{
    $date = TempsController::dateCourante();
    $mois = date('m',strtotime($date));
    switch ($mois) {
        case $mois<3:
            $saison = false;
        break;
        case $mois > 9:
            $saison = false;
        break;
        default:
        $saison = true;
    }
    return $saison;
}
}

function checkFemellesTerme($date)
{
    
    $statuts = statutsFemelle::where('terme',  $date)->get();
  
    
    if (!empty($statuts))
        {
            foreach ($statuts as $statut)
            {
                
                $statut->conf_pleine = false;
                $statut->pres_pleine = false;
                $statut->vide = true;
                $statut->conf_vide = true;
                $statut->etalon_id = null;    
                $statut->terme = null;
                $statut->save(); 
            }
    } 
}

function checkNouveaux($date)
{
    $animaux = Animal::where('date_naissance',  $date)->get();

    foreach ($animaux as $animal)
    {
        $animal->foetus = false;
        $animal->elevage_id = $animal->Dam->elevage_id;
        $animal->save();
        $statut = StatutsFemelle::where('animal_id', $animal->dam_id)->first();
        $statut->vide = true;
        $statut->pres_pleine= false;
        $statut->conf_pleine = false;
        $statut->conf_vide = true;
        $statut->etalon_id = null;
        $statut->terme = null;
        $statut->save();

            
    }
}

function checkPuberes()
{
    $animaux = Animal::where('sexe', 'jeune mâle')->get();
    foreach ($animaux as $animal)
    {
        if (TempsController::ageMonths($animal->date_naissance) >= 24)
       { $animal->sexe = 'mâle';
        $animal->save();}
            
    }

    $animaux = Animal::where('sexe', 'jeune femelle')->get();
    foreach ($animaux as $animal)
    {
        if (TempsController::ageMonths($animal->date_naissance) >= 24)
        { $animal->sexe = 'femelle';
         $animal->save();
         $statut = new statutsFemelle();
         $statut->animal_id = $animal->id;
         $statut->save();
        }
            
    }
}



function reproNPC($date)
{
    
        if (TempsController::saison($date)) {
            $vendeurs = Elevage::where('role','Vendeur')->get();
            foreach($vendeurs as $vendeur)
            {
                $fem = ['femelle', 'vieille femelle'];
                $juments = Animal::where('elevage_id', $vendeur->id)->whereIn('sexe',$fem)->get();
                
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
                        if ($jument->sexe ='femelle')
                        {
                             $var = 3;
                            }
                        else{
                            $var =4;
                        }
                        if(rand(1,$var)==1)
                        {
                            $etalons = Animal::where('elevage_id',$vendeur->id)->where('sexe','mâle')->get();
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
}

function VenteJeunes ()
{
    $vendeurs = Elevage::where('role','Vendeur')->get();
    foreach ($vendeurs as $vendeur) {
        $animaux = Animal::where('elevage_id', $vendeur->id)->where(function($query) { return $query->where('sexe', 'jeune mâle')->orWhere('sexe', 'jeune femelle');})->get();

        foreach ($animaux as $animal)
        {
            if ((TempsController::ageMonths($animal->date_naissance) >= 7) && (! $animal->fondateur) )
        { 
            $animal->a_vendre = true;
            $race = Race::find($animal->race_id);
            $animal->prix = $race->prix_moyen; 
            if ($animal->sexe=='jeune femelle')
            {
                $animal->prix += ($animal->prix)*0.2;
            }
            $animal->save();}
                
        }
    }
}

function retireVente()
{
    $vendeurs = Elevage::where('role','Vendeur')->get();
    foreach ($vendeurs as $vendeur) {
        $animaux = Animal::where('elevage_id', $vendeur->id)->where('a_vendre', true)->where(function($query) { return $query->where('sexe', 'mâle')->orWhere('sexe', 'femelle');})->get();

        foreach ($animaux as $animal)
        {
            $animal->a_vendre = false;
            $animal->save();
        }
    }
}

function achete ()
{
    $acheteurs = Elevage::where('role', 'acheteur')->get();
    foreach ($acheteurs as $acheteur)
    {
        $avendre = Animal::whereHas('Elevage', function ($query) {
            $query->where('role', 'Joueur');
        })->where('a_vendre', true)->get();
       foreach ($avendre as $av)
       {
        $prix_moy = Race::Find($av->race_id)->prix_moyen;
        srand((float) microtime()*1000000);
          switch (true) {
              case ($av->prix > $prix_moy * 2):
                $achat = rand(1,100) == 1;
              break;
              case ($av->prix > $prix_moy * 1.5):
                $achat = rand(1,50) == 1;
            break;
              case ($av->prix > $prix_moy):
                $achat = rand(1,20) == 1;
            break;
                case ($av->prix > $prix_moy * 3/4 ):
                $achat = rand(1,8) == 1;
            break;
                case ($av->prix > $prix_moy * 2/3):
                    $achat = rand(1,4) == 1;
                break;
                    case ($av->prix >  $prix_moy /2):
                        $achat = rand(1,2) == 1;
                    break;
                    case ( $prix_moy /3):
                        $achat = true;
                    break;
                    default :
                    $achat = rand(1,2) ==1;

          }
          if ($achat) {
            $vendeur = Elevage::Find($av->elevage_id);
            $vendeur->budget += $av->prix;
            $vendeur->save();
            $av->elevage_id = $acheteur->id;
            $av->a_vendre = false;
            $av->save();

          }
    

       }
    }
}

function checkVieux ($date)
{
    $cas = ['mâle', 'femelle', 'mâle stérilisé', 'femelle stérilisée'];  
    $animaux = Animal::whereIn('sexe',$cas)->get();
    foreach ($animaux as $animal)
    {
        $age = TempsController::ageYears($animal->date_naissance);
        if ($age > 15)
        {
            switch ($animal->sexe) 
     
            {
               case 'femelle':
                $animal->sexe = 'vieille femelle';
               break;
          
               case 'mâle':
                $animal->sexe = 'vieux mâle';
              break;

              case 'mâle stérilisé':
                $animal->sexe = 'vieux mâle stérilisé';
              break;

              case 'femelle stérilisée':
                $animal->sexe = 'vieille femelle stérilisée';
              break;

              default :
              dd ('quoi? un transexuel?');
            }
            $animal->save();
        }
    }
    
}
function checkMorts ()
{
    $animaux = Animal::where('sexe','LIKE','vie%')->get();
    foreach ($animaux as $animal)
    {
        $age = TempsController::ageMonths($animal->date_naissance);
            switch ($age)
            {
                case $age<20:
                    $var = 300;
                break;
                case $age<25:
                    $var = 200;
                break;
                case $age<30:
                    $var =150;
                break;
                default:
                $var = 50;
            }
                if (rand(1,$var))
                {
                    $animal->elevage_id =2;//chez l'Ankou!
                    $animal->save(); //tu parles d'un sauvé, je l'ai tué là!
                    $statut = statutsFemelle::where('animal_id', $animal->id)->first();
                    if (isset($statut) && $statut->pleine)
                    {
                        $produit = Animal::where('foetus', true)->where('dam_id',$animal->id)->first(); //à changer quand on aura introduit la gemellité possible
                        $produit->elevage_id = 2;
                        $produit->save();
                    }
                }
            
    }
}

