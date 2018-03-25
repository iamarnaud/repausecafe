<?php

use Faker\Generator as Faker;

$factory->define(App\Images::class, function (Faker $faker) use ($factory) {
    return [
        'nom' => str_random(10),
        'lien' => $faker->word . 'jpeg',
        'description' => $faker->realText(),
        'aime' => $faker->numberBetween($min = 1, $max = 10000),
        'coord_lat' => $faker->latitude,
        'coord_lon' => $faker->longitude,
        'id_lieu' => $factory->create(App\Lieux::class)->id,
        'id_user' => $factory->create(App\User::class)->id,
    ];
});
