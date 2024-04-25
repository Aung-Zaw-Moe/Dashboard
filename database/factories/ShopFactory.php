<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'category_id' => $this->faker->numberBetween($min = 1, $max = 10),
        'name'  => $this->faker->name,
        'image' => $this->faker->imageUrl($width = 100, $height = 100),
        'phone' => $this->faker->phoneNumber,
        'address' => $this->faker->address,
        'description' => $this->faker->text,

    ];
});
