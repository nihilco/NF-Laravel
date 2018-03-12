<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tutorial;
use Illuminate\Auth\Access\HandlesAuthorization;

class TutorialPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tutorial.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutorial  $tutorial
     * @return mixed
     */
    public function view(User $user, Tutorial $tutorial)
    {
        //
    }

    /**
     * Determine whether the user can create tutorials.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tutorial.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutorial  $tutorial
     * @return mixed
     */
    public function update(User $user, Tutorial $tutorial)
    {
        //
    }

    /**
     * Determine whether the user can delete the tutorial.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tutorial  $tutorial
     * @return mixed
     */
    public function delete(User $user, Tutorial $tutorial)
    {
        //
    }
}
