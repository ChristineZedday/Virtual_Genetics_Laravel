<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\gamedatas;


class Gamedata extends Model
{
    
   static function budget()
    {
        return  Gamedata::find(1)->budget;
    }

    static function date()
    {
        return  Gamedata::find(1)->date_courante;
    }

    static function dateDeb()
    {
        return  Gamedata::find(1)->date_debut;
    }

    static function ageMonths($date_naissance)
    {
        
        $date = Gamedata::date();
        $date = strToTime($date);
        $date_naissance = strToTime($date_naissance);
        $age = $date - $date_naissance;
       
        $age = $age/(24*60*60*30);

        
        return $age;
    }

    static function ageYears($date_naissance)
    {
        $date = Gamedata::date();
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
    $date = Gamedata::date();
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

static function ElevenMonths()
{
    $date = Gamedata::date();
    $date= date('Y-m-d',strtotime('+11 month',strtotime($date)));
    
   return $date;
}

static function checkNouveaux($date)
{
    $animaux = Animal::where('date_naissance',  $date)->get();

    foreach ($animaux as $animal)
    {
            $animal->foetus = false;
            if ($animal->elevage_id != 2)
            {
                $animal->elevage_id = $animal->Dam->elevage_id;
                $animal->save();
            }
            
            $statut = StatutsFemelle::where('animal_id', $animal->dam_id)->first();
            if (isset($statut))
            {  $statut->vide = true;
                $statut->suitee = true;
                $statut->pres_pleine= false;
                $statut->conf_pleine = false;
                $statut->conf_vide = true;
                $statut->etalon_id = null;
                $statut->terme = null;
                $statut->save(); }
          
    }
    
}

static function checkSevres()
{
    $animaux = Animal::where('elevage_id', '!=', 2)->where( function ($query) {$query->where('sexe', 'jeune poulain')->orWhere('sexe', 'jeune pouliche');})->get(); 
    foreach ($animaux as $animal)
    {
        if (Gamedata::ageMonths($animal->date_naissance) >= 6)
        {
            if ($animal->sexe == 'jeune poulain')
            {
                $animal->sexe = 'jeune mâle';
            }
            else
            {
                $animal->sexe = 'jeune femelle';
            }
                $animal->save();
                if (isset($animal->Dam) && $animal->Dam->elevage_id !=2)
             {   $statut = $animal->Dam->Statut;
                if (isset ($statut))
               { $statut->suitee = false;
                $statut->save();}}
            
        }
    }
}

static function checkPuberes()
{
    $animaux = Animal::where('sexe', 'jeune mâle')->where('elevage_id', '!=', 2)->get();
    foreach ($animaux as $animal)
    {
        if (Gamedata::ageMonths($animal->date_naissance) >= 24)
        { 
           $animal->sexe = 'mâle';
            $animal->save();
            $statut = new StatutMale();
            $statut->animal_id = $animal->id;
            $statut->fertilite = 100 - $animal->consang/2 ;
            if ($animal->Elevage->role == 'Vendeur' && $animal->race_id !=1)
            {
                if ($animal->modele_allures > 14)
                {
                    $statut->qualite = 'approuvé';
                }
                else if ($animal->modele_allures > 9)
                {
                    $statut->qualite = 'autorisé';
                }
                else
                {
                    $statut->qualite = 'refusé';
                }
            }
            $statut->save();
         }

        
            
    }

    $animaux = Animal::where('sexe', 'jeune femelle')->where('elevage_id', '!=', 2)->get();
    foreach ($animaux as $animal)
    {
        if (Gamedata::ageMonths($animal->date_naissance) >= 24)
        { $animal->sexe = 'femelle';
         $animal->save();
         $statut = new statutsFemelle();
         $statut->animal_id = $animal->id;
         $statut->fertilite = 100 - $animal->consang/2 ;
         $statut->save();
        }
            
    }
}

static function checkVieux ($date)
{
    $cas = ['mâle', 'femelle', 'mâle stérilisé', 'femelle stérilisée'];  
    $animaux = Animal::whereIn('sexe',$cas)->get();
    foreach ($animaux as $animal)
    {
        $age = Gamedata::ageYears($animal->date_naissance);
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



  static function checkMorts()
{
    $letaux = Animal::where('elevage_id', '!=', 2)->whereHas('Pathologie', function ($query) {$query->where('letal_foetus',1);})->get(); //avortés
   
    foreach ($letaux as $letal)
    {
            $dam = $letal->Dam;
            $letal->foetus = false;
            $date= date('Y-m-d',strtotime('+7 month',strtotime($dam->statut->date_saillie)));
            $dam->statut->terme = $date;
            $letal->elevage_id =2;//chez l'Ankou!
            $dam->statut->save();
            $letal->date_naissance = $date;
            $letal->date_achat = $date;
            $letal->save();
     
      
    }
    $letaux = Animal::where('elevage_id', '!=', 2)->where('foetus', 0)->whereHas('Pathologie', function ($query) {$query->where('letal',1);})->get(); //morts peu de temps après la naissance
        foreach ($letaux as $letal)
        {
            $letal->elevage_id =2;//chez l'Ankou!
            $letal->date_achat = Gamedata::date();
            $letal->save(); //tu parles d'un sauvé, je l'ai tué là!
        }

    $animaux = Animal::where('elevage_id', '!=', 2)->where('sexe','LIKE','vie%')->get();
    foreach ($animaux as $animal)
    {
        
        $age = Gamedata::ageMonths($animal->date_naissance);
            switch ($age)
            {
                case $age<20:
                    $var = 1500;
                break;
                case $age<25:
                    $var = 750;
                break;
                case $age<30:
                    $var =150;
                break;
                case $age<35:
                    $var =75;
                break;
                default:
                $var = 10;
            }
                if (rand(1,$var)==1)
                {
                    $animal->elevage_id =2;//chez l'Ankou!
                    $animal->date_achat = Gamedata::date();
                    $animal->save(); //tu parles d'un sauvé, je l'ai tué là!
                    
                    if ($animal->sexe == 'vieille femelle')
                  {  $statut = $animal->Statut()->first();
                   
                    
                    if (isset($statut))
                  
                    {
                       
                        if (!($statut->vide))
                        {
                           
                            $produit = Animal::where('foetus', true)->where('dam_id',$animal->id)->first(); //à changer quand on aura introduit la gemellité possible
                           
                            $produit->elevage_id =2;//pour effacer faudrait effacer genotypes et images
                            $produit->save();
                            $statut->delete();

                          
                        }
                        else
                        {
                            $statut->delete();
                        }
                      
                    }
                   }
                       
                    if ($animal->sexe == 'vieux mâle'  && isset($animal->StatutMale))
                    {
                        $animal->StatutMale->delete();
                    }
                }
            
    }
}

// 
static function VenteSaillies ()
{
    $vendeurs = Elevage::where('role','Vendeur')->get();
    foreach ($vendeurs as $vendeur)
    {
        $animaux = Animal::where('elevage_id', $vendeur->id)->whereHas('StatutMale', function ($query) { return $query-> where('qualite', 'autorisé')->orWhere('qualite', 'approuvé');})->get();
        foreach ($animaux as $animal)
      
        {
            $statut = $animal->StatutMale;
            if ($statut->disponible)
            {
                if (rand(1,3)== 1)
                {
                    $statut->disponible = false;
                    $statut->save();
                  
                    
                }
            }
            else 
            {
                if (rand(1,3)== 1)
                {
                    $statut->disponible = true;
                    if ($statut->qualite = 'approuvé')
                   { $statut->prix = $animal->Race->prix_moyen/10;}
                   else
                   {$statut->prix = $animal->Race->prix_moyen/20;}
                    $statut->save();
                   
                }
            }
           
        
        }

    }
}

static function VenteJeunes ()
{
    $vendeurs = Elevage::where('role','Vendeur')->get();
    foreach ($vendeurs as $vendeur) {
        $animaux = Animal::where('elevage_id', $vendeur->id)->where(function($query) { return $query->where('sexe', 'jeune mâle')->orWhere('sexe', 'jeune femelle');})->get();

        foreach ($animaux as $animal)
        {
            if ((Gamedata::ageMonths($animal->date_naissance) >= 7) && (! $animal->fondateur) )
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

static function retireVente()
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

static function achete ()
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
            $av->date_achat = Gamedata::date();
            $av->a_vendre = false;
            $av->save();

          }
    

       }
    }
}


}


