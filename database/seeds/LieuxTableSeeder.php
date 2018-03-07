<?php

use Illuminate\Database\Seeder;

class LieuxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lieux::class, 20)->create();

    }
}
