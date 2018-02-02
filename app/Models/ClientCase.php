<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ClientCase extends Base
{
    use SoftDeletes;

    protected $table = 'cases';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected static function boot()
    {
	parent::boot();

	static::created(function ($clientCase) {
	    \App\Models\CaseNote::create([
		'creator_id' => auth()->guest() ? 1 : auth()->id(),
		'owner_id' => auth()->guest() ? 1 : auth()->id(),
		'account_id' => $clientCase->account_id,
		'case_id' => $clientCase->id,
		'content' => 'Case created.'		
	    ]);
	});
    }
    
    //
    public function path()
    {
        return '/cases/' . $this->id;
    }

    //
    public function client()
    {
	return $this->belongsTo(Client::class);
    }

    //
    public function notes()
    {
        return $this->hasMany(CaseNote::class, 'case_id')->latest()->get();
    }

    public function settle()
    {
	\App\Models\CaseNote::create([
	    'creator_id' => auth()->guest() ? 1 : auth()->id(),
	    'owner_id' => auth()->guest() ? 1 : auth()->id(),
	    'account_id' => $this->account_id,
	    'case_id' => $this->id,
	    'content' => 'Case settled.'		
	]);

	$this->date_settled_at = \Carbon\Carbon::now();
	$this->save();
    }
}
