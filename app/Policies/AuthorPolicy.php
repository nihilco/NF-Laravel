<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Author;
use Illuminate\Auth\Access\HandlesAuthorization;

class AuthorPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User $user
     * @param  \App\Models\Author $author
     * @return mixed
     */
    public function view(User $user, Author $author)
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
     * @param  \App\Models\Author $author
     * @return mixed
     */
    public function update(User $user, Author $author)
    {
        //
	return $author->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Author $author
     * @return mixed
     */
    public function delete(User $user, Author $author)
    {
        //
	return $author->owner_id === $user->id;
    }
}
