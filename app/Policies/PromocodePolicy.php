<?php

namespace App\Policies;

use App\Models\Promocode;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PromocodePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        $user->role=="admin" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Promocode $promocode)
    {
        $user->role=="admin" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        $user->role=="admin" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Promocode $promocode)
    {
        $user->role=="admin" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Promocode $promocode)
    {
        $user->role=="admin" ? Response::allow() : Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Promocode $promocode)
    {
        $user->role=="admin" ? Response::allow() : Response::deny('Something wrong you do not own this post.');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Promocode $promocode)
    {
        $user->role=="admin" ? Response::allow():Response::deny('Something wrong you do not own this post.');
    }
}
