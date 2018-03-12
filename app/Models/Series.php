<?php

namespace App\Models;

class Series extends Base
{
    //
    public function path()
    {
        return '/series/' . $this->id;
    }
}
