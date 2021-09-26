<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    $min = 000.000;
    $max = 999.999;
    return [
        'title' => $faker->text(10),
        'released' => $faker->date(),
        'director' => $faker->name,
        'critic_score' => $faker->randomFloat(3,$min,$max),
        'user_score' => $faker->randomFloat(3,$min,$max)
    ];
});
