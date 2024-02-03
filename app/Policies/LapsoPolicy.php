<?php

namespace App\Policies;

use App\Models\Lapso;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class LapsoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Lapso $lapso): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user !== Auth::user()) {
            return false;
        }

        if ($user->role_id == 0) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Lapso $lapso): bool
    {
        if ($user !== Auth::user()) {
            return false;
        }

        if ($user->role_id == 0) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Lapso $lapso): bool
    {
        if ($user !== Auth::user()) {
            return false;
        }

        if ($user->role_id == 0) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Lapso $lapso): bool
    {
        if ($user !== Auth::user()) {
            return false;
        }

        if ($user->role_id == 0) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Lapso $lapso): bool
    {
        if ($user !== Auth::user()) {
            return false;
        }

        if ($user->role_id == 0) {
            return true;
        }

        return false;
    }
}
