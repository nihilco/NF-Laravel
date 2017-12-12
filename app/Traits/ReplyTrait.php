<?php

namespace App\Traits;

use App\Models\Reply;

trait ReplyTrait
{
    protected static function bootReplyTrait()
    {
        static::deleting(function ($model) {
	    $model->replies->each->delete();
	});
    }

    public function replies()
    {
	return $this->morphMany(Reply::class, 'resource');
    }
}