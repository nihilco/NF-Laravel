<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Exception;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExceptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the exception.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Exception  $exception
     * @return mixed
     */
    public function view(User $user, Exception $exception)
    {
        //
    }

    /**
     * Determine whether the user can create exceptions.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the exception.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Exception  $exception
     * @return mixed
     */
    public function update(User $user, Exception $exception)
    {
        //
    }

    /**
     * Determine whether the user can delete the exception.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Exception  $exception
     * @return mixed
     */
    public function delete(User $user, Exception $exception)
    {
        //
    }
}
