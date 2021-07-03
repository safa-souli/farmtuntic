<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\transport;
use Faker\Generator as Faker;

$factory->define(transport::class, function (Faker $faker, $param) {
  return [
    'nom' => $faker->word,
    'type' => $faker->word,
    'quantite' => $faker->randomDigitNotNull,
    'image' => 'transport ('.rand(1, 10).').jpg',
    'livreur_id' => $param['livreur_id'],
  ];
});
