<?php

namespace App\Models;

class Subscription extends Base
{
    //
    public function path()
    {
        return '/subscriptions/' . $this->id;
    }
}
