<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('races')->delete();
        
        \DB::table('races')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'OC',
                'prix_moyen' => 300,
                'frais_enregistrement' => NULL,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Shetland',
                'prix_moyen' => 600,
                'frais_enregistrement' => NULL,
                'taille_min' => 65,
                'taille_max' => 107,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Miniature',
                'prix_moyen' => 900,
                'frais_enregistrement' => 100,
                'taille_min' => 30,
                'taille_max' => 89,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Mountain',
                'prix_moyen' => 1000,
                'frais_enregistrement' => NULL,
                'taille_min' => 90,
                'taille_max' => 121,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 100.0,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Pony',
                'prix_moyen' => 1300,
                'frais_enregistrement' => NULL,
                'taille_min' => 122,
                'taille_max' => 137,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 100.0,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Pony type Cob',
                'prix_moyen' => 1400,
                'frais_enregistrement' => NULL,
                'taille_min' => 122,
                'taille_max' => 137,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 100.0,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Cob',
                'prix_moyen' => 2000,
                'frais_enregistrement' => NULL,
                'taille_min' => 138,
                'taille_max' => 167,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 100.0,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pur-sang Arabe',
                'prix_moyen' => 5000,
                'frais_enregistrement' => NULL,
                'taille_min' => NULL,
                'taille_max' => NULL,
                'approbation' => 0,
                'pcArabe' => 100,
                'pcWelsh' => 0.0,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Demi-sang Arabe',
                'prix_moyen' => 2000,
                'frais_enregistrement' => 150,
                'taille_min' => 30,
                'taille_max' => 215,
                'approbation' => 0,
                'pcArabe' => 50,
                'pcWelsh' => 0.0,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Welsh Part Bred',
                'prix_moyen' => 1000,
                'frais_enregistrement' => 50,
                'taille_min' => 30,
                'taille_max' => 215,
                'approbation' => 0,
                'pcArabe' => 13,
                'pcWelsh' => 0.0,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Français de Selle',
                'prix_moyen' => 1500,
                'frais_enregistrement' => 100,
                'taille_min' => 100,
                'taille_max' => 149,
                'approbation' => 1,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Connemara',
                'prix_moyen' => 1500,
                'frais_enregistrement' => NULL,
                'taille_min' => 128,
                'taille_max' => 148,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pottok livre A',
                'prix_moyen' => 1000,
                'frais_enregistrement' => NULL,
                'taille_min' => 115,
                'taille_max' => 150,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'nom' => 'Pottok Livre B',
                'prix_moyen' => 1000,
                'frais_enregistrement' => 50,
                'taille_min' => 115,
                'taille_max' => 150,
                'approbation' => 0,
                'pcArabe' => 0,
                'pcWelsh' => 0.0,
            ),
        ));
        
        
    }
}