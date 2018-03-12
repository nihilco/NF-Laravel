<?php

namespace App\Models;

class Record extends Base
{
    //
    public function path()
    {
        return '/records/' . $this->id;
    }
}
