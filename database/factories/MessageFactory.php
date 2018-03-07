<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) use ($factory) {
    return [
        'messages' => $faker->text,
        'date_envoi' => $faker->dateTime,
        'id' => $factory->create(App\User::class)->id,
        'id_n' => $factory->create(App\User::class)->id,


    ];
});
