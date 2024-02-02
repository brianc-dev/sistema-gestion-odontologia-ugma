<?php

namespace App\Policies;

use App\Models\Historia;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class HistoriaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Historia $historia): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool|Response
    {
        // Denegar si...
        // Si el usuario NO esta autenticado
        if (!Auth::check()) {
            return false;
        }

        // Si el usuario que pide la solicitud NO es el mismo logueado
        if (Auth::user() !== $user) {
            return false;
        }

        // Si el usuario NO es estudiante
        if (Auth::user()->role_id != 3) {
            return false;
        }

        // Sino permitir
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Historia $historia): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Historia $historia): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Historia $historia): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Historia $historia): bool
    {
        //
    }
}
