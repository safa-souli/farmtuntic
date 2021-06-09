<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\forum;
use Faker\Generator as Faker;

$factory->define(forum::class, function (Faker $faker) {
  return [
    'theme' => $faker->sentence(3),
    'description' => $faker->text(500),
    'client_id' => $faker->randomElement(\DB::table('client')->select('id')->get())->id
  ];
});
