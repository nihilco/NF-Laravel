<?php

namespace App\Models;

class Exception extends Base
{
    //
    public function path()
    {
        return '/exceptions/' . $this->id;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
