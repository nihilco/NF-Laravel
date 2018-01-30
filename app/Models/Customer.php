<?php

namespace App\Models;

use App\Traits\ReplyTrait;

class Customer extends Base
{
    //use ReplyTrait;
    
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

    protected $with = ['creator', 'owner'];

    protected static function boot()
    {
	parent::boot();

	static::created(function ($customer) {
	    $customer->timelines()->create([
		'creator_id' => auth()->guest() ? 1 : auth()->id(),
		'owner_id' => auth()->guest() ? 1 : auth()->id(),
		'content' => 'Customer created.'		
	    ]);
	});
    }

    //
    public function path()
    {
        return '/customers/' . $this->id;
    }

    public function getclassAttribute()
    {
        return get_class($this);
    }

    public function timelines()
    {
	return $this->hasMany('App\Models\Timeline')->orderBy('created_at', 'desc');
    }
}
