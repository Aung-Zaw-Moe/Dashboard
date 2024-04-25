<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
