<?php

namespace App\Models;

class Fundraiser extends Base
{
    //
    public function path()
    {
        return '/fundraisers/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
