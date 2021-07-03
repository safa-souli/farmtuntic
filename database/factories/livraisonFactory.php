<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\livraison;
use Faker\Generator as Faker;

$factory->define(livraison::class, function (Faker $faker) {
  return [
    'etat' => $faker->randomElement($array = array ('S','E','H','L','O')),
    'date_estimation' => $faker->dateTimeBetween('now', '+7 days'),
    'zone' => $faker->word,
    'agriculteur_id' =>  App\agriculteur::all()->random()->id ,
    'livreur_id' =>  App\livreur::all()->random()->id ,
    'transport_id' => App\transport::all()->random()->matricule
  ];
});
