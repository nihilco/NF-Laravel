<?php

namespace App\Models;

class Organization extends Base
{
    //
    public function path()
    {
        return '/organizations/' . $this->id;
    }
}
