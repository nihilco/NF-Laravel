<?php

namespace App\Models;

class Subscription extends Base
{
    //
    public function path()
    {
        return '/subscriptions/' . $this->id;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
