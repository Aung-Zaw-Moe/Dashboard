<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'shop_id' => $this->faker->numberBetween(1, 10),
        'product_id' => $this->faker->numberBetween(1, 10),
        'customer_id' => $this->faker->numberBetween(1, 10),
        'quantity' => $this->faker->numberBetween(1, 100),


    ];
});
