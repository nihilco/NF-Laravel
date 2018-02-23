<?php

namespace App\Filters;

use App\Models\User;

class CaseFilters extends Filters
{
    protected $filters = ['active', 'closed', 'client', 'case', 'type'];

    public function active()
    {
	return $this->builder->where('date_settled_at', '=', null);
    }

    public function closed()
    {
        return $this->builder->where('date_settled_at', '!=', null);
    }

    public function client()
    {
        return $this->builder->join('clients', 'cases.client_id', '=', 'clients.id')->select('cases.*')->orderBy('clients.name', 'ASC');
    }

    public function case()
    {
        return $this->builder->orderBy('name', 'ASC');
    }

    public function type()
    {
        return $this->builder->orderBy('case_type_id', 'ASC');
    }
}