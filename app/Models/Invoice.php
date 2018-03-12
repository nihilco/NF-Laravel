<?php

namespace App\Models;

class Invoice extends Base
{
    //
    public function path()
    {
        return '/invoices/' . $this->id;
    }
}
