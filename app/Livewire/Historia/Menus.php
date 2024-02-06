<?php

namespace App\Livewire\Historia;

use Livewire\Component;
use function Laravel\Prompts\alert;

class Menus extends Component
{
    public $sections;

    public function changeSection($section) {
        $this->dispatch('section-changed', section: $section);
    }

    public function render()
    {
        return view('livewire.historia.menus')->with([
            'sections' => $this->sections
        ]);
    }
}
