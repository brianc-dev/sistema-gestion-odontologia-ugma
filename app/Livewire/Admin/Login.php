<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectRoute('admin.home');
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
