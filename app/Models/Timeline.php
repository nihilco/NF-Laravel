<?php

namespace App\Models;

class Timeline extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'owner_id',
	'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $with = ['creator', 'owner'];

    protected static function boot()
    {
        parent::boot();
    }

    //
    public function path()
    {
        return '/timelines/' . $this->id;
    }

    public function cusotmer()
    {
	return $this->belongsTo(Customer::class);
    }
}
