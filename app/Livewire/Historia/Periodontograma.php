<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\PeriodontogramaForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Periodontograma extends Component
{
    use WithFileUploads;

    #[Modelable]
    public PeriodontogramaForm $form;
    public ?Historia $historia;
    public $title = 'Periodontograma';
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
        return view('livewire.historia.periodontograma');
    }
}
