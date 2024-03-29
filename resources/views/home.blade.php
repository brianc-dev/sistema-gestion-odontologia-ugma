<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Resumen') }}
            </h2>

            @if(Auth::user()->role_id == 3)
                <div @class('justify-self-end')>
                    <livewire:historia.create-button/>
                </div>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido ".Auth::user()->name.'. Has iniciado sesión.') }}
                </div>
            </div>
            <div>
                <h2 @class("p-6 text-gray-900 font-semibold")>Historias médicas recientes</h2>
                <div class="flex flex-col gap-4">
                    @if(Auth::user()->role_id == 3)
                        @if(Auth::user()->estudiante->historias->count() > 0)
                            @foreach(Auth::user()->estudiante->historias as $historia)
                                <div wire:key="{{ $historia->id }}" class="rounded-md bg-white p-4">
                                    <a href="{{ route('historias.show', $historia->id) }}">
                                        <div class="flex justify-between items-center space-x-4">
                                            <p>Nro. {{ ($historia->numero_historia) ? $historia->numero_historia : 'Sin asignar'}}</p>
                                            <div class="flex space-x-4 justify-start grow">
                                                <p>Paciente: {{ $historia->paciente->nombre . ' ' . $historia->paciente->apellido }}</p>
                                                <p>{{ $historia->paciente->cedula }}</p>
                                            </div>
                                            <p class="text-slate-400 text-sm">{{ $historia->created_at->format('d-n-Y h:i A') }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div>Aun no tienes historias médicas.</div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
