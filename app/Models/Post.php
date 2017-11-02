<?php

namespace App\Models;

class Post extends Base
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
        return '/posts/' . $this->id;
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'resource');
    }
}
