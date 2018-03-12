<?php

namespace App\Models;

class Resource extends Base
{
    //
    public function path()
    {
        return '/resources/' . $this->id;
    }
}
