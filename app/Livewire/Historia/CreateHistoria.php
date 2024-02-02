<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\HistoriaForm;
use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateHistoria extends Component
{
    public HistoriaForm $form;

    public function render()
    {
        return view('livewire.historia.create-historia');
    }
}
