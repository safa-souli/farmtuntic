<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\User::class, 40)
      ->create()
      ->each(function ($user) {
        if ($user->type == 'livreur') factory(App\livreur::class)->create(['id' => $user->id]);
        if ($user->type == 'agriculteur') factory(App\agriculteur::class)->create(['id' => $user->id]);
      });
  }
}
