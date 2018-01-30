<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customer  $customer
     * @return mixed
     */
    public function view(User $user, Customer $customer)
    {
        //
	return $customer->account_id === config('view.account_id');
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
	return ($user->id > 0);
    }

    /**
     * Determine whether the user can update the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customer $customer
     * @return mixed
     */
    public function update(User $user, Customer $customer)
    {
        //
	return $customer->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Customer  $customer
     * @return mixed
     */
    public function delete(User $user, Customer $customer)
    {
        //
	return $customer->owner_id === $user->id;
    }
}
