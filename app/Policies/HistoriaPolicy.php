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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Historia $historia): bool|Response
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

        // Si el usuario es estudiante y si el estudiante de la historia NO es el mismo estudiante con sesion activa
        if ($user->role_id == 3 AND $historia->estudiante != $user->estudiante) {
                return false;
        }

        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Si el usuario es estudiante
        if ($user->role_id == 3) {
            return true;
        }

        // Sino permitir
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Historia $historia): bool
    {
        if ($user->role_id == 3 and $historia->estudiante == $user->estudiante) {
            return true;
        }

        if ($user->role_id == 2 and $user->profesor == $historia->estudiante->profesor) {
            return true;
        }

        return false;
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
