<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bid;
use Faker\Generator as Faker;

$factory->define(Bid::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'price' => $faker->randomFloat(2, 50, 1000)
    ];
});
