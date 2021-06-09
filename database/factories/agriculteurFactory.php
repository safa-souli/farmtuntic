<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\agriculteur;
use Faker\Generator as Faker;

$factory->define(agriculteur::class, function (Faker $faker, $param) {
  return [
    'id' => $param['id'],
    'domaine' => $faker->text,
    'certificate' => NULL
  ];
});
