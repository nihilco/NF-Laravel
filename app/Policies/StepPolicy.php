<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Step;
use Illuminate\Auth\Access\HandlesAuthorization;

class StepPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the step.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Step  $step
     * @return mixed
     */
    public function view(User $user, Step $step)
    {
        //
    }

    /**
     * Determine whether the user can create steps.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the step.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Step  $step
     * @return mixed
     */
    public function update(User $user, Step $step)
    {
        //
    }

    /**
     * Determine whether the user can delete the step.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Step  $step
     * @return mixed
     */
    public function delete(User $user, Step $step)
    {
        //
    }
}
