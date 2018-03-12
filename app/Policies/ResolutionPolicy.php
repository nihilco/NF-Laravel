<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Resolution;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResolutionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the resolution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Resolution  $resolution
     * @return mixed
     */
    public function view(User $user, Resolution $resolution)
    {
        //
    }

    /**
     * Determine whether the user can create resolutions.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the resolution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Resolution  $resolution
     * @return mixed
     */
    public function update(User $user, Resolution $resolution)
    {
        //
    }

    /**
     * Determine whether the user can delete the resolution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Resolution  $resolution
     * @return mixed
     */
    public function delete(User $user, Resolution $resolution)
    {
        //
    }
}
