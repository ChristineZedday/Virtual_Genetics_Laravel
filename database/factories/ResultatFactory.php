<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resultat;
use Faker\Generator as Faker;

$factory->define(Resultat::class, function (Faker $faker) {
    return [
        'evenement_id' => 1,
        'categorie_id' => factory(App\Categorie::class),
        'animal_id' =>factory(App\Animal::class),
    ];
});
