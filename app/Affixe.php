<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affixe extends Model
{
    /*Affixe: partie du nom d'un cheval qui fait référence à son naisseur, la marque de l'élevage en quelque sorte:
    Exemple "Coed Coch" dans "Coed Coch Bllaen Lleuad", affixe préfixé, "de Bois-Guilbert" dans "Bobine de Bois-Guilbert", affixe postfixé*/

    protected $fillable = ['libelle', 'affixe_pre'];

    public function Elevage()
    {
        return $this->hasOne('App\Elevage');
    }

    public function Animal()
    {
        return $this->HasMany('App\Animaux');
    }
}
