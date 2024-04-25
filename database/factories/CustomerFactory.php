<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [

        'name'  => $this->faker->name,
        'phone' => $this->faker->phoneNumber,
        'email' => $this->faker->email,
        'address' => $this->faker->address,

    ];
});
