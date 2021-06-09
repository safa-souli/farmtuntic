<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ferme;
use Faker\Generator as Faker;

$factory->define(ferme::class, function (Faker $faker, $param) {
  return [
    'nom' => $faker->word,
    'image' => 'ferme ('.rand(1, 20).').jpg',
    'adresse' => $faker->streetAddress,
    'telephone' => $faker->e164PhoneNumber,
    'email' => $faker->companyEmail,
    'description' => $faker->text(500),
    'agriculteur_id' => $param['agriculteur_id']
  ];
});
