<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'animal_id' => factory(App\Animal::class),
        'allele_p_id' => factory(App\Allele::class),
        'allele_m_id' => factory(App\Allele::class),
        'locus_id' => factory(App\Locus::class),
    ];
});
