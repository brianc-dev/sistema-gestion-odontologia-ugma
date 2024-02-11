<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public $event = '';
    public $text = '';

    public function onClick()
    {
        $this->dispatch($this->event);
    }

    public function render()
    {
        return view('livewire.button');
    }
}
