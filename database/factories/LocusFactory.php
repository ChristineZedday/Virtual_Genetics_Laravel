<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'espece_id' => 1,
        'nom' => 'Agouti Signaling Protein',
        'abbrev' => 'ASIP',
        'chromosome' => 'ECA22q15',
        'linked' => 0,
        'obligatoire' => 1,
        'next_linked_id' => NULL,
        'prev_linked_id' => NULL,
        'taux_recomb_next' => NULL,
    ];
});
