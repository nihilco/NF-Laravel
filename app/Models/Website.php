<?php

namespace App\Models;

class Website extends Base
{
    //
    public function path()
    {
        return '/websites/' . $this->id;
    }
}
