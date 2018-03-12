<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Media;
use Illuminate\Auth\Access\HandlesAuthorization;

class MediaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the media.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Media  $media
     * @return mixed
     */
    public function view(User $user, Media $media)
    {
        //
    }

    /**
     * Determine whether the user can create media.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the media.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Media  $media
     * @return mixed
     */
    public function update(User $user, Media $media)
    {
        //
    }

    /**
     * Determine whether the user can delete the media.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Media  $media
     * @return mixed
     */
    public function delete(User $user, Media $media)
    {
        //
    }
}
