<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Evenement;
use App\Competition;
use Faker\Generator as Faker;

$factory->define(Evenement::class, function (Faker $faker) {
    return [
      'date' => "1970-05-05",
      'nom' => "Concours Welsh",
    ];
});
