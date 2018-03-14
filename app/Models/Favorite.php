<?php

namespace App\Models;

use App\Traits\ActivityTrait;

class Favorite extends Base
{
    use ActivityTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'owner_id',
    ];

    protected static function boot()
    {
        parent::boot();

        //static::created(function ($favorite) {
        //    $favorite->resource->incrementFavoritesCount();
        //});

        //static::deleted(function ($favorite) {
        //    $favorite->resource->decrementFavoritesCount();
        //});
    }
    
    //
    public function path()
    {
        return '/favorites/' . $this->id;
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
        return $this->belongsTo(resource::class);
    }
}
