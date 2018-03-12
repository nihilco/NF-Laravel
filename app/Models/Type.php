<?php

namespace App\Models;

class Type extends Base
{
    //
    public function path()
    {
        return '/types/' . $this->id;
    }
}
