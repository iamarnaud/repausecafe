<?php

use Faker\Generator as Faker;

$factory->define(App\Ami::class, function (Faker $faker) use ($factory) {
    return [
        'anniversaire_amitie' => $faker->dateTime,
        'id' => $factory->create(App\User::class)->id,
        'id_n' => $factory->create(App\User::class)->id,
    ];
});
