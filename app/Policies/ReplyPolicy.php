<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReplyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the appModelsReply.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Reply  $reply
     * @return mixed
     */
    public function view(User $user, Reply $reply)
    {
        //
    }

    /**
     * Determine whether the user can create appModelsReplies.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the appModelsReply.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Reply  $reply
     * @return mixed
     */
    public function update(User $user, Reply $reply)
    {
        //
	return $reply->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the reply.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Reply  $reply
     * @return mixed
     */
    public function delete(User $user, Reply $reply)
    {
        //
	return $reply->owner_id === $user->id;
    }
}
