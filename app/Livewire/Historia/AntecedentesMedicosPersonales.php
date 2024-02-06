<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosPersonalesForm;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class AntecedentesMedicosPersonales extends Component
{
    #[Modelable]
    public AntecedentesMedicosPersonalesForm $form;
    public string $title = '';
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function mount($title = '')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-personales');
    }
}
