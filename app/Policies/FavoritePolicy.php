<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Favorite;
use Illuminate\Auth\Access\HandlesAuthorization;

class FavoritePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the favorite.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Favorite  $favorite
     * @return mixed
     */
    public function view(User $user, Favorite $favorite)
    {
        //
    }

    /**
     * Determine whether the user can create favorites.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the favorite.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Favorite  $favorite
     * @return mixed
     */
    public function update(User $user, Favorite $favorite)
    {
        //
    }

    /**
     * Determine whether the user can delete the favorite.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Favorite  $favorite
     * @return mixed
     */
    public function delete(User $user, Favorite $favorite)
    {
        //
    }
}
