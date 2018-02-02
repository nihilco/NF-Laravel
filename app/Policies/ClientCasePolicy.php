<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ClientCase;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientCasePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClientCase $clientCase
     * @return mixed
     */
    public function view(User $user, ClientCase $clientCase)
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
     * @param  \App\Models\ClientCase $clientCase
     * @return mixed
     */
    public function update(User $user, ClientCase $clientCase)
    {
        //
	return $clientCase->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClientCase $clientCase
     * @return mixed
     */
    public function delete(User $user, ClientCase $clientCase)
    {
        //
	return $clientCase->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ClientCase $clientCase
     * @return mixed
     */
    public function settle(User $user, ClientCase $clientCase)
    {
        //
	return $clientCase->owner_id === $user->id;
    }

}
