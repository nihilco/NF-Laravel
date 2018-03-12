<?php

namespace App\Models;

class Address extends Base
{
    //
    public function path()
    {
        return '/addresses/' . $this->id;
    }
}
