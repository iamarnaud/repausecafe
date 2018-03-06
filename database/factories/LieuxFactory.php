<?php

use Faker\Generator as Faker;

$factory->define(App\Lieux::class, function (Faker $faker) {

    return [
        'pays' => $faker->country,
        'ville' => $faker->city,
        'region' => $faker->address,
    ];
});
