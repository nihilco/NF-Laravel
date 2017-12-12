<?php

namespace App\Traits;

trait FollowTrait
{
    protected static function bootFollowTrait()
    {

    }

    public function follows()
    {
	return $this->morphMany(\App\Models\Follow::class, 'resource');
    }

    public function follow($uid = null)
    {
        $this->follows()->create([
	    'creator_id' => $uid ?: auth()->id(),
	    'owner_id' => $uid ?: auth()->id(),
	]);
    }

    public function unfollow($uid = null)
    {
        $this->follows()->where('owner_id', $uid ?: auth()->id())->delete();
    }

    public function isFollowing()
    {
        return !! $this->follows()->where('owner_id', auth()->id())->count();
    }

    public function getIsFollowingAttribute()
    {
        return $this->isFollowing();
    }
}