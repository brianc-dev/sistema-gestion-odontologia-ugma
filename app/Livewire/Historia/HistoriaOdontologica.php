<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\HistoriaOdontologicaForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class HistoriaOdontologica extends Component
{
    #[Modelable]
    public HistoriaOdontologicaForm $form;

    public ?Historia $historia;
    public $title = 'Historia Odontológica';
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
