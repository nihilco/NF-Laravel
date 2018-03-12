<?php

namespace App\Models;

class Activity extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type',
	    'resource_id',
	    'resource_type',
    ];

    //
    public function path()
    {
        return '/activities/' . $this->id;
    }

    public function resource()
    {
        return $this->morphTo();
    }

    public static function feed($user, $take = 25)
    {
        return static::where('user_id', $user->id)
            ->latest()
            ->with(['resource', 'resource.owner'])
            ->take($take)
            ->get()
            ->groupBy(function ($activity) {
                return $activity->created_at->format('Y-m-d');
            });
    }
}
