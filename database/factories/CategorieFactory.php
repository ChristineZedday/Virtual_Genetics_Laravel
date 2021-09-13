<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
       'nom' => 'ponettes',
       'sexe' => 'femelle',
       'age_min' => 3,
       'age_max' => 18,
       'race_id' =>factory(App\Race::class),

    ];
});
