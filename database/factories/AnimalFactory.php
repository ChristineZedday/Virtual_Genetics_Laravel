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
        'date_naissance' => '1965-05-15',
       
    ];
 
   
});

$factory->state(App\Animal::class, 'femelle', function (Faker $faker) {
    return [
    'sexe' => 'femelle',
   
];
});
