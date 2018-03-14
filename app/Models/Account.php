<?php

namespace App\Models;

class Account extends Base
{
    //
    public function path()
    {
        return '/accounts/' . $this->id;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
