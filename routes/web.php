<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

//for shop
Route::get('/shops', 'ShopController@index')->name('shops.index');
Route::get('/shops/create', 'ShopController@create')->name('shops.create');
Route::post('/shops', 'ShopController@store')->name('shops.store');
Route::get('/shops/{shop}', 'ShopController@show')->name('shops.show');
Route::get('/shops/{shop}/edit', 'ShopController@edit')->name('shops.edit');
Route::put('/shops/{shop}', 'ShopController@update')->name('shops.update');
Route::delete('/shops/{shop}', 'ShopController@destroy')->name('shops.destroy');

//for category
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('/categories/{category}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');

// for product
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/products/{product}', 'ProductController@update')->name('products.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');

//for type
Route::get('/types', 'TypeController@index')->name('types.index');
Route::get('/types/create', 'TypeController@create')->name('types.create');
Route::post('/types', 'TypeController@store')->name('types.store');
Route::get('/types/{type}', 'TypeController@show')->name('types.show');
Route::get('/types/{type}/edit', 'TypeController@edit')->name('types.edit');
Route::put('/types/{type}', 'TypeController@update')->name('types.update');
Route::delete('/types/{type}', 'TypeController@destroy')->name('types.destroy');

//for customer
Route::get('/customers', 'CustomerController@index')->name('customers.index');
Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
Route::post('/customers', 'CustomerController@store')->name('customers.store');
Route::get('/customers/{customer}', 'CustomerController@show')->name('customers.show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit');
Route::put('/customers/{customer}', 'CustomerController@update')->name('customers.update');
Route::delete('/customers/{customer}', 'CustomerController@destroy')->name('customers.destroy');

//for order-
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
Route::get('/orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('/orders/{order}', 'OrderController@update')->name('orders.update');
Route::delete('/orders/{order}', 'OrderController@destroy')->name('orders.destroy');
