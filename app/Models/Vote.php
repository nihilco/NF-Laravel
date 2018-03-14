<?php

namespace App\Models;

class Vote extends Base
{
    //
    public function path()
    {
        return '/votes/' . $this->id;
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }
}
