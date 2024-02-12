<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\ExamenRadiograficoForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class ExamenRadiografico extends Component
{
    #[Modelable]
    public ExamenRadiograficoForm $form;
    public ?Historia $historia;
    public $title = 'Examen radiográfico';
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
