<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\produit;
use Faker\Generator as Faker;

$factory->define(produit::class, function (Faker $faker, $param) {
  return [
    'nom' => $faker->word,
    'promotion' => $faker->numberBetween(1,99),
    'prix' => $faker->randomFloat(3,  0, 5000), // nbmaxdecimal numbers ofter cammer
    'image' => 'produit ('.rand(1, 64).').jfif',
    'description' => $faker->text('10000'),
    'caracteristics' => json_encode(["nom_car" => $faker->word(), 
    "nom_car" => $faker->word()]),
    'categorie_id' => App\categorie::all()->random()->id,
    'ferme_id' => $param['ferme_id']
  ];
});
