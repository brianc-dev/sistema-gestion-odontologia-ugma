<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\PacienteForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class Paciente extends Component
{
    #[Modelable]
    public PacienteForm $form;
    public ?Historia $historia;
    public $title = 'Datos personales del paciente';
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
