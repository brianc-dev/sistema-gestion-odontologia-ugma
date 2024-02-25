<?php

namespace App\Livewire\Forms;

use App\Models\Presupuesto;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PresupuestoForm extends Form
{
    #[Validate(
        [
            'presupuestos' => ['array'],
            'presupuestos.*' => ['array:tratamiento,costo'],
            'presupuestos.*.tratamiento' => ['required'],
            'presupuestos.*.costo' => ['required'],
        ]
    )]
    public $presupuestos = [];

    public function setPresupuesto(Presupuesto $presupuesto)
    {

    }
}
