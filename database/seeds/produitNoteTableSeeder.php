<?php

use Illuminate\Database\Seeder;

class produitNoteTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $produits = App\produit::all();
    foreach ($produits as $produit) {
      for ($i = 0; $i < rand(10, 30); $i++) {
        $error = false;
        do {
          try {
            $produit->notes()->attach('', ['client_id' => App\User::all()->random()->id, 'etoiles' => rand(1, 5)]);
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
