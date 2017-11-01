<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
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
        return '/books/' . $this->id;
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
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    public function addAuthor($aid)
    {
        return $this->authors()->attach($aid);
    }
}
