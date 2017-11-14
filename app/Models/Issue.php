<?php

namespace App\Models;

class Issue extends Base
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
        return '/issues/' . $this->slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
