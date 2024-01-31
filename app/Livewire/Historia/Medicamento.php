<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\MedicamentoForm;
use Livewire\Component;

class Medicamento extends Component
{

    public MedicamentoForm $form;
    public $title = '';

    public function render()
    {
        return view('livewire.historia.medicamento');
    }
}
