<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Historia Nro. '.$historia->numero_historia) }}
            </h2>

            @if(Auth::user()->role_id == 3)
                <div @class('justify-self-end')>
                    <livewire:historia.save-button />
                </div>
            @endif
        </div>
    </x-slot>

</x-app-layout>

