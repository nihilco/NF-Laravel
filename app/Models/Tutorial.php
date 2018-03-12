<?php

namespace App\Models;

class Tutorial extends Base
{
    //
    public function path()
    {
        return '/tutorials/' . $this->id;
    }
}
