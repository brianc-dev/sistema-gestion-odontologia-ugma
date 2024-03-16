<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\ModificacionesPlanTratamientoForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ModificacionesPlanTratamiento extends Component
{
    #[Modelable]
    public ModificacionesPlanTratamientoForm $form;
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->form->modificacionesPlanTratamiento, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        }
    }

    #[On('modificacionesplan-add')]
    public function addModificacionesPlanTratamiento()
    {
        $plan = [
            'fecha' => '',
            'diente' => '',
            'tratamiento' => ''
        ];
        array_push($this->form->modificacionesPlanTratamiento, $plan);
    }

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
        return view('livewire.historia.modificaciones-plan-tratamiento');
    }
}
