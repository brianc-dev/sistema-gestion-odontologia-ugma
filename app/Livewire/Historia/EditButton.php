<?php

namespace App\Livewire\Historia;

use Livewire\Attributes\On;
use Livewire\Component;

class EditButton extends Component
{
    public $isUpdating = false;
    public function update()
    {
        $this->dispatch('historia.update');
    }

    public function updateMode($isUpdating)
    {
        $this->isUpdating = $isUpdating;
    }

    public function cancel()
    {
        $this->dispatch('historia-edit');
    }

    public function updateData()
    {
        $this->dispatch('historia-update');
    }

    public function edit()
    {
        $this->dispatch('historia-edit');
    }

    #[On('historia-editing')]
    public function editing(bool $isUpdating)
    {
        $this->isUpdating = $isUpdating;
    }

    public function render()
    {
        return view('livewire.historia.edit-button');
    }
}
