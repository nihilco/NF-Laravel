<?php

namespace App\Models;

class Page extends Base
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
        return '/pages/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
