<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\demande;
use Faker\Generator as Faker;

$factory->define(demande::class, function (Faker $faker, $param) {
  return [
    'client_id' => $param['client_id'],
    'etat' => $faker->randomElement(['accepte', 'en attende', 'refuse']),
    'type' => $faker->randomElement(['agriculteur', 'livreur']),
    'certificate' => NULL
  ];
});
