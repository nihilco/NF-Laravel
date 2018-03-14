<?php

namespace App\Models;

class Address extends Base
{
    //
    public function path()
    {
        return '/addresses/' . $this->id;
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
