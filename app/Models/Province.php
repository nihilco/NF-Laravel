<?php

namespace App\Models;

class Province extends Base
{
    //
    public function path()
    {
        return '/provinces/' . $this->id;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
