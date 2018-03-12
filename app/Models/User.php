<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Base implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract    
{
    use Notifiable, SoftDeletes, Authenticatable, Authorizable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'birthday',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email', 'birthday',
    ];

    //protected $with = ['creator', 'owner'];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function path()
    {
        return '/users/' . $this->username;
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class, 'owner_id');
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    public function initials()
    {
        $words = explode(" ", $this->name);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= $w[0];
        }
	
        return $acronym;
    }

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
