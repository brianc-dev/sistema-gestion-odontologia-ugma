<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ModificacionesPlanTratamiento extends Component
{
    #[Validate(
        [
            'modificacionesPlanTratamiento' => ['array'],
            'modificacionesPlanTratamiento.*' => ['array:fecha,diente,tratamiento'],
            'modificacionesPlanTratamiento.*.fecha' => ['required', 'date'],
            'modificacionesPlanTratamiento.*.diente' => ['required', 'numeric', 'integer', 'between:18,48'],
            'modificacionesPlanTratamiento.*.tratamiento' => ['required'],
        ]
    )]
    public $modificacionesPlanTratamiento = [];
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->modificacionesPlanTratamiento, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        } else {
            $plan = [
                'fecha' => '',
                'diente' => '',
                'tratamiento' => ''
            ];
            array_push($this->modificacionesPlanTratamiento, $plan);
        }
    }

    #[On('plan-add')]
    public function addPlanTratamiento()
    {
        $plan = [
            'fecha' => '',
            'diente' => '',
            'tratamiento' => ''
        ];
        array_push($this->modificacionesPlanTratamiento, $plan);
    }

    public function render()
    {
        return view('livewire.historia.modificaciones-plan-tratamiento');
    }
}
