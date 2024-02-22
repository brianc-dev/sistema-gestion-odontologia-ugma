<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Component;

class FichaEndodontica extends Component
{
    public ?Historia $historia;
    public $enabled;

    public function render()
    {
        return view('livewire.historia.ficha-endodontica');
    }
}
