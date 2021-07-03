<?php

use Illuminate\Database\Seeder;

class forumTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\forum::class, 30)
      ->create()
      ->each(function ($forum) {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < rand(3, 7); $i++) {
          $forum->commentaires()->attach('', [
            'forum_id' => $forum->id,
            'client_id' => App\User::all()->random()->id,
            'commentaire' => $faker->paragraph
          ]);
        }
      });
    $commentaires = App\forum_commentaire::all();
    foreach ($commentaires as $commentaire)
    {
      $faker = Faker\Factory::create();
      for ($i = 0; $i < rand(3, 7); $i++) {
        $commentaire->repondes()->attach('', [
          'reponde' => $faker->paragraph,
          'client_id' => App\User::all()->random()->id
        ]);
      }
    }
  }
}
