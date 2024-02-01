<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateButton extends Component
{
    public function createHistoria()
    {
        $this->authorize('create', Historia::class);

        $current_year = date('Y');

        // Generamos el numero de la historia
        $latest_historia = Historia::latest()->first();
        if (isset($latest_historia)) {
            $historia_next_number = $latest_historia->id + 1;
        } else {
            $historia_next_number = 1;
        }

        $historia_next_number = str_pad($historia_next_number, 4, "0", STR_PAD_LEFT);
        $historia_number = 'T-' . $historia_next_number . '-' . $current_year;

        $validator = Validator::make(
            [
                'current_year' => $current_year,
                'historia_number' => $historia_number
            ],
            [
                'current_year' => ['required', 'numeric', 'integer'],
                'historia_number' => ['required', 'string', 'regex:/^T-[\d]{4}-[\d]{4}$/']
            ]);

        if ($validator->fails()) {
            die(500);
        }

        $valid = $validator->validated();

        $estudiante_id = Auth::user()->estudiante->id;

        $historia = Historia::create([
            'numero_historia' => $valid['historia_number'],
            'ano_creacion' => $valid['current_year'],
            'estudiante_id' => $estudiante_id
        ]);

        return redirect()->route('historia.create')->with(['numero_historia' => $historia->numero_historia]);
    }

    public function render()
    {
        return view('livewire.historia.create-button');
    }
}
