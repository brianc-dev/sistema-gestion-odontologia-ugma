<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Presupuesto extends Component
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
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->presupuestos, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        } else {
            $plan = [
                'tratamiento' => '',
                'costo' => ''
            ];
            array_push($this->presupuestos, $plan);
        }
    }

    #[On('presupuesto-add')]
    public function add()
    {
        $plan = [
            'tratamiento' => '',
            'costo' => ''
        ];
        array_push($this->presupuestos, $plan);
    }

    public function render()
    {
        return view('livewire.historia.presupuesto');
    }
}
