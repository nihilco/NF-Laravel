<?php

namespace App\Models;

class Currency extends Base
{
    //
    public function path()
    {
        return '/currencies/' . $this->id;
    }
}
