<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Priority;
use Illuminate\Auth\Access\HandlesAuthorization;

class PriorityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the priority.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Priority  $priority
     * @return mixed
     */
    public function view(User $user, Priority $priority)
    {
        //
    }

    /**
     * Determine whether the user can create priorities.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the priority.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Priority  $priority
     * @return mixed
     */
    public function update(User $user, Priority $priority)
    {
        //
    }

    /**
     * Determine whether the user can delete the priority.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Priority  $priority
     * @return mixed
     */
    public function delete(User $user, Priority $priority)
    {
        //
    }
}
