<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CaseNote extends Base
{
    use SoftDeletes;

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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $with = ['creator', 'owner'];

    protected static function boot()
    {
        parent::boot();
    }

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
