<?php

use App\Category;
use App\Customer;
use App\Order;
use App\Product;
use App\Shop;
use App\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Shop::class, 5)->create()->each(function ($shop) {
            $shop->save();
        });

        factory(Category::class, 5)->create()->each(function ($category) {
        });

        factory(Product::class, 5)->create()->each(function ($product) {
        });

        factory(Type::class, 5)->create()->each(function ($type) {
        });

        factory(Customer::class, 5)->create()->each(function ($customer) {
        });

        factory(Order::class, 5)->create()->each(function ($order) {
        });
    }
}
