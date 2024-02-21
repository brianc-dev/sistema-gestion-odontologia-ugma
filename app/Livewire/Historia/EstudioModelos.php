<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\EstudioModelosForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class EstudioModelos extends Component
{
    #[Modelable]
    public EstudioModelosForm $form;
    public ?Historia $historia;

    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.estudio-modelos');
    }
}
