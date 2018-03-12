<?php

namespace App\Models;

class Country extends Base
{
    //
    public function path()
    {
        return '/countries/' . $this->id;
    }
}
