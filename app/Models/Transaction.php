<?php

namespace App\Models;

class Transaction extends Base
{
    //
    public function path()
    {
        return '/transactions/' . $this->id;
    }

}
