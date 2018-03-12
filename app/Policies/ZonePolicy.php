<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Zone;
use Illuminate\Auth\Access\HandlesAuthorization;

class ZonePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the zone.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zone  $zone
     * @return mixed
     */
    public function view(User $user, Zone $zone)
    {
        //
    }

    /**
     * Determine whether the user can create zones.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the zone.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zone  $zone
     * @return mixed
     */
    public function update(User $user, Zone $zone)
    {
        //
    }

    /**
     * Determine whether the user can delete the zone.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Zone  $zone
     * @return mixed
     */
    public function delete(User $user, Zone $zone)
    {
        //
    }
}
