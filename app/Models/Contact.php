<?php

namespace App\Models;

class Contact extends Base
{
    //
    public function path()
    {
        return '/contacts/' . $this->id;
    }
}
