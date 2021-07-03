<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contact;
use Faker\Generator as Faker;

$factory->define(contact::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $prenom,
        'email' => $faker->unique()->email,
        'message' => $faker->text(500)
    ];
});
