<?php

namespace App\Models;

use App\Traits\ActivityTrait;
use App\Traits\FavoriteTrait;
use App\Notifications\ReplyToResource;

class Reply extends Base
{
    use ActivityTrait, FavoriteTrait;
	
    protected $hidden = ['resource'];

    protected $with = ['creator', 'owner', 'favorites'];

    protected $appends = ['isFavorited'];

    protected static function boot()
    {
        parent::boot();
        
        //static::created(function ($reply) {
        //    $reply->resource->increment('replies_count');
        //    
        //    if($follows = $reply->resource->follows) {
        //        $follows
        //            //->filter(function ($follow) use ($reply) {
        //            //    return $follow->owner_id != $reply->owner_id;
        //            //})
        //            ->where('owner_id', '!=', $reply->owner_id)
        //            ->each(function ($follow) use ($reply) {
        //                return $follow->owner->notify(new ReplyToResource($reply));
        //            });
        //    }
        //});
        
        //static::deleted(function ($reply) {
        //    $reply->resource->decrement('replies_count');
        //});
    }
    
    //
    public function path()
    {
        return '/replies/' . $this->id;
    }
    
    /**
     * Get all of the owning commentable models.
     */
    //public function resource()
    //{
    //    return $this->morphTo();
    //}
}
