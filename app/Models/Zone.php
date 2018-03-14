<?php

namespace App\Models;

class Zone extends Base
{
    //
    public function path()
    {
        return '/zones/' . $this->id;
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
