<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administración') }}
            </h2>

            {{--            Opciones para el administrador--}}
            <div class="flex space-x-4 justify-end">

            </div>
        </div>
    </x-slot>

    <section class="container bg-white px-4 flex flex-col justify-center">
        <h2 class="font-bold text-lg">Usuarios registrados en el sistema</h2>
        @forelse(\App\Models\User::all() as $user)
            <div>
                {{$user->name}}
            </div>
        @empty
            <p>No existen usuarios</p>
        @endforelse
    </section>
</x-app-layout>
