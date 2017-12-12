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
    protected $hidden = ['forum'];

    protected $with = ['creator', 'owner'];

    protected $appends = ['isFollowing'];

    protected static function boot()
    {
        parent::boot();

	static::created(function ($thread) {
	    $thread->forum->increment('threads_count');
	});

	static::deleted(function ($thread) {
	    $thread->forum->decrement('threads_count');
	});
    }

    //
    public function path()
    {
        return '/threads/' . $this->id;
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function getclassAttribute()
    {
        return get_class($this);
    }
}
