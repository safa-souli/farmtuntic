<?php

use Illuminate\Database\Seeder;

class demandeTableSeeder extends Seeder
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
      factory(App\demande::class, 1)->create(['client_id' => $client->id]);
    }
  }
}
