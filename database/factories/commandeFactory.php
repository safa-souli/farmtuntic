<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\commande;
use Faker\Generator as Faker;

$factory->define(commande::class, function (Faker $faker) {
    return [
        'total' => 0,
        'methode' => $faker->randomElement(['P', 'E']),
        'description' => $faker->text('10000'),
        'client_id' => App\User::all()->random()->id,
        'livraison_id' => App\livraison::all()->random()->id,
        'produit_id' => App\produit::all()->random()->id
    ];
});
