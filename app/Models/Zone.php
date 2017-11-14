<?php

namespace App\Models;

class Zone extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    //
    public function path()
    {
        return '/zones/' . $this->id;
    }
}
