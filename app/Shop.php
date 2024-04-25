<?php

namespace App;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['category_id', 'name', 'image', 'phone', 'address', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'shop_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
