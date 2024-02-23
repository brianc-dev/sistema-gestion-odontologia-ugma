<?php

namespace App\Livewire\Forms;

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
}
