<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User $user
     * @param  \App\Models\Book $book
     * @return mixed
     */
    public function view(User $user, Book $book)
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
     * @param  \App\Models\Book $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        //
	return $book->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        //
	return $book->owner_id === $user->id;
    }
}
