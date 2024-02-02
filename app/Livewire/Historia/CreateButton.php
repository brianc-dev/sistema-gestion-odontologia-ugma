<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateButton extends Component
{
    public function createHistoria()
    {
        return $this->redirect(route('historia.create'), navigate: true);
    }

    public function render()
    {
        return view('livewire.historia.create-button');
    }
}
