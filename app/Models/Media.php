<?php

namespace App\Models;

class Media extends Base
{
    //
    public function path()
    {
        return '/media/' . $this->id;
    }

}
