<?php

namespace App\Models;

use App\Traits\ActivityTrait;
use App\Traits\FavoriteTrait;

class Topic extends Base
{
    use ActivityTrait, FavoriteTrait;
    
    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($topic) {
            $topic->channel->increment('topics_count');
        });
        
        static::deleted(function ($topic) {
            $topic->channel->decrement('topics_count');
        });
    }
    
    //
    public function path()
    {
        return '/topics/' . $this->id;
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
    
    public function topics()
    {
        return $this->hasMany(Topic::class, 'parent_id', 'id');
    }
    
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
