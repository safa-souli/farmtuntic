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
        $error = false;
        do {
          try {
            $commande->products()->attach('', [
              'etat' => $faker->randomElement(['R','A','P','E', 'L']),
              'quantite' => rand(1, 100),
              'produit_id' => App\produit::all()->random()->id
            ]);
          } catch (PDOException $Exception) {
            if ($Exception->errorInfo[0] == '23000' && $Exception->errorInfo[1] == '1062') {
              $error = true;
            } else {
              throw $Exception;
            }
          }
        } while ($error = false);
      }
    }
  }
}
