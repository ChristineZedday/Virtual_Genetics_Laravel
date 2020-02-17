<?php

use Illuminate\Database\Seeder;

class LociTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loci')->delete();
        
        \DB::table('loci')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Agouti Signaling Protein',
                'abbr' => 'ASIP',
                'chromosome' => 'ECA22q15',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Melanocortin 1 Receptor',
                'abbr' => 'MC1R',
                'chromosome' => 'ECA3p12',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'KIT',
                'abbr' => 'KIT',
                'chromosome' => 'ECA3q21-22',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Membrane Associated Transport protein',
                'abbr' => 'MATP',
                'chromosome' => 'ECA21p17',
            ),
            4 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'TBX3 Dun',
                'abbr' => 'TBX3',
                'chromosome' => 'ECA8',
            ),
            5 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Endothelin receptor type B',
                'abbr' => 'EDNRB',
                'chromosome' => 'ECA17',
            ),
            6 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Microphtalmia-associated Transcription Factor',
                'abbr' => 'MITF',
                'chromosome' => 'ECA16',
            ),
            7 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Paired Box 3',
                'abbr' => 'PAX3',
                'chromosome' => 'ECA6',
            ),
            8 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Premelanosome protein 17',
                'abbr' => 'PML17',
                'chromosome' => 'ECA6',
            ),
        ));
        
        
    }
}