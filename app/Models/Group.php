<?php

namespace App\Models;

class Group extends Base
{
    //
    public function path()
    {
        return '/groups/' . $this->id;
    }

}
