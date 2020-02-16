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
                'couleur' => 'bai',
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
                'couleur' => 'alezan crins lavés',
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
                'couleur' => 'palomino',
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
                'couleur' => 'noir',
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
                'created_at' => '2020-02-16 17:06:56',
                'updated_at' => '2020-02-16 18:25:27',
                'nom' => NULL,
                'couleur' => NULL,
                'taille_cm' => NULL,
                'race' => 'Shetland',
                'sexe' => 'mâle',
                'date_achat' => NULL,
                'date_naissance' => '1971-02-01',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 0,
                'foetus' => 0,
                'sire_id' => 3,
                'dam_id' => 2,
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => '2020-02-16 17:07:14',
                'updated_at' => '2020-02-16 18:25:27',
                'nom' => NULL,
                'couleur' => NULL,
                'taille_cm' => NULL,
                'race' => 'OC',
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1971-02-01',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 4,
                'fondateur' => 0,
                'foetus' => 0,
                'sire_id' => 3,
                'dam_id' => 4,
            ),
            6 => 
            array (
                'id' => 8,
                'created_at' => '2020-02-16 17:07:54',
                'updated_at' => '2020-02-16 18:25:51',
                'nom' => NULL,
                'couleur' => NULL,
                'taille_cm' => NULL,
                'race' => 'Shetland',
                'sexe' => 'femelle',
                'date_achat' => NULL,
                'date_naissance' => '1971-03-01',
                'a_vendre' => 0,
                'prix' => NULL,
                'elevage_id' => 1,
                'fondateur' => 0,
                'foetus' => 0,
                'sire_id' => 3,
                'dam_id' => 5,
            ),
        ));
        
        
    }
}