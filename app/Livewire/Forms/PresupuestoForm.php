<?php

namespace App\Livewire\Forms;

use App\Models\Presupuesto;
use Illuminate\Database\Eloquent\Collection;
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

    public function setPresupuesto(Collection $presupuestos)
    {
        $this->presupuestos = $presupuestos->map(fn($p, $index) => [
            'tratamiento' => $p->tratamiento,
            'costo' => $p->costo_unitario
        ])->toArray();
    }
}
