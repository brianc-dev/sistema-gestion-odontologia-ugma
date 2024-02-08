@php use Illuminate\Support\Facades\Auth; @endphp
<x-app-layout>
    <x-slot name="header">
        <div @class('flex space-x-4 justify-between items-center')>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Resumen') }}
            </h2>


        </div>
    </x-slot>
    <section class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido ".Auth::user()->name.'. Has iniciado sesión.') }}
                </div>
            </div>
            <div class="flex ">
                <div class="w-2/3 grow bg-slate-400">Nose</div>
                <div class="w-1/3 ">
                    <h3>Alumnos asignados</h3>
                    <div>

                        @forelse(Auth::user()->profesor->estudiantes as $estudiante)
                            <a href="{{ route('estudiante.show', ['estudiante' => $estudiante]) }}">
                                <div class="flex flex-col">
                                    <div><h2>{{ $estudiante }}</h2></div>
                                </div>
                            </a>

                        @empty
                            <p>No tiene alumnos asignados!</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
