<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) use ($factory) {
    return [
        'messages' => $faker->text,
        'id_user' => $factory->create(App\User::class)->id,
        'id_user_n' => $factory->create(App\User::class)->id,


    ];
});
