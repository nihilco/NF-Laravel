<?php

namespace App\Models;

class CaseType extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'owner_id',
        'name',
        'description',
        'color',
    ];

    //
    public function path()
    {
        return '/case-types/' . $this->id;
    }
}
