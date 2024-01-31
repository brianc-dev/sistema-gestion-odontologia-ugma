<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\AntecedentesMedicosFamiliaresForm;
use Livewire\Component;

class AntecedentesMedicosFamiliares extends Component
{

    public AntecedentesMedicosFamiliaresForm $form;
    public $title = '';

    public function mount($title = '') {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.historia.antecedentes-medicos-familiares');
    }
}
