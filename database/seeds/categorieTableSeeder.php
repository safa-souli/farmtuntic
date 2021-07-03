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
    factory(App\categorie::class, 20)->create();
  }
}
