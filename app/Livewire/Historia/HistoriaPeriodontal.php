<?php

namespace App\Livewire\Historia;

use App\Models\Historia;
use Livewire\Component;

class HistoriaPeriodontal extends Component
{
    public ?Historia $historia;
    public $enabled;

    public function render()
    {
        return view('livewire.historia.historia-periodontal');
    }
}
