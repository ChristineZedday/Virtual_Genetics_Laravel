<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Competition;
use Faker\Generator as Faker;

$factory->define(Competition::class, function (Faker $faker) {
    return [
        'nom' => 'concours général',
        'niveau' => 'régional',
        'prix_inscription' => 10,
        'prix_premier' => 100,
        
    ];
});
