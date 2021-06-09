<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\transport;
use Faker\Generator as Faker;

$factory->define(transport::class, function (Faker $faker, $param) {
  return [
    'nom' => $faker->word,
    'type' => 'N',
    'livreur_id' => $param['livreur_id'],
  ];
});
