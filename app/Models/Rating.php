<?php

namespace App\Models;

class Rating extends Base
{
    //
    public function path()
    {
        return '/ratings/' . $this->id;
    }
}
