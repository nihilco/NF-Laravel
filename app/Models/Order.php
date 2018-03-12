<?php

namespace App\Models;

class Order extends Base
{
    //
    public function path()
    {
        return '/orders/' . $this->id;
    }
}
