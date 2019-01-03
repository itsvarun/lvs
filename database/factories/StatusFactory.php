<?php

use Faker\Generator as Faker;

$factory->define(App\Status::class, function (Faker $faker) {
    return [
        'user' => $faker->name,
        'text' => $faker->paragraph
    ];
});
