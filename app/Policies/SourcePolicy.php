<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Source;
use Illuminate\Auth\Access\HandlesAuthorization;

class SourcePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the source.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Source  $source
     * @return mixed
     */
    public function view(User $user, Source $source)
    {
        //
    }

    /**
     * Determine whether the user can create sources.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the source.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Source  $source
     * @return mixed
     */
    public function update(User $user, Source $source)
    {
        //
    }

    /**
     * Determine whether the user can delete the source.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Source  $source
     * @return mixed
     */
    public function delete(User $user, Source $source)
    {
        //
    }
}
