<?php

namespace App\Models;

class Book extends Base
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //
    public function path()
    {
        return '/books/' . $this->slug;
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class)->withTimestamps();
    }

    public function addAuthor($aid)
    {
        return $this->authors()->attach($aid);
    }

    public function isAuthor($aid)
    {
        foreach($this->authors as $author) {
            if($author->id == $aid) {
                return true;
            }
        }

        return false;
    }
}
