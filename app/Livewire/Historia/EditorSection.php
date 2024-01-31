<?php

namespace App\Livewire\Historia;

use Livewire\Attributes\On;
use Livewire\Component;


class EditorSection extends Component
{
    public $section = 3;
    #[On('section-changed')]
    public function changeSection($section)
    {
        $this->section = $section;

    }

    public function render()
    {
        return view('livewire.historia.editor-section');
    }
}
