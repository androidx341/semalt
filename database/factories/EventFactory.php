<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'caption' => sprintf('%s (%s)', $faker->company, $faker->streetAddress)
    ];
});
