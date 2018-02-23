<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CaseType extends Base
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
	'name',
	'description',
	'color',
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
        return '/case-types/' . $this->id;
    }
}
