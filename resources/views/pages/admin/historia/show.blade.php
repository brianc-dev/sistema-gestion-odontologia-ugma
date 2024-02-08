<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Administración') }}
            </h2>

            {{--            Opciones para el administrador--}}
            <div class="flex space-x-4 justify-end items-baseline">
                <p>Historia Nro.</p>
                <x-text-input />

                <button >Guardar</button>
            </div>
        </div>
    </x-slot>

    <section class="mx-auto max-w-7xl bg-white">
        <div class="flex justify-center flex-col items-center">

            <div class="flex flex-col space-y-4 w-full items-center justify-center">
                <livewire:historia.editor-section :historia="$historia" enabled />
            </div>
        </div>
    </section>
</x-app-layout>
