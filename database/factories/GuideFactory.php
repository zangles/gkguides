<?php

use Faker\Generator as Faker;

$factory->define(App\Guide::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(10),
        'content' => $faker->paragraph(5),
        'type' => $faker->randomElement([\App\Guide::TYPE_FORMATION,\App\Guide::TYPE_PILOT, \App\Guide::TYPE_GENERAL]),
        'public' => true
    ];
});
