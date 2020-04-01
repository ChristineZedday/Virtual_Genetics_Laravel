<?php

use Illuminate\Database\Seeder;

class AnimauxTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('animaux')->delete();
        
        \DB::table('animaux')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Mignonne',
                'affixe_id' => 1, 
                'couleur' => NULL,
                'taille_cm' => 99,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => '1970-01-11',
                'date_naissance' => '1966-05-13',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Popeye',
                'affixe_id' => 3,
                
                'couleur' => NULL,
                'taille_cm' => 102,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => '1970-02-11',
                'date_naissance' => '1964-04-15',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => '2020-02-16 17:13:00',
                'nom' => ' Diana',
                'affixe_id' => 4,
                
                'couleur' => NULL,
                'taille_cm' => 114,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1965-04-12',
                'a_vendre' => 0,
                'prix' => 1500,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Molly',
                'affixe_id' => 3,
                'couleur' => NULL,
                'taille_cm' => 106,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => '1970-02-16',
                'date_naissance' => '1963-06-16',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => ' Myrrdhin',
                'affixe_id' => 5,
                'couleur' => NULL,
                'taille_cm' => 117,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1965-02-13',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Keridwen',
                'affixe_id' => 5,
                'couleur' => NULL,
                'taille_cm' => 111,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1966-05-18',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Django',
                'affixe_id' => NULL,
                'couleur' => NULL,
                'taille_cm' => 81,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1967-05-23',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Owen',
             
                'affixe_id' => 4,
                
                'couleur' => NULL,
                'taille_cm' => 118,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1964-03-21',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => ' Lizzy',
                'affixe_id' => 11,
                'couleur' => NULL,
                'taille_cm' => 113,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1966-04-21',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => ' Hero',
             
                'affixe_id' => 8,
                
                'couleur' => NULL,
                'taille_cm' => 120,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1966-05-31',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => ' Comet',
               
                'affixe_id' => 12,
                
                'couleur' => NULL,
                'taille_cm' => 119,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1965-04-18',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Daffodil',
                'affixe_id' => 7,
                
                'couleur' => NULL,
                'taille_cm' => 109,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1966-03-24',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => ' Davy',
          
                'affixe_id' => 6,
                
                'couleur' => NULL,
                'taille_cm' => 112,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1965-04-25',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Poppy',
              
                'affixe_id' => 2,
               
                'couleur' => NULL,
                'taille_cm' => 91,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1964-06-25',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Millie',
            
                'affixe_id' => 9,
               
                'couleur' => NULL,
                'taille_cm' => 99,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1964-03-22',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Calliope',
           
                'affixe_id' => 8,
                
                'couleur' => NULL,
                'taille_cm' => 112,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1965-05-25',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            16 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Brutus',
          
                'affixe_id' => 15,
                
                'couleur' => NULL,
                'taille_cm' => 103,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1965-03-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Primrose',
              
                'affixe_id' => 16,
                
                'couleur' => NULL,
                'taille_cm' => 95,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1967-03-25',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Andy',
              
                'affixe_id' => 16,
                
                'couleur' => NULL,
                'taille_cm' => 98,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1966-03-25',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            19 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Lily',
              
                'affixe_id' => 15,
                
                'couleur' => NULL,
                'taille_cm' => 89,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1966-03-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            20 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Beryl',
          
                'affixe_id' => 13,
                
                'couleur' => NULL,
                'taille_cm' => 94,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1964-05-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            21 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Mistigri',
               
                'affixe_id' => 2,
               
                'couleur' => NULL,
                'taille_cm' => 97,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1966-04-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            22 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Bobine',
          
                'affixe_id' => 17,
               
                'couleur' => NULL,
                'taille_cm' => 101,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1967-06-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            23 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Rose',
             
                'affixe_id' => 10,
               
                'couleur' => NULL,
                'taille_cm' => 93,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1964-06-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            24 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Viking',
             
                'affixe_id' => 18,
               
                'couleur' => NULL,
                'taille_cm' => 89,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1964-03-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            25 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Ruby',
               
                'affixe_id' => 18,
               
                'couleur' => NULL,
                'taille_cm' => 96,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1965-03-28',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            26 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Odin',
              
                'affixe_id' => 13,
                
                'couleur' => NULL,
                'taille_cm' => 98,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1969-04-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            27 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Salsa',
              
                'affixe_id' => 10,
               
                'couleur' => NULL,
                'taille_cm' => 103,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1966-03-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            28 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Captain',
              
                'affixe_id' => 1,
               
                'couleur' => NULL,
                'taille_cm' => NULL,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1966-05-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            29 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Piggy',
               
                'affixe_id' => 19,
                
                'couleur' => NULL,
                'taille_cm' => 107,
                'race_id' =>1,
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1965-04-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            30 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Sonia',
              
                'affixe_id' => 20,
                
                'couleur' => NULL,
                'taille_cm' => 105,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1965-03-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            31 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Alezane',
             
                'affixe_id' => 21,
               
                'couleur' => NULL,
                'taille_cm' => 104,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1964-06-29',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
            32 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Sally',
              
                'affixe_id' => 22,
               
                'couleur' => NULL,
                'taille_cm' => 103,
                'race_id' =>1,
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1965-03-14',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 1,
                'foetus' => 0,
                'sire_id' => NULL,
                'dam_id' => NULL,
            ),
        ));
        
        
    }
}