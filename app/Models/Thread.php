<?php

namespace App\Models;

use App\Traits\ActivityTrait;
use App\Traits\FavoriteTrait;
use App\Traits\FollowTrait;
use App\Traits\ReplyTrait;

class Thread extends Base
{
    use ActivityTrait, FavoriteTrait, FollowTrait, ReplyTrait;
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['topic'];

    protected $appends = ['isFollowing'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($thread) {
            $thread->topic->increment('threads_count');
        });
        
        static::deleted(function ($thread) {
            $thread->topic->decrement('threads_count');
        });
    }

    //
    public function path()
    {
        return '/threads/' . $this->id;
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function getclassAttribute()
    {
        return get_class($this);
    }
}
