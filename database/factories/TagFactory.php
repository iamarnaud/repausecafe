<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) use ($factory) {
    return [
        'nom' => $faker->randomElement(['belle', 'chaud', 'plage', 'montagne', 'ski']),
        'id_image' => $factory->create(App\Images::class)->id,
        'id_image_n' => $factory->create(App\Images::class)->id,

    ];
});
