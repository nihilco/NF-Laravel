<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Calendar;
use Illuminate\Auth\Access\HandlesAuthorization;

class CalendarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the calendar.
     *
     * @param  \App\Models\User  $user
     * @param  \App\App\Models\Calendar  $calendar
     * @return mixed
     */
    public function view(User $user, Calendar $calendar)
    {
        //
    }

    /**
     * Determine whether the user can create calendars.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the calendar.
     *
     * @param  \App\Models\User  $user
     * @param  \App\App\Models\Calendar  $calendar
     * @return mixed
     */
    public function update(User $user, Calendar $calendar)
    {
        //
    }

    /**
     * Determine whether the user can delete the calendar.
     *
     * @param  \App\Models\User  $user
     * @param  \App\App\Models\Calendar  $calendar
     * @return mixed
     */
    public function delete(User $user, Calendar $calendar)
    {
        //
    }
}
