<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Estudiantes') }}
            </h2>

        </div>
    </x-slot>
    <div class="flex flex-col w-full">

    @foreach(Estudiante::all() as $estudiante)
        <div class="flex space-between">
            <div>

            </div>
            <div>
                <button>Asignar profesor</button>
                <button>Editar</button>
            </div>
        </div>

    @endforeach

    </div>
</x-app-layout>
