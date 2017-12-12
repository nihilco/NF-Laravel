<?php

namespace App\Models;

use App\Traits\ReplyTrait;

class Customer extends Base
{
    use ReplyTrait;
    
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

    //
    public function path()
    {
        return '/customers/' . $this->id;
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function getclassAttribute()
    {
        return get_class($this);
    }
}
