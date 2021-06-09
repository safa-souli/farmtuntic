<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\livraison;
use Faker\Generator as Faker;

$factory->define(livraison::class, function (Faker $faker) {
  return [
    'trajectoire' => $faker->word,
    'transport_id' => App\transport::all()->random()->matricule
  ];
});
