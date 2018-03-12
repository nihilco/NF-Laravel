<?php

namespace App\Models;

class Link extends Base
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    //
    public function path()
    {
        return '/links/' . $this->slug;
    }
}
