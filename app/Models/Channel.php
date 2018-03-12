<?php

namespace App\Models;

use App\Traits\ActivityTrait;
use App\Traits\FavoriteTrait;

class Channel extends Base
{
    use ActivityTrait, FavoriteTrait;
    
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($channel) {
            $channel->topics()->each->delete();
        });
    }

    //
    public function path()
    {
        return '/channels/' . $this->id;
    }

    public function topics()
    {
	return $this->hasMany(Topic::class);
    }
}
