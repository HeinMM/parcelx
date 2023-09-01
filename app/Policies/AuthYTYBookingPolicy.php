<?php

namespace App\Policies;

use App\Models\AuthYTYBooking;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AuthYTYBookingPolicy
{

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): Response
    {
       return $user->role=="admin" || $user->role=="delivery_man" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AuthYTYBooking $authYTYBooking): Response
    {
        return $user->id === $authYTYBooking->user_id || $user->role=="admin" || $user->role=="delivery_man" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        return $user->role === 'user' || $user->role === "admin"  ? Response::allow():Response::deny('Something wrong you should ask to Admin.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AuthYTYBooking $authYTYBooking): Response
    {
        return $user->id === $authYTYBooking->user_id || $user->role=="admin" || $user->role=="delivery_man" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AuthYTYBooking $authYTYBooking): Response
    {
        return $user->id === $authYTYBooking->user_id || $user->role=="admin" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AuthYTYBooking $authYTYBooking): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AuthYTYBooking $authYTYBooking): bool
    {
        //
    }
}
