<?php

namespace App\Models;

use App\Traits\ActivityTrait;
use App\Traits\FavoriteTrait;

class Forum extends Base
{
    use ActivityTrait, FavoriteTrait;
    
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

    protected static function boot()
    {
        parent::boot();
    
	static::created(function ($forum) {
	    $forum->channel->increment('forums_count');
	});

	static::deleted(function ($forum) {
	    $forum->channel->decrement('forums_count');
	});
    }

    //
    public function path()
    {
        return '/forums/' . $this->id;
    }

    public function threads()
    {
	return $this->hasMany(Thread::class);
    }

    public function forums()
    {
	return $this->hasMany(Forum::class, 'parent_id', 'id');
    }

    public function channel()
    {
	return $this->belongsTo(Channel::class);
    }
}
