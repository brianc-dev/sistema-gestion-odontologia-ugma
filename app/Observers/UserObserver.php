<?php

namespace App\Observers;

use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        // Check which type of user was created and create the appropriate profile
        $role = $user->role_id;
        switch ($role) {
            // Profesor
            case 2:
                $profesor = new Profesor();
                $profesor->user_id = $user->id;
                $profesor->save();
                break;
            // Estudiante
            case 3:
                $estudiante = new Estudiante();
                $estudiante->user_id = $user->id;
                $estudiante->save();
                break;
        }
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
