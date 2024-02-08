<?php

use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $nombre = '';
    public string $apellido = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role = 'estudiante';
    public string $cedula = '';
    public string $letra_cedula = '';
    public string $numero_cedula = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $this->cedula = $this->letra_cedula . $this->numero_cedula;

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'nombre' => ['required', 'string', 'alpha', 'max:255'],
            'apellido' => ['required', 'string', 'alpha', 'max:255'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'regex:/estudiante|profesor/'],
            'letra_cedula' => ['required', 'string', 'size:1', 'regex:/^[V|E]$/'],
            'numero_cedula' => ['required', 'numeric', 'integer', 'min:100000', 'max:999999999', 'regex:/^[\d]{3,9}$/'],
            'cedula' => ['required', 'string', 'between:5, 10', 'regex:/^[V|E][\d]{3,9}$/', 'unique:' . Profesor::class, 'unique:' . Estudiante::class],
        ]);


        $validated['password'] = Hash::make($validated['password']);
        $validated['role_id'] = ($validated['role'] == 'estudiante') ? 3 : 2;

        event(new Registered($user = User::create($validated)));

        switch ($user->role_id) {
            case 2: // Caso profesor
                $profesor = new Profesor();
                $profesor->user_id = $user->id;
                $profesor->cedula = $validated['cedula'];
                $profesor->nombre = $validated['nombre'];
                $profesor->apellido = $validated['apellido'];
                $profesor->save();
                break;
            case 3: // Caso estudiante
                $estudiante = new Estudiante();
                $estudiante->user_id = $user->id;
                $estudiante->cedula = $validated['cedula'];
                $estudiante->nombre = $validated['nombre'];
                $estudiante->apellido = $validated['apellido'];
                $estudiante->save();
                break;
        }

        Auth::login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">
        <div class="mt-4 w-full mb-2">
            <x-input-label for="cedula" :value="__('Cédula')"/>
            <div class="flex space-between">
                <select wire:model.live="letra_cedula" value="-" class="me-2 rounded-md">
                    <option value="">-</option>
                    <option value="V">V</option>
                    <option value="E">E</option>
                </select>
                <x-input-error :messages="$errors->get('letra_cedula')" class="mt-2"/>
                <x-text-input wire:model.live="numero_cedula" id="numero_cedula"
                              class="block mt-1 w-full" type="tel"
                              name="numero_cedula" required autofocus/>
            </div>
            <div> @error('numero_cedula')
                <x-input-error :messages="$message" class=""></x-input-error> @enderror</div>
        </div>
        <x-input-error :messages="$errors->get('cedula')" class="mt-2"/>
        <!-- Nombre -->
        <div>
            <x-input-label for="nombre" :value="__('Nombre')"/>
            <x-text-input wire:model="nombre" id="nombre" class="block mt-1 w-full" type="text" nombre="nombre" required
                          autofocus autocomplete="nombre"/>
            <x-input-error :messages="$errors->get('nombre')" class="mt-2"/>
        </div>
        <!-- Apellido -->
        <div>
            <x-input-label for="apellido" :value="__('Apellido')"/>
            <x-text-input wire:model="apellido" id="apellido" class="block mt-1 w-full" type="text" apellido="apellido" required
                          autofocus autocomplete="apellido"/>
            <x-input-error :messages="$errors->get('apellido')" class="mt-2"/>
        </div>

        <!-- Username -->
        <div>
            <x-input-label for="name" :value="__('Nombre de usuario')"/>
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo Electrónico')"/>
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')"/>

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirme contraseña')"/>

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <!-- Estudiante or profesor -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Tipo de usuario')"/>

            <select wire:model="role" id="role" name="role" class="block mt-1 w-full rounded-md" required>
                <option value="estudiante">{{ __('Estudiante') }}</option>
                <option value="profesor">{{ __('Profesor') }}</option>
            </select>

            <x-input-error :messages="$errors->get('role')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}" wire:navigate>
                {{ __('Ya tiene usuario?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</div>
