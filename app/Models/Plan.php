<?php

namespace App\Models;

class Plan extends Base
{
    //
    public function path()
    {
        return '/plans/' . $this->id;
    }

}
