<?php

namespace App\Livewire\Forms;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SecuenciaTratamientoForm extends Form
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

    public function setSecuenciaTratamiento(Collection $secuenciaTratamiento)
    {
        $this->secuenciaTratamientos = $secuenciaTratamiento->map(fn( $s, $index) => [
            'fecha' => $s->created_at,
            'diente' => $s->diente,
            'tratamiento_realizado' => $s->tratamiento_realizado,
            'observaciones_docente' => $s->observaciones_docente,
            'nombre_firma_docente' => $s->firma,
        ]);
    }
}
