<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Currency;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Currency  $currency
     * @return mixed
     */
    public function view(User $user, Currency $currency)
    {
        //
    }

    /**
     * Determine whether the user can create currencies.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Currency  $currency
     * @return mixed
     */
    public function update(User $user, Currency $currency)
    {
        //
    }

    /**
     * Determine whether the user can delete the currency.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Currency  $currency
     * @return mixed
     */
    public function delete(User $user, Currency $currency)
    {
        //
    }
}
