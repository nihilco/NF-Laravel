<?php

namespace App\Models;

class LineItem extends Base
{
    //
    public function path()
    {
        return '/line-items/' . $this->id;
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
