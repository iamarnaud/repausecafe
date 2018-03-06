<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween($min = 1, $max = 500),
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'genre' => $faker->randomElement(['male', 'female', 'other']),
        'url_img_profil' => $faker->imageUrl(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'description' => $faker->text(),
        'tel' => $faker->phoneNumber,
        'date_naiss' => $faker->date(),
        'en_ligne' => $faker->boolean,
        'notification' => $faker->boolean,
    ];
});
