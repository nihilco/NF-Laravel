<?php

namespace App\Traits;

use App\Models\Favorite;

trait FavoriteTrait
{
    protected static function bootFavoriteTrait()
    {
        static::deleting(function ($model) {
	    $model->favorites->each->delete();
	});
    }

    public function incrementFavoritesCount($i = 1)
    {
        return $this->changeFavoritesCount($i);
    }

    public function decrementFavoritesCount($i = 1)
    {
        return $this->changeFavoritesCount((-1 * $i));
    }

    protected function changeFavoritesCount($i)
    {
	$nfc = $this->favorites_count + $i;
	$this->favorites_count = $nfc;
	return $this->save();
    }

    public function favorites()
    {
	return $this->morphMany(Favorite::class, 'resource');
    }

    public function favorite()
    {
        $attributes = ['creator_id' => auth()->id(), 'owner_id' => auth()->id()];

	if(! $this->favorites()->where(['owner_id' => auth()->id()])->exists()) {
            return $this->favorites()->create($attributes);
	}
    }

    public function unfavorite()
    {
	$attributes = ['creator_id' => auth()->id(), 'owner_id' => auth()->id()];

	return $this->favorites()->where($attributes)->get()->each->delete();
    }

    public function isFavorited()
    {
        return !! $this->favorites->where('owner_id', auth()->id())->count();
    }

    public function getIsFavoritedAttribute()
    {
	return $this->isFavorited();
    }
}