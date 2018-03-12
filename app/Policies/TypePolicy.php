<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Type;
use Illuminate\Auth\Access\HandlesAuthorization;

class TypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the type.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Type  $type
     * @return mixed
     */
    public function view(User $user, Type $type)
    {
        //
    }

    /**
     * Determine whether the user can create types.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the type.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Type  $type
     * @return mixed
     */
    public function update(User $user, Type $type)
    {
        //
    }

    /**
     * Determine whether the user can delete the type.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Type  $type
     * @return mixed
     */
    public function delete(User $user, Type $type)
    {
        //
    }
}
