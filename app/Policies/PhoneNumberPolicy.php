<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PhoneNumber;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhoneNumberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the phoneNumber.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return mixed
     */
    public function view(User $user, PhoneNumber $phoneNumber)
    {
        //
    }

    /**
     * Determine whether the user can create phoneNumbers.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the phoneNumber.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return mixed
     */
    public function update(User $user, PhoneNumber $phoneNumber)
    {
        //
    }

    /**
     * Determine whether the user can delete the phoneNumber.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PhoneNumber  $phoneNumber
     * @return mixed
     */
    public function delete(User $user, PhoneNumber $phoneNumber)
    {
        //
    }
}
