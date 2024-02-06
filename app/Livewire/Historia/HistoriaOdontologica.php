<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\HistoriaOdontologicaForm;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class HistoriaOdontologica extends Component
{
    #[Modelable]
    public HistoriaOdontologicaForm $form;

    public $title = '';
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.historia-odontologica');
    }
}
