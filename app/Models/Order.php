<?php

namespace App\Models;

class Order extends Base
{
    //
    public function path()
    {
        return '/orders/' . $this->id;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
