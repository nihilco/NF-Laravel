<?php

namespace App\Models;

class Calendar extends Base
{
    //
    public function path()
    {
        return '/calendars/' . $this->id;
    }

}
