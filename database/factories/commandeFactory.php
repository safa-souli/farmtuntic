<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\commande;
use Faker\Generator as Faker;

$factory->define(commande::class, function (Faker $faker) {
    return [
        'methode' => $faker->randomElement(['P', 'E']),
        'description' => $faker->text('1000'),
        'client_id' => App\User::all()->random()->id,
        'livraison_id' => App\livraison::all()->random()->id
    ];
});
