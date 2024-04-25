<?php

namespace App;

use App\Shop;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
