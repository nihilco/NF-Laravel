<?php

namespace App\Models;

class PhoneNumber extends Base
{
    //
    public function path()
    {
        return '/phone-numbers/' . $this->id;
    }
}
