<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\PacienteForm;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class Paciente extends Component
{
    #[Modelable]
    public PacienteForm $form;

    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    #[On('historia-editing')]
    public function edit($isEditing)
    {
        $this->enabled = $isEditing;
    }

    public function render()
    {
        return view('livewire.historia.paciente');
    }
}
