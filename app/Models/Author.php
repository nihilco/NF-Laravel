<?php

namespace App\Models;

class Author extends Base
{
    //
    public function path()
    {
        return '/authors/' . $this->id;
    }

    public function books()
    {
	return $this->hasMany(Book::class);
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
