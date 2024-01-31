<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use Livewire\Component;

class AntecedentesMedicosPersonales extends Component
{
    public AntecedentesMedicosPersonalesForm $form;

    public string $title = '';

    public function mount($title = '')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-personales');
    }
}
