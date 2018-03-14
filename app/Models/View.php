<?php

namespace App\Models;

class View extends Base
{
    //
    public function path()
    {
        return '/views/' . $this->id;
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }
}
