<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class AntecedentesMedicosPersonales extends Component
{
    #[Modelable]
    public AntecedentesMedicosPersonalesForm $form;
    public ?Historia $historia;
    public string $title = 'Antecedentes Médicos Personales';
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-personales');
    }
}
