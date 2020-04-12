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
   $assos = [];
    $images = [];
    foreach ($tab as $val)
    {
        if ($val->image_id)
        {
           $images[]=Image::Find($val->image_id);
        }
        else {
            switch(true) {
                case $val->base_couleur:
                    switch($val->nom) {
                        case 'noirbai':
                           $assos[]='noirbai';
                        break;
                        case 'alezanbai':
                            $assos[]='alezanbai';
                        break;
                        case 'alezannoir':
                            $assos[]='alezannoir';
                        break;
            }
            if (in_array('noirbai',$assos) && in_array('alezannoir', $assos))
            {
                $couleur = Couleur::where('nom', 'noir')->first();
               
            }
            else  if (in_array('noirbai',$assos) && in_array('alezanbai', $assos))
            {
                $couleur = Couleur::where('nom', 'bai')->first();

            } 
            else{
                dd('jcomprenons point');
            }
            $image = $couleur->Image;
            $images[]= $image;   
            }

        }

    }
  
    return $images;
  }
}
    

