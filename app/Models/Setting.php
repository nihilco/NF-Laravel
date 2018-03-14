<?php

namespace App\Models;

class Setting extends Base
{
    //
    public function path()
    {
        return '/settings/' . $this->id;
    }

    public function valueType()
    {
        return $this->belongsTo(Type::class);
    }

}
