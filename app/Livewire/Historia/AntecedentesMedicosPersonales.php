<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use Livewire\Component;

class AntecedentesMedicosPersonales extends Component
{
    public AntecedentesMedicosPersonalesForm $form;

    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-personales');
    }
}
