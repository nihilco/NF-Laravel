<?php

namespace App\Models;

class Reply extends Base
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
        return '/replies/' . $this->id;
    }

    /**
     * Get all of the owning commentable models.
     */
    public function repliable()
    {
        return $this->morphTo();
    }

    public function threads()
    {
        return $this->morphedByMany(Thread::class, 'resource');
    }
}
