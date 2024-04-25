<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'name' => $this->faker->randomElement(['Electronics', 'Clothing', 'Books', 'Furniture']),
    ];
});
