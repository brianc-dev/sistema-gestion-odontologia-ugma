<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\PlanTratamientoForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PlanTratamiento extends Component
{
    #[Modelable]
    public PlanTratamientoForm $form;
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->form->planTratamiento, $index, 1);
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

    public function mount()
    {
        if ($this->historia) {

        }
    }

    #[On('plan-add')]
    public function addPlanTratamiento()
    {
        $plan = [
            'diente' => '',
            'cavidad' => '',
            'tratamiento' => ''
        ];
        array_push($this->form->planTratamiento, $plan);
    }

    public function render()
    {
        return view('livewire.historia.plan-tratamiento');
    }
}
