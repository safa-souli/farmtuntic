<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\produit;
use Faker\Generator as Faker;

$factory->define(produit::class, function (Faker $faker, $param) {
  return [
    'nom' => $faker->word,
    'prix' => $faker->randomFloat(3,  0, 5000), // nbmaxdecimal numbers ofter cammer
    'stock' => $faker->randomNumber(),
    'image' => 'produit ('.rand(1, 64).').jfif',
    'description' => $faker->text('10000'),
    'ferme_id' => $param['ferme_id']
  ];
});
