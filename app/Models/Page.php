<?php

namespace App\Models;

class Page extends Base
{
    //
    public function path()
    {
        return '/pages/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
