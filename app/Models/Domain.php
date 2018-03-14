<?php

namespace App\Models;

class Domain extends Base
{
    //
    public function path()
    {
        return '/domains/' . $this->id;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
