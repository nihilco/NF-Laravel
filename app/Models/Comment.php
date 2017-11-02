<?php

namespace App\Models;

class Comment extends Base
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
        return '/comments/' . $this->id;
    }

    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'resource');
    }
}
