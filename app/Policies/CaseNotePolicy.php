<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CaseNote;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaseNotePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CaseNote $caseNote
     * @return mixed
     */
    public function view(User $user, CaseNote $caseNote)
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
	return true;
    }

    /**
     * Determine whether the user can update the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CaseNote $caseNote
     * @return mixed
     */
    public function update(User $user, CaseNote $caseNote)
    {
        //
	//return $caseNote->owner_id === $user->id;
	return true;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CaseNote $caseNote
     * @return mixed
     */
    public function delete(User $user, CaseNote $caseNote)
    {
        //
	//return $caseNote->owner_id === $user->id;
	return true;
    }
}
