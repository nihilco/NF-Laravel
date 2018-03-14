<?php

namespace App\Models;

class Publisher extends Base
{
    //
    public function path()
    {
        return '/publishers/' . $this->id;
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
