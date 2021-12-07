<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Evenement;
use App\Competition;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
       $date => "1970-05-05",
       $competition_id =>factory(App\Competition::class),
    ];
});
