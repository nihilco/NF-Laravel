<?php

namespace App\Models;

class Source extends Base
{
    //
    public function path()
    {
        return '/sources/' . $this->id;
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
