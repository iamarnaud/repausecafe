<?php

use Illuminate\Database\Seeder;

class AmiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ami::class, 5)->create();
    }
}
