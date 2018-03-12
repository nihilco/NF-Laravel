<?php

namespace App\Models;

class Source extends Base
{
    //
    public function path()
    {
        return '/sources/' . $this->id;
    }
}
