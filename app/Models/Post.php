<?php

namespace App\Models;

use App\Traits\FollowTrait;
use App\Traits\ReplyTrait;

class Post extends Base
{
    use FollowTrait, Replytrait;
    
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

    public function replies()
    {
        return $this->morphMany(Reply::class, 'resource');
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
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
