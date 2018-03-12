<?php

namespace App\Models;

class Task extends Base
{
    //
    public function path()
    {
        return '/tasks/' . $this->id;
    }

}
