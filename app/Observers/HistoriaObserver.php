<?php

namespace App\Observers;

use App\Models\Historia;
use App\Models\Paciente;

class HistoriaObserver
{
    /**
     * Handle the Historia "created" event.
     */
    public function created(Historia $historia): void
    {
        $paciente = new Paciente();
        $paciente->historia_id = $historia->id;
        $paciente->save();


    }

    /**
     * Handle the Historia "updated" event.
     */
    public function updated(Historia $historia): void
    {
        //
    }

    /**
     * Handle the Historia "deleted" event.
     */
    public function deleted(Historia $historia): void
    {
        //
    }

    /**
     * Handle the Historia "restored" event.
     */
    public function restored(Historia $historia): void
    {
        //
    }

    /**
     * Handle the Historia "force deleted" event.
     */
    public function forceDeleted(Historia $historia): void
    {
        //
    }
}
