<?php

namespace App\Models;

class View extends Base
{
    //
    public function path()
    {
        return '/views/' . $this->id;
    }
}
