<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\livreur;
use Faker\Generator as Faker;

$factory->define(livreur::class, function (Faker $faker, $param) {
  return [
    'id' => $param['id'],
    'nom_entreprise' => $faker->word,
    'adresse_entreprise' => $faker->streetAddress,
    'telephone_entreprise' => $faker->e164PhoneNumber,
    'certificate' => NULL
  ];
});
