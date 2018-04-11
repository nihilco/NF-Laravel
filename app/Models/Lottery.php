<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Lottery extends Base
{
    use SoftDeletes;

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
    }

    //
    public function path()
    {
        return '/lotteries/' . $this->id;
    }
}
