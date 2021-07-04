<?php

use Illuminate\Database\Seeder;

class panierTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $clients = App\User::all();
    DB::insert('INSERT INTO `panier` (`ipv4`) VALUES (?);', ['127.0.0.1']);
    foreach ($clients as $client) {
      factory(App\panier::class)->create(['client_id' => $client->id]);
    }
    $paniers = App\panier::all();
    foreach ($paniers as $panier) {
      for ($i = 0; $i < rand(3, 5); $i++) {
        $error = false;
        do {
          try {
            $panier->produits()->attach('', ['produit_id' => App\produit::all()->random()->id]);
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
