<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'type_id' => $this->faker->numberBetween(1, 10),
        'shop_id' => $this->faker->numberBetween(1, 10),
        'name' => $this->faker->name,
        'image' => $this->faker->imageUrl($width = 100, $height = 100),
        'price' => $this->faker->randomFloat(2, 0, 1000),
        'quantity' => $this->faker->numberBetween(1, 100),
        'description' => $this->faker->text,


    ];
});
