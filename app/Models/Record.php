<?php

namespace App\Models;

class Record extends Base
{
    //
    public function path()
    {
        return '/records/' . $this->id;
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
