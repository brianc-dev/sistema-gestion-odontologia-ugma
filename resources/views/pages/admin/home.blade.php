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

    <section class="container">
        <h2>
            Opciones de administracion
        </h2>
        <div class="flex flex-col space-y-4">
            <div class="flex space-x-4">
                <div class="rounded-lg bg-white">Historias</div>
                <div class="rounded-lg bg-white">Estudiantes</div>
            </div>
            <div class="flex space-x-4">
                <div class="rounded-lg bg-white">Profesores</div>
                <div class="rounded-lg bg-white">Usuarios</div>
            </div>
        </div>
    </section>
</x-app-layout>
