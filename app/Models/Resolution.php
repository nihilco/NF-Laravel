<?php

namespace App\Models;

class Resolution extends Base
{
    //
    public function path()
    {
        return '/resolutions/' . $this->id;
    }
}
