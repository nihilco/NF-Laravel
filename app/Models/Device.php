<?php

namespace App\Models;

class Device extends Base
{
    //
    public function path()
    {
        return '/devices/' . $this->id;
    }
}
