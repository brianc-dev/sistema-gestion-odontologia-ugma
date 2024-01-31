<?php

namespace App\Livewire\Historia;

use Livewire\Component;
use function Laravel\Prompts\alert;

class Menus extends Component
{
    public function changeSection($section) {
        $this->dispatch('section-changed', section: $section)->to(EditorSection::class);
    }

    public function render()
    {
        return view('livewire.historia.menus');
    }
}
