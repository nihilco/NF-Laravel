<?php

namespace App\Models;

class Invoice extends Base
{
    //
    public function path()
    {
        return '/invoices/' . $this->id;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
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
