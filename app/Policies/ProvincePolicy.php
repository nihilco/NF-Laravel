<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Province;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThreadPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province $province
     * @return mixed
     */
    public function view(User $user, Province $province)
    {
        //
    }

    /**
     * Determine whether the user can create threads.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province $province
     * @return mixed
     */
    public function update(User $user, Province $province)
    {
        //
	return $province->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province $province
     * @return mixed
     */
    public function delete(User $user, Province $province)
    {
        //
	return $province->owner_id === $user->id;
    }
}
