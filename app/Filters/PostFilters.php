<?php

namespace App\Filters;

use App\Models\User;

class PostFilters extends Filters
{
    protected $filters = ['by', 'popular', 'year', 'month'];

    public function by($name)
    {
	$user = User::where('name', $name)->firstOrFail();

	return $this->builder->where('owner_id', $user->id);
    }

    public function popular()
    {
        return $this->builder->orderBy('replies_count', 'desc');
    }

    public function year($year)
    {
	return $this->builder->whereYear('published_at', $year);
    }

    public function month($month)
    {
	return $this->builder->whereMonth('published_at', \Carbon\Carbon::parse($month)->month);
    }
}