<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) use ($factory) {
    return [
        'commentaire' => $faker->text,
        'id_user' => $factory->create(App\User::class)->id,
        'id_image' => $factory->create(App\Images::class)->id,
    ];
});
