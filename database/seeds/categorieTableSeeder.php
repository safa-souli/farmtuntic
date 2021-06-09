<?php

use Illuminate\Database\Seeder;

class categorieTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\categorie::class, 20)
      ->create()
      ->each(function ($categorie) {
        for ($i = 0; $i < rand(10, 40); $i++) {
          $error = false;
          do { // we used exception to duplicate primary key
            try {
              // attach to associate a row to this categorie without renter categorie_id
              $categorie->produits()->attach('', ['produit_id' => App\produit::all()->random()->id]);
            } catch (PDOException $Exception) {
              if ($Exception->errorInfo[0] == '23000' && $Exception->errorInfo[1] == '1062') {
                $error = true;
              } else {
                throw $Exception;
              }
            }
          } while ($error = false);
        }
      });
  }
}
