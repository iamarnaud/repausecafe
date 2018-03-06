<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) use ($factory) {
    return [
        'date_com' => $faker->dateTime,
        'commentaire' => $faker->text,
        'com_eph' => $faker->text,
        'id' => $factory->create(App\User::class)->id,
        'id_image' => $factory->create(App\Images::class)->id,
    ];
});
