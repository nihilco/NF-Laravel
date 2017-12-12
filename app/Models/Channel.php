<?php

namespace App\Models;

use App\Traits\ActivityTrait;
use App\Traits\FavoriteTrait;

class Channel extends Base
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

    protected $with = ['creator'];

    protected static function boot()
    {
        parent::boot();

	static::deleting(function ($channel) {
	    $channel->forums()->delete();
	});
    }

    //
    public function path()
    {
        return '/channels/' . $this->id;
    }

    public function forums()
    {
	return $this->hasMany(Forum::class);
    }
}
