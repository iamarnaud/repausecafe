<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->call(UserTableSeeder::class);
        $this->call(LieuxTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(AmiTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(MessageTableSeeder::class);

    }

}
