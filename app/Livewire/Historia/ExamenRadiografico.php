<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\ExamenRadiograficoForm;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class ExamenRadiografico extends Component
{
    #[Modelable]
    public ExamenRadiograficoForm $form;
    public $title = '';
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.examen-radiografico');
    }
}
