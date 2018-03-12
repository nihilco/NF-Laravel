<?php

namespace App\Models;

class Step extends Base
{
    //
    public function path()
    {
        return '/steps/' . $this->id;
    }
}
