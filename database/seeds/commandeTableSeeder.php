<?php

use Illuminate\Database\Seeder;

class commandeTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $clients = App\User::all();
    foreach ($clients as $client) {
      $faker = Faker\Factory::create();
      for($i = 0; $i < rand(5, 10); $i++)
      {
        $client->commandes()->attach('', [
          'total' => 0,
          'etat' => $faker->randomElement(['en cours', 'accepte', 'refuse']),
          'livraison_id' => App\livraison::all()->random()->id,
          'produit_id' => App\produit::all()->random()->id
        ]);
      }
    }
  }
}
