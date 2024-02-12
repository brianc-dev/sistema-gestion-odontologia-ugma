<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosFamiliaresForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class AntecedentesMedicosFamiliares extends Component
{
    #[Modelable]
    public AntecedentesMedicosFamiliaresForm $form;
    public ?Historia $historia;
    public $title = 'Antecedentes Médicos Familiares';
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-familiares');
    }
}
