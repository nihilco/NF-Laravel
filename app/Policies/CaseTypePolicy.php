<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CaseType;
use Illuminate\Auth\Access\HandlesAuthorization;

class CaseTypePolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        
    }
    
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CaseType $caseType
     * @return mixed
     */
    public function view(User $user, CaseType $caseType)
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
     * @param  \App\Models\CaseType $caseType
     * @return mixed
     */
    public function update(User $user, CaseType $caseType)
    {
        //
	return $caseType->owner_id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CaseType $caseType
     * @return mixed
     */
    public function delete(User $user, CaseType $caseType)
    {
        //
	return $caseType->owner_id === $user->id;
    }
}
