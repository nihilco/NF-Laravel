<?php

namespace App\Models;

class LineItem extends Base
{
    //
    public function path()
    {
        return '/line-items/' . $this->id;
    }
}
