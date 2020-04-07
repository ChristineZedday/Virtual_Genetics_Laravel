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
        reproNPC($date);
        VenteJeunes();
        achete();
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
    static function checkLettre($date)
    {
        $lettres = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'];
        $an = date('Y', strtotime($date));
    $lettre = $lettres[($an - 1966) % 22];
    return $lettre;

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
         $animal->save();}
            
    }
}

function reproNPC($date)
{
    $mois = date('m',strtotime($date));
    switch ($mois) {
        case $mois<4:
            $saison = false;
        break;
        case $mois > 9:
            $saison = false;
        break;
        default:
        $saison = true;
    }
        if ($saison) {
            $vendeurs = Elevage::where('role','Vendeur')->get();
            foreach($vendeurs as $vendeur)
            {
                $juments = Animal::where('elevage_id', $vendeur->id)->where('sexe','femelle')->get();
                
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
                        mt_srand(time());
                        if(mt_rand(1,2)==1)
                        {
                            $etalons = Animal::where('elevage_id',$vendeur->id)->where('sexe','mâle')->get();
                            $nb = sizeof($etalons);
                            if ($nb > 0) {
                                $choisi = mt_rand(1,$nb) -1;
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
        $animaux = Animal::where('elevage_id', $vendeur->id)->where(function($query) { return $query->where('sexe', 'jeune mâle')
            ->orWhere('sexe', 'jeune femelle');})->get();

        foreach ($animaux as $animal)
        {
            if (TempsController::ageMonths($animal->date_naissance) >= 7 )
        { 
            $animal->a_vendre = true;
            $race = Race::find($animal->race_id);
            $animal->prix = $race->prix_moyen; 
            if ($animal->sexe='jeune femelle')
            {
                $animal->prix += ($animal->prix)*0.2;
            }
            $animal->save();}
                
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
        mt_srand(time());
          switch (true) {
              case ($av->prix >1000):
                $achat = mt_rand(1,100) == 1;
              break;
              case ($av->prix > 800):
                $achat = mt_rand(1,50) == 1;
            break;
              case ($av->prix > 600):
                $achat = mt_rand(1,25) == 1;
            break;
                case ($av->prix > 400):
                $achat = mt_rand(1,10) == 1;
            break;
                case ($av->prix > 300):
                    $achat = mt_rand(1,5) == 1;
                break;
                    case ($av->prix > 200):
                        $achat = mt_rand(1,3) == 1;
                    break;
                    case ($av->prix < 50):
                        $achat = true;
                    break;
                    default :
                    $achat = mt_rand(1,2) ==1;

          }
          if ($achat) {
            $vendeur = Elevage::Find($av->elevage_id);
            $vendeur->budget += $av->prix;
            $vendeur->save();
            $av->elevage_id = $acheteur->id;
            $av->prix*=2;
            $av->save();

          }
    

       }
    }
}

