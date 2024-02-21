<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PlanTratamiento extends Component
{
    #[Validate(
        [
            'planTratamiento' => ['array'],
            'planTratamiento.*' => ['array:diente,cavidad,tratamiento'],
            'planTratamiento.*.diente' => ['required', 'numeric', 'integer', 'between:18,48'],
            'planTratamiento.*.cavidad' => ['required'],
            'planTratamiento.*.tratamiento' => ['required'],
        ]
    )]
    public $planTratamiento = [];
    public ?Historia $historia;
    public $enabled;

    public function delete($index)
    {
        array_splice($this->planTratamiento, $index, 1);
    }

    public function mount()
    {
        if ($this->historia) {

        } else {
            $plan = [
                'diente' => '',
                'cavidad' => '',
                'tratamiento' => ''
            ];
            array_push($this->planTratamiento, $plan);
        }
    }

    #[On('plan-add')]
    public function addPlanTratamiento()
    {
        $plan = [
            'diente' => '',
            'cavidad' => '',
            'tratamiento' => ''
        ];
        array_push($this->planTratamiento, $plan);
    }

    public function render()
    {
        return view('livewire.historia.plan-tratamiento');
    }
}
