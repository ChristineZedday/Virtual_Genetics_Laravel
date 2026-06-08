<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'locus_id' => factory(App\Locus::class),
        'nom' => 'Agouti',
        'abbrev' => 'A',
        'is_default' => 1,
        'is_dominant' => 1,
    ];
});
