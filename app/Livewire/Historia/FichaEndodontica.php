<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\FichaEndodonticaForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class FichaEndodontica extends Component
{
    #[Modelable]
    public FichaEndodonticaForm $form;
    public ?Historia $historia;
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    #[On('historia-editing')]
    public function edit($isEditing)
    {
        $this->enabled = $isEditing;
    }

    public function render()
    {
        return view('livewire.historia.ficha-endodontica');
    }
}
