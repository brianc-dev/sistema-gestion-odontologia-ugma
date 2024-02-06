<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\PeriodontogramaForm;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Periodontograma extends Component
{
    use WithFileUploads;

    #[Modelable]
    public PeriodontogramaForm $form;
    public $title = '';
    public $enabled;

    #[On('errors-show')]
    public function showErrors()
    {
        $this->form->validate();
    }

    public function render()
    {
        return view('livewire.historia.periodontograma');
    }
}
