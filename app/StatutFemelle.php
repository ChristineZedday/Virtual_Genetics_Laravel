<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\statutsfemelles;
use App\Animal;

/**
 * @mixin IdeHelperStatutFemelle
 */
class StatutFemelle extends Model
{
    protected $table = 'statutsfemelles';
   //Statut de la poulinière 

   public function Initialise($femelle) {
    $this->animal_id = $femelle->id;
    $this->fertilite = 100 - $femelle->consang/2 ;
    
        $this->save();
                    
   }

    public function Femelle()
    {
        return $this->belongsTo('App\Animal');
    }
    public function Male() //Le géniteur si la femelle est pleine
    {
        return $this->hasOne('App\Animal', 'id', 'etalon_id');
    }



    public function confirme($fem) {
       
        if ($fem->modele_allures > 11) {
            $this->confirmee = true;
            $this->save();
        }
    }

    public function labelliseSF($fem) {
       
        if ($fem->modele_allures >= 13) {
            $this->labellisee_SF = true;
            $this->save();
        }
    }
    

}
