<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Animal;
use Faker\Generator as Faker;

$factory->define(Animal::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'elevage_id' =>factory(App\Elevage::class),
        'sexe' =>'mâle',
        'couleur' => 'bai',
        'race_id' =>factory(App\Race::class), 
        'id' => 1,
       
    ];
});
