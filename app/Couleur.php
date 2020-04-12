<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\AssoCouleur;

class Couleur extends Model
{
   
    public function Image()
    {
        return $this->belongsTo('App\Image');
    }

    public function Phentotype()
     {
        return $this->belongsToMany('App\Phenotype');
    }
    public function Associee1()
    {
       return $this->hasOne('App\AssoCouleur', 'couleur2_id', 'id');
   }
     
   
   public function Associee2()
   {
      return $this->hasOne('App\AssoCouleur', 'couleur2_id', 'id');
  }

  static function calculeCouleur($tab)
  {
    $couleurs =[];
    $images = [];
    foreach ($tab as $val)
      {
        $assos = AssoCouleur::where('couleur1_id',$val->id)->orWhere('couleur2_id',$val->id)->get();
        if (empty($assos)) {
                $image = $val->Image;
                $images[] =$image;
         }

         else {
             foreach ($assos as $asso) {
                switch (true) { //asso avec 1, asso avec 2 , pas trouvé=image 
                    case $val->id == $asso->couleur1_id:
                        $trouve = in_array($asso->couleur2_id, $tab);
                            if ($trouve) {
                                $id = $val->couleur_res_id; 
                                $couleur = Couleur::Find($id);
                                $couleurs[] = $couleur;
                                unset($tab[array_search($val, $tab)]);
                            } 
                    break;
                    case $val->id == $asso->couleur2_id:
                        $trouve = in_array($asso->couleur1_id, $tab);
                            if ($trouve) {
                                $id = $val->couleur_res_id; 
                                $couleur = Couleur::Find($id);
                                $couleurs[] = $couleur;
                                unset($tab[array_search($val, $tab)]);
                            }
                    break;
                    case
                    break;
                } //end switch
             } //end foreach asso
}
    // }
    //     $images = array_merge($images,)
        

      }
      return $images;
  }
}
    

