<?php

namespace App\Models;

class Tag extends Base
{
    //
    public function path()
    {
        return '/tags/' . $this->id;
    }

}
