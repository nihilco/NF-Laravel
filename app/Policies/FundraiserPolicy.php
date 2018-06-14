<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Fundraiser;
use Illuminate\Auth\Access\HandlesAuthorization;

class FundraiserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Fundraiser  $fundraiser
     * @return mixed
     */
    public function view(User $user, Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Determine whether the user can create products.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Fundraiser  $fundraiser
     * @return mixed
     */
    public function update(User $user, Fundraiser $fundraiser)
    {
        //
    }

    /**
     * Determine whether the user can delete the product.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Fundraiser  $fundraiser
     * @return mixed
     */
    public function delete(User $user, Fundraiser $fundraiser)
    {
        //
    }
}
