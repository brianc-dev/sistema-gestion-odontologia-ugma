<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administración') }}
            </h2>

            {{--            Opciones para el administrador--}}
            <livewire:historia.guardar-codigo :$historia/>
        </div>
    </x-slot>

    <section class="mx-auto bg-white">
        <livewire:historia.editor-section :historia="$historia" enabled/>
    </section>
</x-app-layout>
