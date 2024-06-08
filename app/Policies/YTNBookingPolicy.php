<?php

namespace App\Policies;

use App\Models\User;
use App\Models\YTNBooking;
use Illuminate\Auth\Access\Response;

class YTNBookingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, YTNBooking $yTNBooking)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, YTNBooking $yTNBooking)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, YTNBooking $yTNBooking)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, YTNBooking $yTNBooking)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, YTNBooking $yTNBooking)
    {
        //
    }
}
