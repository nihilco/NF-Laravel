<?php

namespace App\Models;

class Issue extends Base
{
    //
    public function path()
    {
        return '/issues/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
