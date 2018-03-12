<?php

namespace App\Models;

class Session extends Base
{
    //
    public function path()
    {
        return '/sessions/' . $this->id;
    }
}
