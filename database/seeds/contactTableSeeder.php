<?php

use Illuminate\Database\Seeder;

class contactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\contact::class, 20)->create();
    }
}
