<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\MedicamentoForm;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class Medicamento extends Component
{
    #[Modelable]
    public MedicamentoForm $form;
    public $title = '';

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.medicamento');
    }
}
