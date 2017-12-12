<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
}
