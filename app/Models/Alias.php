<?php

namespace App\Models;

class Alias extends Base
{
    //
    public function path()
    {
        return '/aliases/' . $this->id;
    }
}
