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
            <div class="flex bg-white p-4">
                <div class="w-2/3 grow">
                    <div>
                        <h3 class="p-4 text-lg font-bold">Alumnos con historias abiertas</h3>
                        @forelse(Auth::user()->profesor->estudiantes->where('historia_status', 0) as $estudiante)
                            <div class="border p-4">
                                <a href="{{ route('estudiante.show', ['estudiante' => $estudiante]) }}">
                                    <div class="flex">
                                        <div class="flex flex-col">
                                            <p class="font-bold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                            <p class="">Historias creadas: {{ $estudiante->historias()->count() }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p>No posee alumnos con historias abiertas</p>
                        @endforelse
                    </div>
                    <div>
                        <h3 class="p-4 text-lg font-bold">Alumnos con historias por revisión</h3>
                        @forelse(Auth::user()->profesor->estudiantes->where('historia_status', 1) as $estudiante)
                            <div class="border p-4">
                                <a href="{{ route('estudiante.show', ['estudiante' => $estudiante]) }}">
                                    <div class="flex">
                                        <div class="flex flex-col">
                                            <p class="font-bold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                            <p class="">Historias creadas: {{ $estudiante->historias()->count() }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p>No posee alumnos con historias en revision</p>
                        @endforelse
                    </div>
                    <div>
                        <h3 class="p-4 text-lg font-bold">Alumnos con historias cerradas</h3>
                        @forelse(Auth::user()->profesor->estudiantes->where('historia_status', 2) as $estudiante)
                            <div class="border p-4">
                                <a href="{{ route('estudiante.show', ['estudiante' => $estudiante]) }}">
                                    <div class="flex">
                                        <div class="flex flex-col">
                                            <p class="font-bold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                            <p class="">Historias creadas: {{ $estudiante->historias()->count() }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <p>No posee alumnos con historias cerradas</p>
                        @endforelse
                    </div>
                </div>
                <div class="w-1/3 p-4">
                    <p class="text-lg">Alumnos asignados</p>
                    <ul>

                        @forelse(Auth::user()->profesor->estudiantes as $estudiante)
                            <li class="border p-4">
                                <a href="{{ route('estudiante.show', ['estudiante' => $estudiante]) }}">
                                    <div class="flex">
                                        <div class="flex flex-col">
                                            <p class="font-bold text-lg">{{ $estudiante->nombre . ' ' . $estudiante->apellido }}</p>
                                            <p class="">Historias creadas: {{ $estudiante->historias()->count() }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        @empty
                            <p>No tiene alumnos asignados!</p>
                        @endforelse
                    </ul>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
