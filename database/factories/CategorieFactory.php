<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
       'nom' => 'ponettes',
       'sexe' => 0,
       'age_min' => 3,
       'age_max' => 18,
       'type' => 'Modèle et Allures Race',
      

    ];
});
