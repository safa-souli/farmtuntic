<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
  $sexe = $faker->randomElement(['Femme', 'Homme']);
  if($sexe == 'Homme') $prenom = $faker->firstNameMale;
  else $prenom = $faker->firstNameFemale;
  return [
    'nom' => $faker->lastName,
    'prenom' => $prenom,
    'datenai' => $faker->date('Y-m-d', 'now'),
    'sexe' => $sexe,
    'telephone' => $faker->e164PhoneNumber,
    'email' => $faker->unique()->email,
    'adresse' => $faker->streetAddress,
    'photo' => 'user ('.rand(1, 33).').jpg',
    'email_verified_at' => now(),
    'password' => '$2y$10$2xnl2rPlIQa.ZRN.o3GZz.4uk/ja9C5T06unmYWZVPfzUX/9nObo2', // password
    'remember_token' => Str::random(10),
    'type' => $faker->randomElement(['livreur', 'agriculteur', 'client'])
  ];
});
