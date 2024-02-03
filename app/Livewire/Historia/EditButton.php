<?php

namespace App\Livewire\Historia;

use Livewire\Component;

class EditButton extends Component
{
    public function update()
    {
        $this->dispatch('historia.update');
    }

    public function render()
    {
        return view('livewire.historia.edit-button');
    }
}
