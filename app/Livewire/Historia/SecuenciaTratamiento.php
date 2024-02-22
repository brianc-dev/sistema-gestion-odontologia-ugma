<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SecuenciaTratamiento extends Component
{
    #[Validate(
        [
            'secuenciaTratamiento' => ['array'],
            'secuenciaTratamiento.*' => ['array:fecha,diente,tratamiento_realizado,observaciones_docente,nombre_firma_docente'],
            'secuenciaTratamiento.*.fecha' => ['required'],
            'secuenciaTratamiento.*.diente' => ['required'],
            'secuenciaTratamiento.*.tratamiento_realizado' => ['required'],
            'secuenciaTratamiento.*.observaciones_docente' => ['required'],
            'secuenciaTratamiento.*.nombre_firma_docente' => ['required'],
        ]
    )]
    public $secuenciaTratamientos = [];
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->secuenciaTratamientos, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        } else {
            $plan = [
                'fecha' => '',
                'diente' => '',
                'tratamiento_realizado' => '',
                'observaciones_docente' => '',
                'nombre_firma_docente' => '',
            ];
            array_push($this->secuenciaTratamientos, $plan);
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
        array_push($this->secuenciaTratamientos, $plan);
    }

    public function render()
    {
        return view('livewire.historia.secuencia-tratamiento');
    }
}
