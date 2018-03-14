<?php

namespace App\Models;

class Resource extends Base
{
    //
    public function path()
    {
        return '/resources/' . $this->id;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
