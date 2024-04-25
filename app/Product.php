<?php

namespace App;

use App\Order;
use App\Shop;
use App\Type;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['type_id', 'shop_id', 'name', 'image', 'price', 'quantity', 'description'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
