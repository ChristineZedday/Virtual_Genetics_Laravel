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
                'couleur' => NULL,
                'taille_cm' => 99,
                'race' => 'Shetland',
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
                'couleur' => NULL,
                'taille_cm' => 102,
                'race' => 'Shetland',
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
                'nom' => 'Diana',
                'couleur' => NULL,
                'taille_cm' => 114,
                'race' => 'Welsh A',
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
                'couleur' => NULL,
                'taille_cm' => 106,
                'race' => 'Shetland',
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
                'nom' => 'Coed Coch Myrrdhin',
                'couleur' => NULL,
                'taille_cm' => 117,
                'race' => 'Welsh A',
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
                'nom' => 'Coed Coch Keridwen',
                'couleur' => NULL,
                'taille_cm' => 111,
                'race' => 'Welsh A',
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
                'couleur' => NULL,
                'taille_cm' => 86,
                'race' => 'OC',
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
        ));
        
        
    }
}