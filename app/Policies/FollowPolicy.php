<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Follow;
use Illuminate\Auth\Access\HandlesAuthorization;

class FollowPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the follow.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Follow  $follow
     * @return mixed
     */
    public function view(User $user, Follow $follow)
    {
        //
    }

    /**
     * Determine whether the user can create follows.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the follow.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Follow  $follow
     * @return mixed
     */
    public function update(User $user, Follow $follow)
    {
        //
    }

    /**
     * Determine whether the user can delete the follow.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Follow  $follow
     * @return mixed
     */
    public function delete(User $user, Follow $follow)
    {
        //
    }
}
