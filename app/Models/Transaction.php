<?php

namespace App\Models;

class Transaction extends Base
{
    //
    public function path()
    {
        return '/transactions/' . $this->id;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
