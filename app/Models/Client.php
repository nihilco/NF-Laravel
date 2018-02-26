<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Base
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

	//static::deleting(function ($client) {
	//    $client->cases()->each->delete();
	//});
    }

    //
    public function path()
    {
        return '/clients/' . $this->id;
    }

    //
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    //
    public function cases()
    {
	return $this->hasMany(ClientCase::class);
    }

    //
    public function activeCases()
    {
	return $this->hasMany(ClientCase::class)->where('date_settled_at', '=', null);
    }

    //
    public function settledCases()
    {
	return $this->hasMany(ClientCase::class)->where('date_settled_at', '!=', null);
    }
}
