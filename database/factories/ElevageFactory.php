<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Elevage;
use Faker\Generator as Faker;


$factory->define(Elevage::class, function (Faker $faker) {
    return [
        'nom_eleveur' => $faker->name,
        'nom_elevage' => $faker->name,
       'budget' => 10000,
       'user_id' =>factory(App\User::class),
       'role' =>'Joueur',
      
    ];
});
