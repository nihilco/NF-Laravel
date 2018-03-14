<?php

namespace App\Models;

class Follow extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'owner_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['resource'];

    protected $appends = ['isFollowed'];

    //
    public function path()
    {
        return '/follows/' . $this->id;
    }

    /**
     * Get all of the owning commentable models.
     */
    //public function resource()
    //{
    //    return $this->morphTo();
    //}

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }
}
