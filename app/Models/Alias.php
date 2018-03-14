<?php

namespace App\Models;

class Alias extends Base
{
    //
    public function path()
    {
        return '/aliases/' . $this->id;
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
