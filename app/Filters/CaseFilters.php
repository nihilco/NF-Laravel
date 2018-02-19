<?php

namespace App\Filters;

use App\Models\User;

class CaseFilters extends Filters
{
    protected $filters = ['active', 'closed'];

    public function active()
    {
	return $this->builder->where('date_settled_at', '=', null);
    }

    public function closed()
    {
        return $this->builder->where('date_settled_at', '!=', null);
    }
}