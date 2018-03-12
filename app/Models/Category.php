<?php

namespace App\Models;

class Category extends Base
{
    //
    public function path()
    {
        return '/categories/' . $this->id;
    }

}
