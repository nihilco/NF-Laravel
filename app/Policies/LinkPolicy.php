<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Link;
use Illuminate\Auth\Access\HandlesAuthorization;

class LinkPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the link.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Link  $link
     * @return mixed
     */
    public function view(User $user, Link $link)
    {
        //
    }

    /**
     * Determine whether the user can create links.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the link.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Link  $link
     * @return mixed
     */
    public function update(User $user, Link $link)
    {
        //
    }

    /**
     * Determine whether the user can delete the link.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Link  $link
     * @return mixed
     */
    public function delete(User $user, Link $link)
    {
        //
    }
}
