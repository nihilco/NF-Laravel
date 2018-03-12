<?php

namespace App\Models;

class Priority extends Base
{
    //
    public function path()
    {
        return '/priorities/' . $this->id;
    }
}
