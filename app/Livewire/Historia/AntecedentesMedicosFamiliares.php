<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosFamiliaresForm;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class AntecedentesMedicosFamiliares extends Component
{
    #[Modelable]
    public AntecedentesMedicosFamiliaresForm $form;
    public $title = '';

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function mount($title = '') {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-familiares');
    }
}
