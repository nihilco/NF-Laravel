<?php

namespace App\Models;

class Status extends Base
{
    //
    public function path()
    {
        return '/statuses/' . $this->id;
    }
}
