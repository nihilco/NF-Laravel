<?php

namespace App\Policies;

use App\Models\User;
use App\Models\LineItem;
use Illuminate\Auth\Access\HandlesAuthorization;

class LineItemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the lineItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LineItem  $lineItem
     * @return mixed
     */
    public function view(User $user, LineItem $lineItem)
    {
        //
    }

    /**
     * Determine whether the user can create lineItems.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the lineItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LineItem  $lineItem
     * @return mixed
     */
    public function update(User $user, LineItem $lineItem)
    {
        //
    }

    /**
     * Determine whether the user can delete the lineItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\LineItem  $lineItem
     * @return mixed
     */
    public function delete(User $user, LineItem $lineItem)
    {
        //
    }
}
