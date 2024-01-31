<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\HistoriaOdontologicaForm;
use Livewire\Component;

class HistoriaOdontologica extends Component
{
    public HistoriaOdontologicaForm $form;

    public $title = '';

    public function render()
    {
        return view('livewire.historia.historia-odontologica');
    }
}
