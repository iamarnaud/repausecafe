<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'nom' => 'Pig',
            'prenom' => 'Peppa',
            'description' => 'Georges is my brother',
            'email' => 'peppa@pig.com',
            'password' => bcrypt('1111111'),
        ]);
        DB::table('users')->insert([
            'nom' => 'Bond',
            'prenom' => 'James',
            'description' => 'My name is Bond, James Bond',
            'email' => 'james@bond.com',
            'password' => bcrypt('7777777'),
        ]);
        DB::table('users')->insert([
            'nom' => 'Mas',
            'prenom' => 'Jeanne',
            'description' => 'En rouge et noir, j\'exilerai ma peur',
            'email' => 'jeanne@mas.com',
            'password' => bcrypt('1111111'),
        ]);
    }
}
