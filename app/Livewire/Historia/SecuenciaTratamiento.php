<?php

namespace App\Livewire\Historia;

use App\Livewire\Forms\SecuenciaTratatamientoForm;
use App\Models\Historia;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SecuenciaTratamiento extends Component
{
    #[Modelable]
    public SecuenciaTratatamientoForm $form;
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->form->secuenciaTratamientos, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        }
    }

    #[On('secuencia-add')]
    public function addSecuencia()
    {
        $plan = [
            'fecha' => '',
            'diente' => '',
            'tratamiento_realizado' => '',
            'observaciones_docente' => '',
            'nombre_firma_docente' => '',
        ];
        array_push($this->form->secuenciaTratamientos, $plan);
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
        return view('livewire.historia.secuencia-tratamiento');
    }
}
