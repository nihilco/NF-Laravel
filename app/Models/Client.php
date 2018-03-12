<?php

namespace App\Models;

class Client extends Base
{
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
