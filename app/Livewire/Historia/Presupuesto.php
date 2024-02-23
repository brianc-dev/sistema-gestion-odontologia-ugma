<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\PresupuestoForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Presupuesto extends Component
{
    #[Modelable]
    public PresupuestoForm $form;
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->form->presupuestos, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        }
    }

    #[On('presupuesto-add')]
    public function add()
    {
        $plan = [
            'tratamiento' => '',
            'costo' => ''
        ];
        array_push($this->form->presupuestos, $plan);
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
        return view('livewire.historia.presupuesto');
    }
}
