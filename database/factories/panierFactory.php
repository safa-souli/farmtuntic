<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\panier;
use Faker\Generator as Faker;

$factory->define(panier::class, function (Faker $faker, $param) {
  return [
    'ipv4' => $faker->ipv4,
    'client_id' => $param['client_id']
  ];
});
