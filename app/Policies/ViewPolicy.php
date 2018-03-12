<?php

namespace App\Policies;

use App\Models\User;
use App\Models\View;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the view.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return mixed
     */
    public function view(User $user, View $view)
    {
        //
    }

    /**
     * Determine whether the user can create views.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the view.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return mixed
     */
    public function update(User $user, View $view)
    {
        //
    }

    /**
     * Determine whether the user can delete the view.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return mixed
     */
    public function delete(User $user, View $view)
    {
        //
    }
}
