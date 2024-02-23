<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\HistoriaPeriodontalForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class HistoriaPeriodontal extends Component
{
    #[Modelable]
    public HistoriaPeriodontalForm $form;
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
        return view('livewire.historia.historia-periodontal');
    }
}
