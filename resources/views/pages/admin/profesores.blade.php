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

    <section class="container bg-white">
        <div class="flex justify-center flex-col items-center">
            <h2>
                Opciones de administracion
            </h2>
            <div class="flex flex-col space-y-4">
                <div class="flex space-x-4">
                    <a href="">
                        <div class="rounded-lg bg-white">Historias</div>
                    </a>
                    <a href="#">
                        <div class="rounded-lg bg-white">Estudiantes</div>
                    </a>
                </div>
                <div class="flex space-x-4">
                    <a href="#">
                        <div class="rounded-lg bg-white">Profesores</div>
                    </a>
                    <a href="#">
                        <div class="rounded-lg bg-white">Usuarios</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
