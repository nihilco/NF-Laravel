<?php

namespace App\Filters;

use App\Models\User;

class ThreadFilters extends Filters
{
    protected $filters = ['by', 'popular', 'unanswered'];

    public function by($name)
    {
	$user = User::where('name', $name)->firstOrFail();

	return $this->builder->where('owner_id', $user->id);
    }

    public function popular()
    {
        return $this->builder->orderBy('replies_count', 'desc');
    }

    public function unanswered()
    {
        return $this->builder->where('replies_count', 0);
    }
}