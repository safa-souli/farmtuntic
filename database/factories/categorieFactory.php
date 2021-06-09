<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\categorie;
use Faker\Generator as Faker;

$factory->define(categorie::class, function (Faker $faker) {
    return [
        'nom' => $faker->word
    ];
});
