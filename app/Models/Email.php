<?php

namespace App\Models;

class Email extends Base
{
    //
    public function path()
    {
        return '/emails/' . $this->id;
    }

}
