<?php

namespace App\Models;

class CaseNote extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'creator_id',
        'owner_id',
        'account_id',
        'case_id',
        'content',
    ];

    //
    public function path()
    {
        return '/case-notes/' . $this->id;
    }

    public function case()
    {
        return $this->belongsTo(ClientCase::class);
    }
}
