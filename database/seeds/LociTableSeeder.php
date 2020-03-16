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
                'abbrev' => 'ASIP',
                'chromosome' => 'ECA22q15',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Melanocortin 1 Receptor',
                'abbrev' => 'MC1R',
                'chromosome' => 'ECA3p12',
                'linked' =>true,
                'next_linked_id' => 3,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => 0.07,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'KIT',
                'abbrev' => 'KIT',
                'chromosome' => 'ECA3q21-22',
                'linked' =>true,
                'next_linked_id' => NULL,
                'prev_linked_id' => 2,
                'taux_recomb_next' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Membrane Associated Transport protein',
                'abbrev' => 'MATP',
                'chromosome' => 'ECA21p17',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'TBX3 Dun',
                'abbrev' => 'TBX3',
                'chromosome' => 'ECA8',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Endothelin receptor type B',
                'abbrev' => 'EDNRB',
                'chromosome' => 'ECA17',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Microphtalmia-associated Transcription Factor',
                'abbrev' => 'MITF',
                'chromosome' => 'ECA16',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Paired Box 3',
                'abbrev' => 'PAX3',
                'chromosome' => 'ECA6',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'espece_id' => 1,
                'nom' => 'Premelanosome protein 17',
                'abbrev' => 'PML17',
                'chromosome' => 'ECA6',
                'linked' =>false,
                'next_linked_id' => NULL,
                'prev_linked_id' => NULL,
                'taux_recomb_next' => NULL,
            ),
        ));
        
        
    }
}