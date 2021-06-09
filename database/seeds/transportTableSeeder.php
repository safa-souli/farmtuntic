<?php

use Illuminate\Database\Seeder;

class transportTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $livreurs = App\livreur::all();
    foreach ($livreurs as $livreur) {
      $livreur->transports()->saveMany(factory(App\transport::class, rand(2, 5))->make(['livreur_id' => $livreur->id]));
    }
  }
}
