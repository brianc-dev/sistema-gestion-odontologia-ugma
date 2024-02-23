<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SecuenciaTratatamientoForm extends Form
{
    #[Validate(
        [
            'secuenciaTratamientos' => ['array'],
            'secuenciaTratamientos.*' => ['array:fecha,diente,tratamiento_realizado,observaciones_docente,nombre_firma_docente'],
            'secuenciaTratamientos.*.fecha' => ['required'],
            'secuenciaTratamientos.*.diente' => ['required'],
            'secuenciaTratamientos.*.tratamiento_realizado' => ['required'],
            'secuenciaTratamientos.*.observaciones_docente' => ['required'],
            'secuenciaTratamientos.*.nombre_firma_docente' => ['required'],
        ]
    )]
    public $secuenciaTratamientos = [];
}
