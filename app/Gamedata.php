<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\gamedatas;
use DB;
use DateTime;
use App\Budget;


class Gamedata extends Model
{
   

    static function date()
    {
        return  Gamedata::find(1)->date_courante;
    }

    static function dateDeb()
    {
        return  Gamedata::find(1)->date_debut;
    }

    //first letter of name for the current year
    static function checkLettre($date)
    {
        $lettres = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'];
        $an = date('Y', strtotime($date));
    $lettre = $lettres[($an - 1966) % 22];
    return $lettre;

    }
//Season for reproduction (march to september)
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

static function beforeSeason() {
     $date = Gamedata::date();
    $mois = date('m',strtotime($date));
    $before = $mois<=3 ? true : false;
    return $before;
}
static function afterSeason() {
     $date = Gamedata::date();
    $mois = date('m',strtotime($date));
    $after = $mois>=9 ? true : false;
    return $after;
}

//date of birth 11 months after conception
static function ElevenMonths()
{
    $date = Gamedata::date();
    $date= date('Y-m-d',strtotime('+11 month',strtotime($date)));
    
   return $date;
}

static function HowManyMonths($datefutur)
{
    $maintenant = New DateTime(Gamedata::date());
    $datefutur = New DateTime($datefutur);
    $diff= $datefutur->diff($maintenant);
    return 12 * $diff->y + $diff->m;;

}
//birth of foals
static function checkNouveaux($date)
{
    $animaux = Animal::where('date_naissance', '<='  ,$date)->where('foetus',1)->get();
    // <= au lieu de  =: rattrapper le coup s'il y a eu bug et que ça n'a pas tourné au mois d'avant

    foreach ($animaux as $animal)
    {
            $animal->foetus = false;
            if ($animal->elevage_id != 2)
            {
                $animal->elevage_id = $animal->Dam->elevage_id;
                $animal->save();
            }
            if ($animal->elevage->role == 'Vendeur') {
                $animal->statut_administratif = 'enregistré';
                $animal->save();
            }

            $statut = StatutFemelle::where('animal_id', $animal->dam_id)->first();
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
// weanlings when 6 months old
static function checkSevres()
{
    $animaux = Animal::where('elevage_id', '!=', 2)->where('foetus', 0)->where( function ($query) {$query->where('sexe', 'jeune poulain')->orWhere('sexe', 'jeune pouliche');})->get(); 
    foreach ($animaux as $animal)
    {
        if ($animal->ageMonths() >= 6)
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
             {   $statut = $animal->Dam->StatutFemelle;
                if (isset ($statut))
               { $statut->suitee = false;
                $statut->save();}}
            
        }
    }
}
//Virtuals books for stallions
static function checkCarnets()
{
    $animaux = Animal::whereHas('StatutMale', function ($q) {
        $q->where('carnet_saillies', 1);
    })->whereHas('elevage', function ($qu) {
        $qu->where('role', '!=' , 'Vendeur');
    })->get();
    foreach ($animaux as $animal) {
        $statut = $animal->StatutMale;
        $statut->setCarnetSaillies(false);
         //faut redemander chaque année
    }
     $animaux = Animal::whereHas('StatutMale', function ($q) {
        $q->where('qualite', 'approuvé')->orWhere('qualite', 'approbation provisoire cette année')->where('carnet_saillies', 0);
    })->whereHas('elevage', function ($qu) {
        $qu->where('role', '==' , 'Vendeur');
    })->get();
     foreach ($animaux as $animal) {
        $statut = $animal->StatutMale;
      $statut->setCarnetSaillies(true); 
    }
}

//foals that where not registered during their first years become grades (Origine Non Constatée)
static function checkNonEnregistres() 
{//Pas enregistrés l'année de naissance, ONC
    $animaux = Animal::whereHas('elevage', function ($query) { $query->where('role','Joueur');})->where('foetus', 0)->where('statut_administratif', '!=', 'enregistré')->where('race_id', '!=', 17)->get();
 
    foreach ($animaux as $animal) {
        $animal->race_id = 17;
        $animal->save();
        foreach ($animal->RacesPossibles()->get() as $possible) {
            $animal->RacesPossibles()->detach($possible->id);
        }
    }
}
//animals of two years old (administratively, i.e. supposed to be born in january) can technically reproduce
static function checkPuberes()
{
    $animaux = Animal::where('sexe', 'jeune mâle')->where('elevage_id', '!=', 2)->get();
    $date = Gamedata::date();
    foreach ($animaux as $animal)
    {
        if ($animal->ageAdministratif($date) >= 2 )
        { 
           $animal->sexe = 'mâle';
            $animal->save();
            $statut = new StatutMale();
            $statut->animal_id = $animal->id;
            $statut->fertilite = 100 - $animal->consang/2 ;
            if ($animal->Elevage->role == 'Vendeur' && $animal->race_id !=1 && $animal->race_id != 17)
            {
                $animal->statut_administratif = 'enregistré';
                $animal->save();
                if ($animal->ageAdministratif(date($date)) >= $animal->race->age_appro_male) {
                $statut->setAutorisationSanitaire();
                $statut->approuveEtalons();
                if ($statut->qualite == 'approuvé' || $statut->qualite == 'approbation provisoire cette année')
                {$statut->carnet_saillies = true;}
                }
            }   
           
            $statut->save();
          
         } 
            
    }

    $animaux = Animal::where('sexe', 'jeune femelle')->where('elevage_id', '!=', 2)->get();
    foreach ($animaux as $animal)
    {
        if ($animal->ageAdministratif($date) >= 2)
        { $animal->sexe = 'femelle';
        if ($animal->elevage->role == 'Vendeur') {
            $animal->statut_administratif = 'enregistré';
           
            $animal->save();
        }
         $animal->save();
         $statut = new StatutFemelle();
         $statut->animal_id = $animal->id;
          if ($animal->Elevage->role == 'Vendeur' && $animal->race->confirmation_juments && $animal->modeles_allures >= 12) {
                $statut->confirme();
            }
         $statut->fertilite = 100 - $animal->consang/2 ;
         $statut->save();
        }
            
    }
}

static function checkFondateurs($date) 
{
    $animaux = Animal::where('fondateur',1)->get();
            foreach ($animaux as $animal) {
                if ($animal->ageAdministratif($date) < 2) {
                    break;
                }

                 if ( $animal->Genre()) 
                { 
                    $animal->sexe = 'mâle';
                    $animal->save();
                    $statut = new StatutMale();
                    $statut->animal_id = $animal->id;
                    $statut->fertilite = 100 - $animal->consang/2 ;
                     $statut->save();
                    
                
                    if ($animal->ageAdministratif(date($date)) >= $animal->race->age_appro_male) {
                            $statut->setAutorisationSanitaire();
                            $statut->approuveEtalons();
                            
                            if ($statut->qualite == 'approuvé' || $statut->qualite == 'approbation provisoire cette année')
                            {$statut->carnet_saillies = true;}
                            }
                        
                   
            
                } // fin if male
            
   
                else 
                { 
                   
                    $animal->sexe = 'femelle';
                    $animal->save();
                    $statut = new StatutFemelle();
                    $statut->animal_id = $animal->id;
                    $statut->fertilite = 100 - $animal->consang/2 ;
                    $statut->save();
                    if ( $animal->race->confirmation_juments && $animal->modeles_allures >= 12) {
                        $animal->confirmeJument();
                        dd('conf');
                     }
        
               
                }
               
            }// end foreach

}

static function checkApprovals () {
    $animaux = Animal::whereHas('statutMale', function ($q) {$q->where('qualite', '!=', 'approuvé')->where('qualite', '!=', 'refusé');})->get();
    foreach ($animaux as $animal) {
        switch (true) {
            case $animal->StatutMale->qualite == 'approuvé an prochain':
               $animal->statutMale->setApproval(); 
               break;
            case $animal->StatutMale->qualite == 'approbation provisoire an prochain':
                $animal->statutMale->setProvisoire(); 
             
               break;
            case $animal->StatutMale->qualite == 'approbation provisoire cette année':
                $animal->statutMale->setModele15(false); 
                $animal->statutMale->setClasseNat(false);
                $animal->statutMale->setApproval(false);
               
                   //il doit se requalifier
               break;
               
        }

    }
}
//old horses limitations of health and performances
static function checkVieux ($date)
{
    $cas = ['mâle', 'femelle', 'mâle stérilisé', 'femelle stérilisée'];  
    $animaux = Animal::whereIn('sexe',$cas)->get();
    foreach ($animaux as $animal)
    {
        $age = $animal->ageYears();
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
    $vieux = Animal::where('sexe', 'LIKE','vie%')->get();
    foreach ($vieux as $vieux) {
        $perf= $vieux->Performance;
        $age = $vieux->ageYears();
        if ($age < 25) {
            $degradation = random_int(0,10);
        }
        else {
            $degradation = random_int(0,20);
        }
        
        $perf->sante -= $degradation;
        $perf->save();

    }
    
}


//Sending to Ankou (Death) the horses (possibly during gestation or at birth) that have letal gens or those that died of age
  static function checkMorts()
{
    $letaux = Animal::where('elevage_id', '!=', 2)->whereHas('Pathologie', function ($query) {$query->where('letal_foetus',1);})->get(); //avortés
   
    foreach ($letaux as $letal)
    {
            $dam = $letal->Dam;
            $statut = $dam->StatutFemelle;
            $letal->foetus = false;
            $date= date('Y-m-d',strtotime('+7 month',strtotime($statut->date_saillie)));
            $statut->terme = $date;
            $statut->vide = true;
            $statut->conf_vide = true;
            $statut->pres_pleine = false;
            $letal->elevage_id =2;//chez l'Ankou!
            $statut->save();
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
        
        $sante = $animal->Performance->sante;
            switch ($sante)
            {
                case $sante<10:
                    $var = 2;
                break;
                case $sante<20:
                    $var = 10;
                break;
                case $sante<30:
                    $var =20;
                break;
                case $sante<50:
                    $var =50;
                break;
                default:
                $var = 100000;
            }
                if (rand(1,$var)==1)
                {
                    $animal->elevage_id =2;//chez l'Ankou!
                    $animal->date_achat = Gamedata::date();
                    $animal->save(); //tu parles d'un sauvé, je l'ai tué là!
                    
                    if ($animal->sexe == 'vieille femelle' || $animal->sexe == 'femelle')
                  {  $statut = $animal->StatutFemelle;
                   
                    
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
                        $animal->StatutMale->fertilite = 0;
                        $animal->StatutMale->disponible = false;
                        $animal->StatutMale->save();
                    }
                }
            
    }
}
/*static function checkApproProvisoire() {
    $males = StatutMale::where('qualite' , 'approbation provisoire cette année')->get();
    foreach ($males as $male) {
        $male->qualite = 'autorisation sanitaire';
        $male->save();
    }
     $males = StatutMale::where('qualite' , 'approbation provisoire an prochain')->get();
    foreach ($males as $male) {
        $male->qualite = 'approbation provisoire cette année';
        $male->save();

    }
 $males = StatutMale::where('qualite' , 'approuvé an prochain')->get();
    foreach ($males as $male) {
        $male->qualite = 'approuvé';
        $male->save();

    }
}  */

static function checkApproConcours() {
    $males = StatutMale::whereHas('elevage', function($q) {$q->where('role', 'vendeur');})->where('qualite' , 'approuvé')->andWhere('modele15' , TRUE)->get();
    foreach ($males as $male) {
        if ($male->approuveEtalonsResultatsConcours()){
            $male->save();
        }  

    }
}

static function checkIDR() {
    $animaux = Animal::has('performance')->get();
    foreach ($animaux as $animal) {
        $animal->Performance->IDR();
    }
}
// 
static function VenteSaillies ()
{
    $vendeurs = Elevage::where('role','Vendeur')->get();
    foreach ($vendeurs as $vendeur)
    {
        $animaux = Animal::where('elevage_id', $vendeur->id)->whereHas('StatutMale', function ($query) { return $query-> where('carnet_saillies', 1);})->get();
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
                    if ($statut->qualite == 'approuvé')
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
            if (($animal->ageMonths() >= 6) && (! $animal->fondateur) )
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
            
            $vendeur->Budget()->vendAnimal($av->prix) ;
        
            $av->acheter($acheteur->id);
            $av->save();

          }
    

       }
    }
}




}


