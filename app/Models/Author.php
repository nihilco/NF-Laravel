<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
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
    
    //
    public function path()
    {
        return '/authors/' . $this->id;
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function authors()
    {
	return $this->hasMany(Author::class);
    }

    public function name()
    {
        $ret = $this->first_name;
	if($this->middle_name && $this->middle_name != '')
	{
	    $ret .= ' ' . $this->middle_name;
	}
	$ret .= ' ' . $this->last_name;

	return $ret;
    }
}
