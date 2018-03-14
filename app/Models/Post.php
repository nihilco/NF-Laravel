<?php

namespace App\Models;

use App\Traits\FollowTrait;
use App\Traits\ReplyTrait;

class Post extends Base
{
    use FollowTrait, Replytrait;
    
    //
    public function path()
    {
        return '/posts/' . $this->id;
    }

    public function website()
    {
        return $this->belongsTo(Website::class);
    }

    public function replies()
    {
        return $this->morphMany(Reply::class, 'resource');
    }

    public static function archives()
    {
      return static::selectRaw('year(published_at) year, monthname(published_at) month, count(*) count')
        ->groupBy('year', 'month')
        ->orderByRaw('min(published_at) DESC')
        ->get()
        ->toArray();
    }
}
