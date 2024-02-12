<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Historia Nro. '. ($historia->numero_historia != '' ? $historia->numero_historia : '(Por asignar)')) }}
            </h2>

            <div class="flex justify-end space-x-2 print:hidden">
            @can('update', $historia)
                <livewire:historia.edit-button></livewire:historia.edit-button>
            @endcan
            </div>
        </div>
    </x-slot>

    <section>
        <livewire:historia.editor-section :$historia/>
    </section>
</x-app-layout>

