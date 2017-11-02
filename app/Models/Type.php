<?php

namespace App\Models;

class Type extends Base
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
        return '/types/' . $this->id;
    }
}
