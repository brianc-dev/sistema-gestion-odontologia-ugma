<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            @if(Auth::user()->role_id == 3)
                <div @class('justify-self-end')>
                    <a href="{{ route('historia.create') }}" @class('btn-option')>Crear nueva historia</a>
                </div>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido ".Auth::user()->name.'. Has iniciado sesión.') }}
                </div>
            </div>
            <div>
                <h2 @class("p-6 text-gray-900 font-semibold")>Historias médicas recientes</h2>
                <div>
                    @if(Auth::user()->role_id == 3)
                        @if(Auth::user()->estudiante->historias->count() > 0)

                        @else
                            <div>Aun no tienes historias médicas.</div>
                        @endif
                    @endif
                    @php


                    @endphp
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
