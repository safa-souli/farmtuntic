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
    $commandes = factory(App\commande::class, 50)->create();
    foreach ($commandes as $commande) {
      $faker = Faker\Factory::create();
      for($i = 0; $i < rand(5, 10); $i++)
      {
        $commande->products()->attach('', [
          'etat' => $faker->randomElement(['R','A','P','E', 'L']),
          'quantite' => $faker->rand('1, 100'),
          'produit_id' => App\produit::all()->random()->id
        ]);
      }
    }
  }
}
