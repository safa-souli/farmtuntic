<?php

use Illuminate\Database\Seeder;

class livraisonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\livraison::class, rand(5,10))->create();
    }
}
