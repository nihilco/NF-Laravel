<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Server;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the server.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Server  $server
     * @return mixed
     */
    public function view(User $user, Server $server)
    {
        //
    }

    /**
     * Determine whether the user can create servers.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the server.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Server  $server
     * @return mixed
     */
    public function update(User $user, Server $server)
    {
        //
    }

    /**
     * Determine whether the user can delete the server.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Server  $server
     * @return mixed
     */
    public function delete(User $user, Server $server)
    {
        //
    }
}
